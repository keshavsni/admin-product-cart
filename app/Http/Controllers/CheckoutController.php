<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart');
        $total =  $cartItems ? count($cartItems) : 0;
        return view('checkout', compact('cartItems', 'total'));
    }

    public function process(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
        ]);
    }    
}
