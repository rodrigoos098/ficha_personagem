<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            <td><a href="show/{{$personagem->id}}">Mostrar</a> <a href="edit/{{$personagem->id}}">Editar</a></td>
        </tr>
        @endforeach
    </table> <br /><br />
    {{ $personagens }}
</body>

</html>
