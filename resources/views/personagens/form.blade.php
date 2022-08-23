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

        .nobr { white-space: nowrap }

        body {
            background-image: url('img/1920x1080-152483-fantasy-girl-simple-background-white-background-fantasy-art-Girl-With-Weapon.jpg');
            background-size: cover;
            background-repeat: no-repeat;
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

    &emsp;{!!Form::label('nome', 'Nome:', ['class' => 'form-check-label'])!!}
    {!!Form::text('nome', $personagem->nome ?? null,['placeholder' => 'Somente Letras', 'style' => 'width: 20em',  $form??null] );!!}

    &nbsp;{!!Form::label('xp', 'XP:', ['class' => 'form-check-label'])!!}
    {!!Form::number('xp', isset($personagem) ? $personagem->xp : 0,['style' => 'width: 7em',  $form??null] );!!} <br><br>

    &emsp;&nbsp;{!!Form::label('idade', 'Idade:', ['class' => 'form-check-label'])!!}
    {!!Form::number('idade', $personagem->idade ?? null,['placeholder' => 'Anos', 'style' => 'width: 5em',  $form??null] );!!}

    &nbsp;{!!Form::label('altura', 'Altura:', ['class' => 'form-check-label'])!!}
    {!!Form::number('altura', $personagem->altura ?? null,['placeholder' => 'CM', 'style' => 'width: 4em',  $form??null] );!!}

    &nbsp;{!!Form::label('peso', 'Peso:', ['class' => 'form-check-label'])!!}
    {!!Form::number('peso', $personagem->peso ?? null,['placeholder' => 'KG', 'style' => 'width: 5em',  $form??null] );!!} <br><br>

    &emsp;{!!Form::label('classe_id', 'Classe:', ['class' => 'form-check-label'])!!}
    {!!Form::select('classe_id', $classes, isset($personagem) ? $personagem->classe->id : null, ['placeholder'=> '', $form??null])!!}

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

    &emsp;{!!Form::label('campanha', 'Campanha:', ['class' => 'form-check-label'])!!}
    {!!Form::select('campanha', $campanhas, isset($personagem) ? $personagem->campanha->first()->id : null, ['placeholder'=> '', $form??null])!!}

    &ensp;<input type="submit" value="Confirmar">

    </form>
</body>

</html>
