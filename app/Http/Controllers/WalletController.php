<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function topupNow(Request $request){
        $user_id = Auth::user()->id;
        $credit = $request->credit;
        $status = 'process';
        $dsc = 'Top Up';

        Wallet::create([
            'user_id' => $user_id ,
            'credit' => $credit ,
            'status' => $status,
            'dsc' => $dsc
        ]);

        return redirect()->back()->with('status','Process TopUp');
    }
}
