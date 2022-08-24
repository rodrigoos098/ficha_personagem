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
            background-image: url('img/form_girl.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        @font-face {
            font-family: 'devinne_swashregular';
            src: url('font/devinneswash-qzd5-webfont.woff2') format('woff2'),
                url('font/devinneswash-qzd5-webfont.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>

<body>
    <br>
    <h2>&emsp;Criação de Personagem</h2><br />

    @if (isset($personagem))
        {!! Form::open(['route' => array('personagens.update', $personagem->id), 'method' => 'PUT', 'name' => 'form'])!!}
    @else
        {!! Form::open(['route' => array('personagens.store'), 'method' => 'POST', 'name' => 'form'])!!}
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

    &nbsp;{!!Form::label('raca_id', 'Raça:', ['class' => 'form-check-label'])!!}
    {!!Form::select('raca_id', $racas, isset($personagem) ? $personagem->raca->id : null, ['placeholder'=> '', $form??null])!!}<br><br>

    &emsp;&nbsp;{!!Form::label('forca', 'Força:', ['class' => 'form-check-label'])!!}
    {!!Form::number('forca', $personagem->atributo->forca ?? 8,['style' => 'width: 3em',  $form??null] );!!}

    &nbsp;{!!Form::label('destreza', 'Destreza:', ['class' => 'form-check-label'])!!}
    {!!Form::number('destreza', $personagem->atributo->destreza ?? 8,['style' => 'width: 3em',  $form??null] );!!}

    &nbsp;{!!Form::label('constituicao', 'Constituição:', ['class' => 'form-check-label'])!!}
    {!!Form::number('constituicao', $personagem->atributo->constituicao ?? 8,['style' => 'width: 3em',  $form??null] );!!}

    &nbsp;{!!Form::label('inteligencia', 'Inteligência:', ['class' => 'form-check-label'])!!}
    {!!Form::number('inteligencia', $personagem->atributo->inteligencia ?? 8,['style' => 'width: 3em',  $form??null] );!!}

    &nbsp;{!!Form::label('sabedoria', 'Sabedoria:', ['class' => 'form-check-label'])!!}
    {!!Form::number('sabedoria', $personagem->atributo->sabedoria ?? 8,['style' => 'width: 3em',  $form??null] );!!}

    &nbsp;{!!Form::label('carisma', 'Carisma:', ['class' => 'form-check-label'])!!}
    {!!Form::number('carisma', $personagem->atributo->carisma ?? 8,['style' => 'width: 3em',  $form??null] );!!} <br><br>

    &emsp;{!!Form::label('campanha', 'Campanha:', ['class' => 'form-check-label'])!!}
    {!!Form::select('campanha', $campanhas, (isset($personagem) && $personagem->campanha->first() !== null) ? $personagem->campanha->first()->id : null, ['placeholder'=> '', $form??null])!!} <br><br>

    &emsp;{!! Form::submit('Salvar', ['class' => 'btn btn-success', $form??null]); !!} <br><br>

    {!! Form::close() !!}

    @if (isset($personagem))
        {!! Form::open(['route' => array('personagens.destroy', $personagem->id), 'method' => 'DELETE', 'name' => 'form'])!!}
        &emsp;{!! Form::submit('Excluir', ['class' => 'btn btn-danger', $form??null]); !!}
        <p style="color: red">&emsp;CUIDADO!!!</p>
        {!! Form::close() !!}
    @endif
</body>

</html>
