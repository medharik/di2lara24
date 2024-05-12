<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des classes</title>
</head>
<body>
<table>
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>students</td>
        <td>actions</td>
    </tr>
    @foreach ($classes as $c)
 <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->nom}}</td>
        <td>
 @foreach ($c->students as $e)
<p>{{$e->nom}} {{$e->prenom}}</p>
 @endforeach

        </td>
        <td>
            <a href="{{route('classes.show',$c->id)}}">Consulter</a>
            <a href="{{route('classes.edit',$c->id)}}">Editer</a>
            <form action="{{route('classes.destroy',$c->id)}}" method="post" onsubmit="return confirm('supprimer?')">
                @csrf
            @method('DELETE')
            <button >Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
</body>
</html>
