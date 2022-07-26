@extends('layouts.app')


@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<div class=" w-full">
       
      <h1 class="mb-6  mt-2 text-3xl font-bold bg-gray-200 h-24 rounded content-center" >
        <a class="text-indigo-400 hover:text-indigo-600 mb-6 pt- hover:underline" href="{{route('products.index')}}">Products</a>
        <span class="text-indigo-400 font-medium pt-4">/</span>Create
        <hr>
      </h1>
      <hr class="bg-gray-700 h-3 mb-2 rounded">
      <hr>
       <div class="max-w-3xl bg-white border-4 rounded-md shadow overflow-hidden">
       
         <form action="{{route('products.save')}}" enctype="multipart/form-data" method="POST" >
           @csrf
           <div class="flex flex-col flex-wrap -mb-8 -mr-6 p-8">
               <div class="flex flex-col py-2">
                   <span class="font-bold">Name</span>
                   <input type="text" name="name" id="name" value="{{old('name')}}"  placeholder="Product name" class="border  p-1 rounded-md @error('name') border-red-500 @enderror"/>
                   @error('name')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
               <div class="flex flex-col py-2">
                   <span class="font-bold">Description</span>
                   <textarea type="text" name="description" value="{{old('description')}}" id="description"   placeholder="Product Description" class="border  p-1 rounded-md @error('description') border-red-500 @enderror"></textarea>
                   @error('description')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
               {{-- <div class="flex flex-col py-2">
                    <span class="font-bold">Product Type </span>
                    <h6 class="text-gray-300 text-sm">choose only one</h6>
                    <div class="flex flex-column">  
                        <span class="text-sm mr-2">Tech & Gaming:</span><input type="radio" name="productid_tech" value="{{old('productid_tech')}}" id="productid_tech" class="border  p-1 rounded-md mr-4 @error('productid_tech') border-red-500 @enderror"/>
                        <span class="text-sm mr-2">Clothing :</span><input type="radio" name="productid_cloth" value="{{old('productid_cloth')}}" id="productid_cloth" class="border  p-1 rounded-md mr-4 @error('productid_cloth') border-red-500 @enderror"/> 
                        <span class="text-sm mr-2">Cars :</span><input type="radio" name="productid_cars" value="{{old('productid_cars')}}" id="productid_cars" class="border  p-1 rounded-md mr-4 @error('productid_cars') border-red-500 @enderror"/>
                        <span class="text-sm mr-2">Phones</span><input type="radio" name="productid_phones" value="{{old('productid_phones')}}" id="productid_phones" class="border  p-1 rounded-md mr-4 @error('productid_phones') border-red-500 @enderror"/>
                    </div>
                    @error('productid_tech')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div> --}}
               <div class="flex flex-col py-2">
                   <span class="font-bold">Price</span>
                   <input type="number" name="price" value="{{old('price')}}" id="price"  placeholder="Product price" class="border  p-1 rounded-md @error('price') border-red-500 @enderror"/>
                   @error('price')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>

               <div class="flex flex-col py-2">
                   <span class="font-bold">Quantity</span>
                   <input type="number" name="quantity" value="{{old('quantity')}}" id="quantity"  placeholder="Product quantity" class="border  p-1 rounded-md @error('quantity') border-red-500 @enderror"/>
                   @error('quantity')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>

               <div class="flex flex-col py-2">
                   <span class="font-bold">Min Stock</span>
                   <input type="number" name="stock_min" value="{{old('stock_min')}}" id="stock_min"  placeholder="Product Minimum Stock" class="border  p-1 rounded-md @error('stock_min') border-red-500 @enderror"/>
                   @error('stock_min')
                       <span class="text-red-500 text-sm">{{ $message }}</span>
                   @enderror
               </div>
               <div class="flex flex-col py-2">
                    <span class="font-bold">Product's Image</span>
                    <input type="file" name="product_image" value="{{old('product_image')}}" id="product_image"  placeholder="Product Minimum Stock" class="border  p-1 rounded-md @error('product_image') border-red-500 @enderror"/>
                    @error('product_image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
           </div>
           <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
               <button type="submit" class="text-indigo-400 bg-blue-500 p-2 rounded-md text-white hover:text-indigo-600" href="{{route('products.index')}}">Create Product</button>
           </div>
         </form>
       </div>
     </div>

</body>
</html>

@endsection