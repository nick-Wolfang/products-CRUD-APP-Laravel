<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    @vite('resouces/css/app.css')
</head>
<body>
    <div class="flex flex-row items-center justify-between">
        <div class="flex flex-column">
            <h3 class="font-body text-white text-2xl ml-4 cursor-pointer">Shoppy<span class="text-orange-500">.me</span></h3>
        </div>
        <div class="flex flex-row items-center">
            <div class="">
                
            </div>
            <div class="flex items-center ">
                <input type="text" name="name" id="name" class="h-8 mt-2 w-full
                    appearance-none-none block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  
                    focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                     placeholder="Search products"
                >
                <img src="{{asset('images/search-icons.png')}}" alt="search-icon" class="w-10 h-8 mt-2 cursor-pointer">
            </div>
        </div>
        <div class="flex flex-row">
            <div class="mx-8 flex flex-row items-center border border-white my-2 cursor-pointer hover:border-2 relative">
                <span class="text-white p-2">Basket</span>
                <img src="{{asset('images/basket5.png')}}" alt="basket" class="w-10 h-10">
            </div>
            <div class="mr-2 p-2">
                <a href="{{ route('profile.home') }}">
                    <img class="h-10 z-0 m-0 p-0" src="{{asset('images/avatar2.jpg')}}" alt="">
                </a>
                
                <div class="flex items-end items-center">
                    <h1 class=" text-sm text-white font-bold w-auto">
                        @if (Auth::check())
                            <a href="{{ route('profile.home') }}"> {{Auth::user()->name}} </a>
                        @else
                            Guest User
                        @endif
                    </h1>
                    {{-- <div class="h-3 w-3 bg-green-500 rounded-full mr-4 z-10 border-2 border-gray-100"></div> --}}
                    <span class="flex h-3 w-3 justify-between">
                        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-sky-400 opacity-75"></span>
                        <span class=" relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                </div>
            </div>
        </div>
        
    </div>
    <div class="flex flex-row w-full bg-gray-400 p-2 justify-between">
        <div class="flex flex-row justify-between items-center">
            <div class="flex flex-row items-center pr-10">
                <img src="{{asset('images/burger.png')}}" alt="burger-menu" class="w-5 h-4 cursor-pointer">
                <span class="pl-2"><strong>All</strong></span>
            </div>
            <div class="relative">
                <ul class="flex flex-row">
                    <li class="mr-4 border border-indigo-600 p-1 hover:border-indigo-600 hover:border-2 cursor-pointer ">Best Sales</li>
                    <li class="mr-4 border border-indigo-600 p-1 cursor- hover:border-indigo-600 hover:border-2 cursor-pointer ">Latest Releases</li>
                    <li class="mr-4 border border-white p-1 cursor-pointer hover:border-white-600 hover:border-2 cursor-pointer ">Musique</li>
                    <li class="mr-4 border border-white p-1 cursor-pointer hover:border-white-600 hover:border-2 cursor-pointer ">Flash Sales</li>
                    <li class="mr-4 border border-white p-1 cursor-pointer hover:border-white-600 hover:border-2 cursor-pointer ">Black Friday</li>
                    <li class="mr-4 border border-orange-500 p-1 cursor-pointer hover:border-orange-600 hover:border-2 cursor-pointer">Client Service</li>
                </ul>
            </div>
        </div>
        <div class="mt-1 ml-20 mr-0">
            <select class="focus:outline-none" name="categories" id="categories">
                <option class="" value="allCategories" selected>Select product Category</option>
                <option value="phones">Phones</option>
                <option value="phones">Clothing</option>
                <option value="phones">Computers</option>
                <option value="phones">Gaming</option>
            </select>
        </div>
        <a class="border border-white" href="{{ route('auth.logout')}}">Logout</a>
        
    </div>
</body>
</html>