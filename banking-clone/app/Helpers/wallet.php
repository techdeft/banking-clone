<?php

use App\Models\User;
use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

function GenerateAccountNumber()
{
    $min = 4200000000;
    $max = 4299999999;
    $code = rand($min, $max);

    $maxAttempts = 5;
    $attempts = 0;

    while (User::where('account', $code)->exists() && $attempts < $maxAttempts) {
        $code = rand($min, $max);
        $attempts++;
    }

    return $code;
}


function trx_ref()
{
    $length = 19;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $trx_ref = '';

    for ($i = 0; $i < $length; $i++) {
        $trx_ref .= $characters[rand(0, $charactersLength - 1)];
    }

    return $trx_ref;
}


function Balance()
{

    $balance = Auth::user()->wallet->balance;

    return $balance;
}

function debit($wallet_id, $amount, $summary, $trx)
{
    $wallet = Wallet::find($wallet_id);
    $balance = $wallet->balance;

    if ($balance < $amount) {
        return false; // Insufficient balance
    }
    $wallet->balance = $balance - $amount;


    $wallet->save();

    Transaction::create([
        'wallet_id' => $wallet_id,
        'amount' => $amount,
        'type' => 'debit',
        'summary' => $summary,
        'trx_ref' => $trx,
    ]);

    return 'success';
}

function credit($wallet_id, $amount, $summary, $trx)
{
    $wallet = Wallet::find($wallet_id);
    $balance = $wallet->balance;

    $wallet->balance = $balance + $amount;

    $wallet->save();

    Transaction::create([
        'wallet_id' => $wallet_id,
        'amount' => $amount,
        'type' => 'credit',
        'summary' => $summary,
        'trx_ref' => $trx,
    ]);

    return 'success';
}

function sendMoney($sender_id, $recipient_id, $amount, $summary, $trx)
{
    $sender_wallet = Wallet::where('user_id', $sender_id)->first();
    $recipient_wallet = Wallet::where('user_id', $recipient_id)->first();



    // Check if both sender and recipient have wallets
    if (!$sender_wallet || !$recipient_wallet) {
        return false;
    }

    // Check if sender has sufficient balance
    if ($sender_wallet->balance < $amount) {
        return false;
    }

    // Execute debit transaction from sender wallet
    $debit_success = debit($sender_wallet->id, $amount, $summary, $trx);
    if (!$debit_success) {
        return false;
    }

    // Execute credit transaction to recipient wallet
    $credit_success = credit($recipient_wallet->id, $amount, $summary,  $trx);
    if (!$credit_success) {
        // Refund sender if credit transaction failed
        $refund_success = credit($sender_wallet->id, $amount, $summary,  $trx);
        return false;
    }

    return true;
}
