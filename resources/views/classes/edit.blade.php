<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>editing form</title>
</head>

<body>
    <h2>Edition de la classe {{$classe->nom}}</h2>
    <form action="{{ route('classes.update',$classe->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nom" id="nom" placeholder="Entrer le nom" value="{{$classe->nom}}">
        <button>Ok</button>
    </form>


</body>

</html>
