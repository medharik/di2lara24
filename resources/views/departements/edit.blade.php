<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>departement edit</title>
</head>

<body>
    <form action="{{ route('departements.update',$departement->id) }}" method="post">
        @method('PUT')
        @csrf
        nom : <input type="text" name="nom" id="nom" value="{{$departement->nom}}">
        effectif : <input type="number" name="effectif" id="effectif" value="{{$departement->effectif}}">
        <button>Ok</button>
    </form>

</body>

</html>
