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
    <form action="{{ route('save') }}" method="POST">
    @csrf
        <div class="">
            <label for="id">ID</label>
            <input type="number" name="id">
            <label for="nom">Name</label>
            <input type="text" name="nom">
            <label for="prix">Price</label>
            <input type="number" name="prix">
            <label for="fournisseur">Provider</label>
            <input type="text" name="fournisseur">
            <label for="Modele">Model</label>
            <input type="text" name="Modele">
            <input type="submit" value="Create">
        </div>
         
    </form>


    
    
</body>
</html>l