<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cartItems = session()->get('cart');
        return view('cart',compact('cartItems'));
    }

    public function loadCart(){
        $cartItems = session()->get('cart');
        return view('cart-items',compact('cartItems'))->render();
    }

    public function addToCart($id, Request $request)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);

        $qty = $request->quantity ? $request->quantity : 1;
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $qty;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => $qty,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        $items = session()->get('cart');
        return response()->json([
            'success' => true,
            'msg' => "Product added to cart successfully!",
            'items' => count($items)
        ]);
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
