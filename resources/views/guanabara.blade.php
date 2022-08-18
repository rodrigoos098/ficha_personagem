<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>É o Guanabara</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <h1>Salve Mundo</h1>
    <p>Escolha algum lugar pra ir</p> <br/>
    <a href="index">Lista de Personagens</a> <br/>
    <a href="create">Crie um Personagem</a> <br/>
    @if (2 > 1)
        @for ($i = 0; $i < 5; $i++, $numeroQualquer++)
             <h2>{{ $nomeQualquer }} {{ $numeroQualquer }}</h2>
        @endfor
        @foreach ($indios as $indio)
        <h2>{{ $indio }}</h2>
        @endforeach
    @endif
</body>

</html>
