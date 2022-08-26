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

    {{-- Imagem de background e fonte que não funcionou direto no sass --}}
    <style>
      body {
            background-image: url('img/index_girl.jpg');
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
    {{-- Titulo --}}
    <br>
    <h2>&emsp;Lista de Personagens:</h2><br>
    {{-- Botão de criar personagem --}}
    <div class="container-fluid">
        <a type="button" class="btn btn-success" href="{{ route('personagens.create') }}">Criar personagem</a>
    </div><br>

    <br />
    {{-- Tabela de listar personagens  --}}
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>XP</th>
                    <th>Classe</th>
                    <th>Raça</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personagens as $personagem)
                    <tr>
                        <td>{{ $personagem->nome }}</td>
                        <td>{{ $personagem->xp }}</td>
                        <td>{{ $personagem->classe->nome }}</td>
                        <td>{{ $personagem->raca->nome }}</td>
                        {{-- Botões de Editar e Visualizar  --}}
                        <td><a type="button" class="btn btn-primary"
                                href="{{ route('personagens.show', $personagem->id) }}">Visualizar</a>
                            <a type="button" class="btn btn-warning"
                                href="{{ route('personagens.edit', $personagem->id) }}">Editar</a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> <br /><br />
</body>

</html>
