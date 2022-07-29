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
<body class="w-full">
  
  <hr class="bg-gray-700 h-3 mb-2 rounded">
<div>
    <div class="flex items-center justify-between mb-6">
       
        <a class="bg-blue-500 p-2 rounded-md text-white hover:font-bold" href="{{route('products.create')}}">
          <span>Add Product</span>
          <span class="hidden md:inline">&nbsp;</span>
        </a>
      </div>

    
<div class="bg-white rounded-md shadow overflow-x-auto">
      {{-- @if (count($products)==0)
      <tr>
        <td class="px-6 py-4 border-t" colspan="4">No events found.</td>
     </tr>
      @endif --}}
      <div class="flex flex-wrap ml-8 shadow-2xl p-4 items-center">
      @foreach ($products as $product)
            {{-- <div class="">
              {{-- <img src="{{ url('public/storage/uploads').$product->image }}" alt="product image"> 
              <img src="/storage/{{ $product->image }}" alt="product image" class="max-w-xs">
            </div> --}}
            <div class="flex flew-row">
              <div class="bg-gray-100 rounded-md shadow mr-8 mt-4 max-h-50 max-w-45 p-3 min-w-30">
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
                    <span class="hover:text-underline  text-white-500 text-sm w-auto font-medium">
                      <a class="underline" href="{{ route('products.detail', ['id' => $product['id']] ) }}">Details</a>
                    </span>
                <div class="flex flex-col">
                  <a class="text-white bg-green-500 rounded-md p-1 cursor-pointer hover:font-bold relative cursor-pointer mt-2" href="{{route('auth.getLogin')}}">
                    Buy now &#128176;
                  </a>
                  <div class="hover:font-bold flex flex-col bg-white rounded-md p-1 cursor-pointer mt-2 items-center border hover:border-orange-500">
                    <a class=" cursor-pointer" href="{{route('auth.getLogin')}}">
                      Add to cart </a>
                    <img src="{{asset('images/basket5.png')}}" alt="basket" class="w-5 h-5">
                  </div>
                </div>
              </div>
              
            </div>
            
            
      @endforeach

    </div>
  </div>


</div>
<div class="flex flex-column bg-sky-800 mt-6">
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