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
        }
    </style>
</head>

<body>

    <h2>Criação de Personagem</h2><br />
    <form>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="xp">XP:</label>
        <input type="text" id="xp" name="xp"><br><br>
        <label for="idade">Idade:</label>
        <input type="text" id="idade" name="idade"><br><br>
        <label for="altura">Altura:</label>
        <input type="text" id="altura" name="altura"><br><br>
        <label for="peso">Peso:</label>
        <input type="text" id="peso" name="peso"><br><br>
        <label for="classe">Classe:</label>
        <input type="text" id="classe" name="classe"><br><br>
        <label for="raca">Raça:</label>
        <input type="text" id="raca" name="raca"><br><br>
        <label for="forca">Força:</label>
        <input type="text" id="forca" name="forca"><br><br>
        <label for="destreza">Destreza:</label>
        <input type="text" id="destreza" name="destreza"><br><br>
        <label for="constituicao">Constituição:</label>
        <input type="text" id="constituicao" name="constituicao"><br><br>
        <label for="inteligencia">Inteligência:</label>
        <input type="text" id="inteligencia" name="inteligencia"><br><br>
        <label for="sabedoria">Sabedoria:</label>
        <input type="text" id="sabedoria" name="sabedoria"><br><br>
        <label for="carisma">Carisma:</label>
        <input type="text" id="carisma" name="carisma"><br><br>
        <input type="submit" value="Confirmar">
    </form>
</body>

</html>
