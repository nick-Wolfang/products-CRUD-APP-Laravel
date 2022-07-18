<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Here we Edit</h1>
    <form action="{{ route('update', ['id' => $product['id']]) }}" method="POST">
    @method('PUT')
    @csrf
        <div class="">
            <label for="id">ID</label>
            <input type="number" name="id" value="{{ $product['id'] }}" disabled>
            <label for="nom">Name</label>
            <input type="text" name="nom" value="{{ $product['name'] }}">
            <label for="prix">Price</label>
            <input type="number" name="prix" value="{{ $product['price'] }}">
            <label for="fournisseur">Provider</label>
            <input type="text" name="fournisseur" value="{{ $product['provider'] }}">
            <label for="Modele">Model</label>
            <input type="text" name="Modele" value="{{ $product['model'] }}">
            <input type="submit" value="Update">
        </div>
         
    </form>


    
    
</body>
</html>l