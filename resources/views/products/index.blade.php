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
<body class="z-10">
  <h1 class="mb-6  mt-2 text-3xl font-bold bg-gray-200 h-24 rounded" >
    <a class="text-indigo-400 hover:text-indigo-600 mb-6 pt- hover:underline" href="{{route('products.index')}}">Products</a>
    <span class="text-indigo-400 font-medium pt-4">/</span>
    <hr>
  </h1>
  <hr class="bg-gray-700 h-3 mb-2 rounded">
<div>
    <div class="flex items-center justify-between mb-6">
       
        <a class="bg-blue-500 p-2 rounded-md text-white hover:font-bold" href="{{route('products.create')}}">
          <span>Create</span>
          <span class="hidden md:inline">&nbsp;Product</span>
        </a>
      </div>

    
<div class="bg-white rounded-md shadow overflow-x-auto">
    <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
        <th class="pb-4 border  pt-6 px-6">ID</th>
        <th class="pb-4 border pt-6 px-6">Name</th>
        <th class="pb-4 border pt-6 px-6">Price</th>
        <th class="pb-4 border pt-6 px-6">Details</th>
        <th class="pb-4 border pt-6 px-6">Edit</th>
        <th class="pb-4 border pt-6 px-6">Delete</th>
       
      </tr>
      @if (count($products)==0)
      <tr>
        <td class="px-6 py-4 border-t" colspan="4">No events found.</td>
     </tr>
      @endif
      @foreach ($products as $product)
        <tr class="hover:bg-gray-100 focus-within:bg-gray-100">
            <td class="border p-3 text-center">
                {{ $product['id'] }}
            </td>
            <td class="border p-3 ">
                {{$product['name']}}
            </td>
            <td class="border p-3 ">
                {{$product['price']}} FCFA
            </td>
            <td class="border p-3 ">
               <span class="text-underline text-blue-500">
                <a class="underline" href="{{ route('products.detail', ['id' => $product['id']] ) }}">Details</a>
               </span>
            </td>
            <td class="border p-3 ">
               <span class="text-underline text-blue-500">
                <a class="underline" href="{{ route('products.edit', ['id' => $product['id']] ) }}">Edit</a>
               </span>
            </td>
            <td class="border p-3 ">
               <span class="text-underline text-blue-500">
                <form action="{{ route('products.destroy', ['id' => $product['id']] ) }}" method="post">
                  @method('DELETE')
                  @csrf
                  <input  class="underline" type="submit" value="Delete">
                </form>
               </span>
            </td>
            
        </tr>
       
      @endforeach
    </table>
  </div>


</div>
</body>
</html>

@endsection