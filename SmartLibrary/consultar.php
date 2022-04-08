<?php
session_start();
ob_start();
include_once 'conexao.php';

//Verificação de usuário
if((!isset($_SESSION['id'])) AND !isset(($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style = 'color: #ff0000'>Erro: Necassário fazer Login para acessar a página!</p>";
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="_css/style.css" />
    <link rel="shortcut icon" href="_images/ico2.ico" type="image/x-icon">

    <title>SmartLibrary</title>
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <img id="imLogo" src="_images/livrimM.png">
                <a href="menu.php"><h2 class="logo">SmartLibrary</h2></a>
            </div>

            <h2 class="title1">CONSULTAR POR:</h2>

            <section class="flexx">
                <div class="item4">
                    <div><a href="livro.php">Livro</a></div>
                </div>
                <div class="item4">
                    <div> <a href="editora.php">Editora</a></div>
                </div>
                <div class="item4">
                    <div> <a href="genero.php">Gênero</a></div>
                </div>
                <div class="item4">
                    <div> <a href="autor.php">Autor</a></div>
                </div>
                <div class="item4">
                    <div> <a href="cemprestimo.php">Empréstimo</a></div>
                </div>
                <div class="item4">
                    <div> <a href="usuario.php">Usuário</a></div>
                </div>
            </section>
        </div>

        <footer>
            <b>| SMARTLIBRARY | - © 2022 Copyright: Design Company</b>
        </footer>
    </div>

</body>

</html>