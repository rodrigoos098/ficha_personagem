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
            background-image: url('img/139380-anime-girls-simple-background-white-background-long-hair-sword-katana.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <br>
    <h2>&emsp;Lista de Personagens:</h2><br>
    <div class="container-fluid">
        <a type="button" class="btn btn-success" href="{{ route('personagens.create') }}">Criar personagem</a>
    </div><br>

    <br />

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
