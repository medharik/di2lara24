<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form de calcul</title>
</head>
<body>
<form action="{{url('/somme')}}" method="post">
    @csrf
<input type="text" name="a" placeholder="entrer a ">
<input type="text" name="b" placeholder="entrer  ">
<button>calculer</button>
</form>
</body>
</html>
