<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page de test</title>
</head>

<body>

    <a href="{{ route('products.index') }}">Consulter les produits</a>
    <a href="{{ route('products.show', 1) }}">consulter le produit 1</a>
    <form action="{{ route('products.destroy',2) }}" method="post">
        @method('delete')
        @csrf
        <input type="text" name="id" id="">
        <button>Ok</button>
    </form>
</body>

</html>
