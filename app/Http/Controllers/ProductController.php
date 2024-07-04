<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }
    public function index(){
        $products = Product::orderByDesc('created_at')->get();
        $title = 'Product List';
        return view('admin.product.index',compact('products','title'));
    }

    public function create(){
        $title = 'Create product';
        return view('admin.product.create',compact('title'));
    }

    public function store(Request $request){
        $request->validate([
            "product_name" => "required",
            "price" => "required|integer",
            "description" => "required|string",
            'product_images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $images = $request->file('product_images');

        $product = Product::create([
            'product_name' => $request->product_name,
            'price' => (double) $request->price,
            'description' => $request->description
        ]);

        if($product){
            $storedImages = [];
            foreach ($images as $image) {
                // Create a unique name with timestamp and random string
                $timestamp = now()->timestamp;
                $extension = $image->getClientOriginalExtension();
                $filename = $timestamp . '.'. $extension;
                // Store the image with the new name
                $path = $image->storeAs('uploads/product/'.$product->id, $filename, 'public');
                $storedImages[] = $path;
            }
        }

        $product->images = json_encode($storedImages);
        $product->save();

        return redirect()->with('success','Product Created Successfully!')->route('admin.products');
    }
}
