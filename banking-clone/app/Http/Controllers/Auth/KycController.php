<?php

namespace App\Http\Controllers\Auth;

use App\Models\{Kyc, User};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KycController extends Controller
{
    //
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('auth.kyc', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => ['required', 'string', 'max:255'],
            'user_id' => ['required'],
            'id_type' => ['required'],
            'id_number' => ['required'],
            'id_card' => ['required'],

        ]);

        $kyc = new Kyc;
        $kyc->address = $request->address;
        $kyc->user_id = $request->user_id;
        $kyc->bvn = $request->bvn;
        $kyc->id_type = $request->id_type;
        $kyc->id_number = $request->id_number;
        $kyc->id_card = $request->id_card;
        $kyc->save();

        $notify = array(
            'message' => 'Kyc Submited Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notify);
    }
}
