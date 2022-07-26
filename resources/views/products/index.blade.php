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
      {{-- @if (count($products)==0)
      <tr>
        <td class="px-6 py-4 border-t" colspan="4">No events found.</td>
     </tr>
      @endif --}}
      <div class="flex flex-wrap ml-8">

      @foreach ($products as $product)
            <div class="bg-gray-100 rounded-md shadow overflow-x-auto mr-8 mt-4">
              <h3 class="font-bold">
                {{ $product['name'] }}
              </h3>
              <p class="text-green-600">
                {{ $product['price'] }} <span class="text-xs">FCFA</span>
              </p>
              <p class="text-sm text-gray-700">
                Desc : <span class="text-gray-500 font-thin">{{ $product['description'] }}</span>
              </p>
              <p class="text-sm text-gray-600">
                Quantity : {{ $product['quantity'] }}
              </p>
               <span class="hover:text-underline text-blue-500 text-sm">
                  <a class="underline" href="{{ route('products.detail', ['id' => $product['id']] ) }}">Details</a>
               </span>
            </div>
      @endforeach
    </div>
  </div>


</div>
</body>
</html>

@endsection