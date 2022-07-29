
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
    
      <hr class="bg-gray-700 h-3 mb-2 rounded">
    <div class="flex items-center justify-between mb-6">
       <a class="bg-sky-800 p-2 rounded-md text-white hover:text-big" href="{{route('products.create')}}">
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
        <div class="bg-green-400 ml-2">
            <span class="text-underline text-white-500">
              <a class="underline" href="{{ route('products.edit', ['id' => $product['id']] ) }}">Edit</a>
            </span>
          </div>
          <div class="bg-red-400 p-1">
            <span class="text-underline text-white-500">
              <form action="{{ route('products.destroy', ['id' => $product['id']] ) }}" method="post">
                @method('DELETE')
                @csrf
                <input  class="underline" type="submit" value="Delete">
              </form>
             </span>
          </div>
        <div class="flex flex-column bg-sky-800">
            <div class="">
              <h1 class="h-4 w-full bg-sky-500"></h1>
            </div>
          
            <div class="flex flex-row justify-evenly">
              <div class="flex flex-column p-2 mt-10">
                <h3 class="font-body text-white text-2xl ml-4 cursor-pointer">Shoppy<span class="text-orange-500">.me</span></h3>
              </div>
                <div class="p-8">
                    <h3 class=""><strong>Pour mieux nous connaitre</strong></h3>
                    <div class="">
                        <ul>
                            <li><a class="hover:underline" href="#">A propos de <strong>Shoppy</strong></a></li>
                            <li><a class="hover:underline" href="#">Carrières</a></li>
                            <li><a class="hover:underline" href="#"></a>Durabilité</li>
                        </ul>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class=""><strong>Gagner de l'Argent</strong></h3>
                    <div class="">
                        <ul>
                            <li><a class="hover:underline" href="#">Vendez sur <strong>Shoppy</strong></a></li>
                            <li><a class="hover:underline" href="#">Devenez partenaire</a></li>
                            <li><a class="hover:underline" href="#"></a>Faites la promotion de vos produits</li>
                        </ul>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class=""><strong>Moyens de paiement</strong></h3>
                    <div class="">
                        <ul>
                            <li><a class="hover:underline" href="#">Carte de Paiement</a></li>
                            <li><a class="hover:underline" href="#">Paiement en plusieurs fois</a></li>
                            <li><a class="hover:underline" href="#"></a>Cartes Cadeaux</li>
                        </ul>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class=""><strong>Besoin d'aide ?</strong></h3>
                    <div class="">
                        <ul>
                            <li><a class="hover:underline" href="#">Voir vos commandes</a></li>
                            <li><a class="hover:underline" href="#">Suivre vos commandes</a></li>
                            <li><a class="hover:underline" href="#"></a>Tarifs et <br> options de livraison</li>
                            <li><a class="hover:underline" href="#"></a>Retours et <br> remplacements</li>
                            <li><a class="hover:underline" href="#"></a>Infos sur notre <br> market place</li>
                            <li><a class="hover:underline" href="#"></a>Service client</li>
                            <li><a class="hover:underline" href="#"></a>Accessibilité</li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
</body>
</html>

@endsection