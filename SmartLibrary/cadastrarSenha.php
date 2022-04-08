<?php
session_start();
ob_start();
include_once 'conexao.php';

header("Location: login.php");

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Para importar os icones de username, Email e Passoword-->
    <script src="https://kit.fontawesome.com/cf61556164.js" crossorigin="anonymous"></script>
    <title>SmartLibrary</title>
    <link rel="shortcut icon" href="_images/ico2.ico" type="image/x-icon">
    <link rel="stylesheet" href="_css/style.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <img id="imLogo" src="_images/livrimM.png">
                <h2 class="logo">SmartLibrary</h2>
            </div>
        </div>

        <div id="form">
            <form action="">
                <h2 class="title">CADASTRAR</h2>

                <!--Username-->
                <label for="username">Nome</label>
                <div class="input">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <!--icone-->
                    <input id="username" name="username" placeholder="Username" type="text" autocomplete="off">
                </div>

                <!--Email-->
                <label for="email">Email</label>
                <div class="input">
                    <i class="far fa-envelope"></i>
                    <!--icone-->
                    <input id="email" name="email" placeholder="Email" type="text" autocomplete="off">
                </div>

                <!--Senha-->
                <label for="senha">Senha</label>
                <div class="input">
                    <i class="fas fa-lock"></i>
                    <!--icone-->
                    <input id="senha" name="senha" placeholder="Password" type="password" autocomplete="off">
                </div>

                <!--Botão cadastrar-->
                <div id="btn">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>

        <footer>
            <b>| SMARTLIBRARY | - © 2022 Copyright: Design Company</b>
        </footer>
    </div>

</body>

</html>