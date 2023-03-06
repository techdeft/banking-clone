<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\{Transaction, User, Bank};

class UserDashboardController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $trx = Transaction::where('wallet_id', $user->wallet->id)->OrderBy('id', 'Desc')->take(5)->get();

        // $clientIP = \Request::ip();
        // dd($clientIP);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer FLWSECK-3dab025677e331162af1416a6c8fd239-X',
        ])->get('https://api.flutterwave.com/v3/banks/NG');

        if ($response->successful()) {
            $bank = $response->json();

            // Here i saved the list of banks in database so i can get it if api response returns null

            // foreach ($response['data'] as $item) {
            //     $bank =  new Bank;
            //     $bank->id = $item['id'];
            //     $bank->code = $item['code'];
            //     $bank->name = $item['name'];
            //     $bank->save();
            // }
            $banks = $bank['data'];
        } else {
            $error = $response->json()['message'];
            // If error i get the saved banks
            $banks = Bank::get();
        }

        return view('dashboard', compact('trx', 'banks'));
    }

    public function airtime()
    {
        return view('customer.buy_airtime');
    }
}
