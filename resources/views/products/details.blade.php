<h1>Details</h1><!DOCTYPE html>
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
        <h2 class="mb-10 border-top-6">Details du produit</h2>
        <table class="border-separate border-spacing-2 border border-slate-400">
            <thead class="bg-gray-200 border-b-6">
                <tr class="px-6">
                    <th class="border-top-4">Id</th>
                    <th class="">Nom de l'appareil</th>
                    <th>Prix</th>
                    <th>Fournisseur</th>
                    <th>Modèle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['provider'] }}</td>
                    <td>{{ $product['model'] }}</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>
</html>