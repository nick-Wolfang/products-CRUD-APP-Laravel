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
    <div class="">
        <h2 class="mb-10 border-top-6">Bienvenu {{$user}} Liste des Produits</h2>
        <table class="border-separate border-spacing-2 border border-slate-400">
            <thead class="bg-gray-200 border-b-6">
                <tr class="px-6">
                    <th class="border-top-4">Id</th>
                    <th class="">Nom de l'appareil</th>
                    <th>Prix</th>
                    <th>Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $i)
                    <tr>
                        <td>{{ $i['id'] }}</td>
                        <td>{{ $i['name'] }}</td>
                        <td>{{ $i['price'] }} Fcfa</td>
                        <td class="hover:underline"><a href="{{ route('details', ['id'=>$i['id']]) }}">Details</a></td>
                        <td class="hover:underline"><a href="{{ route('edit', ['id'=>$i['id']]) }}">Edit</a></td>
                        <td class="hover:underline"><a href="{{ route('delete', ['id'=>$i['id']]) }}">Delete</a></td>

                    </tr>
                @endforeach
                
            </tbody>
        </table>
        <a class="underline hover:text-green-500" href="{{ route('create') }}">Add new product ?</a>
    </div>
</body>
</html>