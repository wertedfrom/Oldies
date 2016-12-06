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
        return view('cart', compact('cart'));
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

    // trash cart

    // total
}
