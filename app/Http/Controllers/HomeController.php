<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function home(){
        $count = Transaction::where('status','in the basket')->sum('qty');
        $products = Product::all();
        $wallets = Wallet::where('status', 'finish')->get();
        $credit = 0;
        $debit = 0;

        foreach ($wallets as $wallet) {
            $credit += $wallet->credit;
            $debit += $wallet->debit;
        }

        $saldo = $credit - $debit;

        $carts = Transaction::where('status','in the basket')->get();
        $transactions = Transaction::where('status','paid')->orderBy('created_at','DESC')->paginate(2)->groupBy('order_id');
        return view('home.index', compact('products', 'saldo'));
    }

    public function cart(){
        $count = Transaction::where('status', 'di keranjang')->sum('qty');
        $products = Product::all();
        $carts = Transaction::where('status','di keranjang')->get();
        $transactions = Transaction::where('status','dibayar')->orderBy('created_at','DESC')->paginate(5)->groupBy('order_id');
        $total_biaya = 0;
        foreach($carts as $cart){
            $total_price = $cart->price * $cart->qty;
            $total_biaya += $total_price;
        }
        return view('home.content.cart', compact('count','products', 'carts', 'total_biaya'));
    }
}
