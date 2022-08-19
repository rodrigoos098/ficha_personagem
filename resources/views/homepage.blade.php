<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fichas de personagens</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body {
        background-image: url('img/143212-fantasy-art-fantasy-girl-simple-background-white-background.jpg');
    }
    </style>
</head>

<body>
    <h1>Fichas de Personagens  &#127993;</h1>
    {{-- <img src="img/bard_female.jpg" width=45% alt="Uma Barda tocando em uma taverna"> --}}
    <h3>Para onde deseja ir, jovem aventureiro?</h3> <br/>
    <a type="button" class="btn btn-primary" href="{{route('personagem.index')}}">Listar personagens criados</a> <br/>
    <a type="button" class="btn btn-primary" href="{{route('personagem.create')}}">Criar personagem</a>
</body>

</html>
