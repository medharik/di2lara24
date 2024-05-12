<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employee edit</title>
</head>

<body>
    <form action="{{ route('employees.update',$employee->id) }}" method="post">
        @method('PUT')
        @csrf
        nom : <input type="text" name="nom" id="nom" value="{{$employee->nom}}">
        prenom : <input type="text" name="prenom" id="prenom" value="{{$employee->prenom}}">
        salaire : <input type="number" name="salaire" id="salaire" value="{{$employee->salaire}}">
        <button>Ok</button>
    </form>

</body>

</html>
