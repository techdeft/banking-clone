<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{

    public function getAccName($account)
    {
        $user = User::where('account', $account)->first();
        return json_encode($user);
    }


    public function send(Request $request)
    {
        $request->validate([
            'amount' => ['required'],
            'account' => ['required'],
            // 'summary' => ['required'],
        ]);

        if ($request->account == Auth::user()->account) {
            return false;
        }


        $sender_id = Auth::user()->id;
        $user = User::where('account', $request->account)->first();
        $recipient_id = $user->id;
        $amount = $request->amount;
        $summary = $request->summary;

        sendMoney($sender_id, $recipient_id, $amount, $summary);

        return redirect()->back();
    }
}