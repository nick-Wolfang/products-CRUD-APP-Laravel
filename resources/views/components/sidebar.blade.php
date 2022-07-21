

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="border-8 h-full bg-[url('../../../public/images/very-light-blue')]">
    <div class="mx-6 pt-6">
        <span class="">
            <a href="{{ route('products.index') }}">
                {{-- <form action="{{ route('products.search', ['name' => $product['name']]) }}" method="get">
                    <input type="text" name="name" id="name">
                </form> --}}
                <img src="../../../public/images/search-icons.png" alt="" class="">
                <input type="text" name="name" id="name" class="rounded h-8 border-0" placeholder="Search products">
            </a>
        </span>
        <div class="">
            <h4 class="text-white hover:font-bold pt-10 text-base"><a href="{{ route('products.index') }}">Products List</a></h4>
            <hr class="mb-1">
            <h4 class="text-white hover:font-bold pt-10 text-base"><a href="{{ route('products.index') }}">About</a></h4>
            <hr class="mb-1">
            <h4 class="text-white hover:font-bold pt-10 text-base"><a href="{{ route('products.index') }}">Contact</a></h4>
            <hr class="mb-1">
        </div>
 
    </div>
</body>
</html>