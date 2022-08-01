<html>
    <head>
        <title>{{env("APP_NAME")}} - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
       <link rel="stylesheet" href="{{asset('styles.css')}}">
      
    </head>
    <body class="flex flex-col">
        <div class="shadow-lg h-13 bg-sky-800 sticky top-0 drop-shadow z-30">
            @section('header')
            @include('components.header')
            @show
       </div>
        <div class="container flex flex-row">
            <div class="container flex-grow  h-screen p-3">
                @yield('content')
            </div>
        </div>
        <div class="mb-0 mt-full bottom-0 w-full h-50 bg-sky-800">
            @section('footer')
            @include('components.footer')
            @show
       </div>
        
    </body>
</html>