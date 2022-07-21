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
    <div class="flex items-center justify-between mb-6">
       <a class="bg-blue-500 p-2 rounded-md text-white hover:text-big" href="{{route('products.create')}}">
         <span>Create</span>
         <span class="hidden md:inline">&nbsp;Product</span>
       </a>
    </div>
    <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
        <th class="pb-4 border  pt-6 px-6">ID</th>
        <th class="pb-4 border pt-6 px-6">Name</th>
        <th class="pb-4 border pt-6 px-6">Price</th>
        <th class="pb-4 border pt-6 px-6">Description</th>
        <th class="pb-4 border pt-6 px-6">Quantity</th>
        <th class="pb-4 border pt-6 px-6">Minimum stock</th>

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
                {{$product['description']}}
            </td>
            <td class="border p-3 ">
                {{$product['quantity']}} 
            </td>
            <td class="border p-3 ">
                {{$product['stock_min']}}
            </td>
        </tr>
</body>
</html>l