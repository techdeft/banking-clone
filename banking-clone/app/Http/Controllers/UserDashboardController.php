<?php

namespace App\Http\Controllers;

use App\Models\{Transaction, UserS};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $trx = Transaction::where('wallet_id', $user->wallet->id)->OrderBy('id', 'Desc')->take(5)->get();
        return view('dashboard', compact('trx'));
    }
}
