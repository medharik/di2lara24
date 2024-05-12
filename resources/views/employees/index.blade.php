<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index employee</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>nom et prenom</td>
            <td>DEpartement</td>
            <td>salaire</td>
            <td>actions</td>
        </tr>

       @foreach ($employees as $d)
       <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->nom}} {{$d->prenom}}</td>
        <td>{{$d->departement->nom}} </td>
        <td>{{$d->salaire}}</td>
        <td>
            <a href="{{route('employees.show',$d->id)}}">Consulter</a>
            <a href="{{route('employees.edit',$d->id)}}">Editer</a>
            <form action="{{route('employees.destroy',$d->id)}}" method="post">
            @csrf
            @method("DELETE")
            <button>Supprimer</button>
            </form>

        </td>
    </tr>

       @endforeach



    </table>

</body>
</html>
