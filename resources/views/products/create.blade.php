<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau produit</title>
    <link rel="canonical" href="http://www.example.com/product.html" />

</head>
<body>
    
    {{-- /products/create =>  --}}
    <h2>Nouveau produit</h2>
    <form action="{{url('product/store')}}" method="post">
        @csrf
        Libelle : <input type="text" name="libelle" id="">
        Prix : <input type="text" name="prix" id="">
        <button>Ajouter le produit</button>

    </form>

</body>
</html>
