<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>
<body>

    <h2>Lista de Personagens:</h2>
    <a type="button" class="btn btn-primary" href="{{route('personagem.create')}}">Criar personagem</a>
    <table style="width:100%">
        <tr>
            <th>Nome</th>
            <th>XP</th>
            <th>Classe</th>
            <th>Raça</th>
            <th>Ações</th>
        </tr>
        @foreach ($personagens as $personagem)
        <tr>
            <td>{{$personagem->nome}}</td>
            <td>{{$personagem->xp}}</td>
            <td>{{$personagem->classe->nome}}</td>
            <td>{{$personagem->raca->nome}}</td>
            <td><a type="button" class="btn btn-primary" href="{{route('personagem.show',$personagem->id)}}">Visualizar</a>
                <a type="button" class="btn btn-primary" href="{{route('personagem.edit',$personagem->id)}}">Editar</a>
        </tr>
        @endforeach
    </table> <br /><br />
    {{ $personagens }}
</body>

</html>
