<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employee create</title>
</head>

<body>
    <form action="{{ route('employees.store') }}" method="post">
        @csrf
        nom : <input type="text" name="nom" id="nom">
        prenom : <input type="text" name="prenom" id="prenom">
        salaire : <input type="number" name="salaire" id="salaire">
        departement id : <select name="departement_id" id="">
@foreach ($departements as $d)

<option value="{{$d->id}}">{{$d->nom}}</option>
@endforeach
        </select>
        <button>Ok</button>
    </form>

</body>

</html>
