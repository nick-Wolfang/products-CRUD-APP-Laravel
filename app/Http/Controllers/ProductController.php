<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        ]);
        
        Product::query()->create($request->except(['_token']));
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
}
