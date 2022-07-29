<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//require 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->get();
        return view('products.index', 
            ['products' => $products]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function save(Request $request)
    {
            $this->validate($request, [
            'name' => ['required', 'unique:products'],
            'description' => ['required'],
            'quantity' => ['required', 'integer'],
            'product_image' => ['required'],
        ]);
        dd($request->product_image);
        $image_path = $request->file('product_image')->store('uploads', 'local');

        $image = Image::make("storage/{$image_path}")->fit(300, 200);
        dd('dfgb');

        $image->save();
        // $product = Product::query()->create($request->except(['_token']));
        
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->stock_min = $request->stock_min;
        $product->price = $request->price;
        $product->user_id = auth()->id();
        $product->image = $image_path;
        $product->save();
        return redirect(route('products.index'));
    }
    public function details($id)
    {
        $product = Product::find($id);
        return view('products.details', [
            'product' => $product
        ]);
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', [
            'product' => $product
        ]);
    }
    public function update($id, Request $req)
    {
        
        Product::find($id)->update($req->all());
        return redirect()->route('products.index');
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }

    public function search($name)
    {
        $products = Product::find($name)->get();
        return view('products.index', 
            ['products' => $products]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
