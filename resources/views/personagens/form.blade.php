<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de personagens</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            background-image: url('img/1920x1080-152483-fantasy-girl-simple-background-white-background-fantasy-art-Girl-With-Weapon.jpg');
            background-size: cover;
        }
    </style>
</head>

<body>
    <br>
    <h2>&emsp;Criação de Personagem</h2><br />
    @if (isset($personagem))
        <form method="POST" action="{{ route('personagens.update', $personagem->id) }}" accept-charset="UTF-8"
            name="form">
            @method('PUT')
        @else
            <form method="POST" action="{{ route('personagens.store') }}" accept-charset="UTF-8" name="form">
    @endif

    @csrf

    &ensp;<label for="nome" class="form-check-label">Nome:</label>
    <input placeholder="Somente Letras" name="nome" type="text" id="nome"
        value="{{ $personagem->nome ?? null }}">

    &nbsp;<label for="xp" class="form-check-label">XP:</label>
    <input type="number" id="xp" name="xp" style="width: 7em" value="{{ $personagem->xp ?? 0 }}"><br><br>

    &ensp;&nbsp;<label for="idade" class="form-check-label">Idade:</label>
    <input placeholder="Anos" type="number" id="idade" name="idade" style="width: 5em"
        value="{{ $personagem->idade ?? null }}">

    &nbsp;<label for="altura" class="form-check-label">Altura:</label>
    <input placeholder="CM" type="number" id="altura" name="altura" style="width: 4em"
        value="{{ $personagem->altura ?? null }}">

    &nbsp;<label for="peso" class="form-check-label">Peso:</label>
    <input placeholder="KG" type="number" id="peso" name="peso" style="width: 5em"
        value="{{ $personagem->peso ?? null }}"><br><br>

    &ensp;<label for="classe_id" class="form-check-label">Classe:</label>
    <select name="classe_id" id="classe_id">
        @foreach ($classes as $classe)
            <option value="{{ $classe->id }}">{{ $classe->nome }}</option>
        @endforeach
    </select>

    &nbsp;<label for="raca_id" class="form-check-label">Raça:</label>
    <select name="raca_id" id="raca_id">
        @foreach ($racas as $raca)
            <option value="{{ $raca->id }}">{{ $raca->nome }}</option>
        @endforeach
    </select><br><br>

    &ensp;&nbsp;<label for="forca" class="form-check-label">Força:</label>
    <input type="number" id="forca" name="forca" style="width: 3em"
        value="{{ $personagem->atributo->forca ?? 8 }}">

    &nbsp;<label for="destreza" class="form-check-label">Destreza:</label>
    <input type="number" id="destreza" name="destreza" style="width: 3em"
        value="{{ $personagem->atributo->destreza ?? 8 }}">

    &nbsp;<label for="constituicao" class="form-check-label">Constituição:</label>
    <input type="number" id="constituicao" name="constituicao" style="width: 3em"
        value="{{ $personagem->atributo->constituicao ?? 8 }}">

    &nbsp;<label for="inteligencia" class="form-check-label">Inteligência:</label>
    <input type="number" id="inteligencia" name="inteligencia" style="width: 3em"
        value="{{ $personagem->atributo->inteligencia ?? 8 }}">

    &nbsp;<label for="sabedoria" class="form-check-label">Sabedoria:</label>
    <input type="number" id="sabedoria" name="sabedoria" style="width: 3em"
        value="{{ $personagem->atributo->sabedoria ?? 8 }}">

    &nbsp;<label for="carisma" class="form-check-label">Carisma:</label>
    <input type="number" id="carisma" name="carisma" style="width: 3em"
        value="{{ $personagem->atributo->carisma ?? 8 }}"><br><br>

    &ensp;<label for="campanha" class="form-check-label">Campanha:</label>
    <select name="campanha" id="campanha">
        <option value=null></option>
        @foreach ($campanhas as $campanha)
            <option value="{{ $campanha->id }}">{{ $campanha->nome }}</option>
        @endforeach
    </select> <br><br>

    &ensp;<input type="submit" value="Confirmar">

    </form>
</body>

</html>
