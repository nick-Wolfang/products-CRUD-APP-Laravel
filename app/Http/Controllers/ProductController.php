<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    public function index(Request $req)
    {
        $users = User::query()->get();
        $products = Product::query()->get();
        // foreach($users as $user) {
        //     dd($user->product);
        // }
            
        // if(!Auth::check())
        return view('products.index', ['products' => $products, 'users' => $users]);
        // $user = User::with(['name'])->findOrFail(Auth::id());
        // return view('products.index', ['products' => $products, 'user' => $user]);
            
    }
    public function create()
    {
        return view('products.create');
    }
    public function save(Request $request)
    {
            $user = $request->user();
            $this->validate($request, [
            'name' => ['required', 'unique:products'],
            'description' => ['required'],
            'quantity' => ['required', 'integer'],
        ]);
        // $image_path = $request->file('product_image')->store('uploads', 'local');
        $product = Product::query()->create(array_merge($request->except(['_token']), ['user_id' => $user->id]));
        if ($request->hasFile('image')) {
            $file = $request->file('product_image');
            $filename = date('YmdHi').'_'.$file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $path = 'public/images/'.$filename;
            $product->update(['image' => $path]);
        }
        // $product = Product::query()->create($request->except(['_token']));
        
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->stock_min = $request->stock_min;
        $product->price = $request->price;
        $product->user_id = auth()->id();
        //$product->image = $path;
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
    public function buy($id)
    {
        $product = Product::find($id)->get();
        return view('products.buy', [
            'product' => $product
        ]);
    }
}
