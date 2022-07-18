<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
    <h1 class="text-center text-2xl font-bold  py-3"> My Laravel Portfolio </h1><hr>
    <p class="text-center text-4xl py-3">Welcome! <br></p>
    <p class="text-center text-3xl text-white font-bold py-4 white">I'm Nick Wolfgang.</p>
    
    <div class="py-6 border-blue-200">
        <p class=" text-center  hover:animate-bounce  h-6  opacity-70 hover:opacity-95">
            <a href="/cv" class="text-white font-bold rounded bg-gray-500">
                Click to see my Resume&#128203; &#128073;
            </a>
        </p>
        <p class="mt-8 text-center hover:animate-bounce  h-6 opacity-70 hover:opacity-95">
            <a href="{{ url('/projects') }}" class="text-white font-bold rounded bg-gray-500">
                Click here to see my projects &#128209; &#128073;
            </a>
        </p>
    </div>
</body>
</html>