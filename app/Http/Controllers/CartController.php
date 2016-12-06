<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __construct()
    {
        if(!Session::has('cart')) Session::put('cart',array());
    }

    // show cart
    public function show()
    {
        $cart = Session::get('cart');
        $total = $this->total();
        return view('cart', compact('cart','total'));
    }

    // add item
    public function add(Publication $product, Request $request)
    {
        $cart = Session::get('cart');
        $product->quantity = $request->input('quantity');
        $cart[$product->id] = $product;
        Session::put('cart',$cart);
        return redirect()->route('cart-show');
    }

    // delete item
    public function delete(Publication $product)
    {
        $cart = Session::get('cart');
        unset($cart[$product->id]);
        Session::put('cart',$cart);
        return redirect()->route('cart-show');
    }

    // update item
    public function update(Publication $product, Request $request)
    {
        $cart = Session::get('cart');
        $cart[$product->id]->quantity = $request->input('quantity_'.$product->id);
        Session::put('cart',$cart);
        return redirect()->route('cart-show');
    }

    // trash cart
    public function trash(){
        Session::forget('cart');
        return redirect()->route('cart-show');
    }


    // total
    private function total(){
        $cart = Session::get('cart');
        $total=0;
        foreach ($cart as $item){
            $total += $item->price * $item->quantity;
        }
        return $total;
    }
}
