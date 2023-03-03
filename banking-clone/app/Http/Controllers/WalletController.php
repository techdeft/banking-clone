<?php

namespace App\Http\Controllers;

use App\Models\User;
use Flutterwave\Flutterwave;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Flutterwave\EventHandlers\EventHandlerInterface;

class WalletController extends Controller
{

    public function getAccName($account)
    {
        $user = User::where('account', $account)->first();
        return json_encode($user);
    }



    public function pay(Request $request)
    {
        // Set the payment endpoint URL
        $endpoint = 'https://api.flutterwave.com/v3/payments';

        $trx = trx_ref();
        // Set the payload data for the payment request
        $payload = [
            "amount" => $request->amount,
            "currency" => "NGN",
            "tx_ref" => $trx,
            "redirect_url" => route('flutterwave.callback', $trx),
            "payment_options" => "card",
            "meta" => [
                "consumer_id" => Auth::user()->id,
                // "consumer_mac" => "92a3-912ba-1192a"
            ],
            "customer" => [
                "email" => Auth::user()->email,
                "phonenumber" => Auth::user()->phone,
                "name" => Auth::user()->first_name
            ],
            "customizations" => [
                "title" => "My Store Payment",
                "description" => "Payment for items in cart",
                "logo" => "https://assets.piedpiper.com/logo.png"
            ]
        ];

        // Set the HTTP headers for the payment request
        $headers = [
            'Authorization' => 'Bearer ' . env('FLUTTERWAVE_SECRET_KEY'),
            'Content-Type' => 'application/json'
        ];

        // Send the payment request and retrieve the response
        $response = Http::withHeaders($headers)->post($endpoint, $payload);

        // Redirect to the payment URL
        return redirect($response['data']['link']);
    }


    public function flutterwaveCallback(Request $request, $trx)
    {
        // Set the transaction verification endpoint URL
        $endpoint = 'https://api.flutterwave.com/v3/transactions/verify_by_reference?tx_ref=' . urlencode($trx);

        // Set the HTTP headers for the verification request
        $headers = [
            'Authorization' => 'Bearer ' . env('FLUTTERWAVE_SECRET_KEY'),
            'Content-Type' => 'application/json'
        ];

        // Send the verification request and retrieve the response
        $response = Http::withHeaders($headers)->get($endpoint);

        if ($response['status'] == 'success') {

            credit(Auth::user()->wallet->id, $response['data']['amount'], 'Wallet Funding', $response['data']['tx_ref']);

            $notify = array(
                'message' => 'Wallet funded successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('dashboard')->with($notify);
        } else {
            $notify = array(
                'message' => 'Payment Failed',
                'alert-type' => 'error'
            );

            return redirect()->route('dashboard')->with($notify);
        }
    }







    public function send(Request $request)
    {
        $request->validate([
            'amount' => ['required'],
            'account' => ['required'],
        ]);

        if ($request->account == Auth::user()->account) {
            return false;
        }


        $sender_id = Auth::user()->id;
        $user = User::where('account', $request->account)->first();
        $recipient_id = $user->id;
        $amount = $request->amount;
        $summary = $request->summary;
        $trx = trx_ref();

        sendMoney($sender_id, $recipient_id, $amount, $summary, $trx);

        return redirect()->back();
    }
}
