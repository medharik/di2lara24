<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index departement</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>effectif</td>
            <td>actions</td>
        </tr>

       @foreach ($departements as $d)
       <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->nom}}
            @foreach ($d->employees as $e)
<li>{{$e->nom}} {{$e->prenom}}</li>
            @endforeach
        </td>
        <td>{{$d->effectif}}</td>
        <td>
            <a href="{{route('departements.show',$d->id)}}">Consulter</a>
            <a href="{{route('departements.edit',$d->id)}}">Editer</a>
            <form action="{{route('departements.destroy',$d->id)}}" method="post">
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
