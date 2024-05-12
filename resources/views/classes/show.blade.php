<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>la page show</title>
</head>
<body>
    <h2>COnsultation de {{$classe->nom}}</h2>
    <h2>Id   {{$classe->id }}</h2>
    @if (count($classe->students)>0)
    <h3>les etudiants de cette classe est : </h3>
    <ul>
        @foreach ($classe->students as $e)
        <li>{{$e->nom}} {{$e->prenom}}</li>

        @endforeach
    </ul>
    @else

    <h2>Cette classe n'a pas encore d'etudiants</h2>

    @endif


</body>
</html>
