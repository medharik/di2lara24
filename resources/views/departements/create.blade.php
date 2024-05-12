<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>departement create</title>
</head>

<body>
    <form action="{{ route('departements.store') }}" method="post">
        @csrf
        nom : <input type="text" name="nom" id="nom">
        effectif : <input type="number" name="effectif" id="effectif">
        <button>Ok</button>
    </form>

</body>

</html>
