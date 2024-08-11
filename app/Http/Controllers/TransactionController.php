<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addToCart (Request $request){
        // dd($request->all());
        $user_id = $request->user_id;
        $product_id = $request->product_id;
        $status = 'in the basket';
        $price = $request->price;
        $qty = $request->qty;

        $transaction = Transaction::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->where('status', 'in the basket')
            ->first();
        if ($transaction) {
            // If the product is already in the cart, increase the qty
            $transaction->qty += $qty;
            $transaction->save();
            return redirect()->back()->with('status', 'Succeed Add to Cart');
        } else {
            Transaction::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'status' => $status,
                'price' => $price,
                'qty' => $qty,
            ]);
            return redirect()->back()->with('status', 'Failed Add to Cart');
        }
    }

}
