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
                <a href="menu.php">
                    <img id="imLogo" src="_images/livrimM.png">
                    <h2 class="logo">SmartLibrary</h2>
                </a>
            </div>
        </div>

        <h2 class="title1">CONSULTAR</h2>


        <div class="container3">
        
            
            <div class="input2">


                <div class="item1">
                    
                    <form action="/action_page.php">
                        <input list="browsers">
                        <datalist id="browsers">
                            <option value="Usúario">
                            <option value="Estoque">
                            <option value="Autor">
                            <option value="Editora">
                            <option value="Título">
                            <option value="Gênero">
                        </datalist>
                    </form>
                </div>

            </div>

            <div id="btn2">
                <button type="submit">Buscar</button>
            </div>              

        </div>
     
    </div>
    <!--Botão cadastrar-->

  

    <footer>
        <b>| SMARTLIBRARY | - © 2022 Copyright: Design Company</b>
    </footer>
    </div>

    <script src="_javascript/script.js"></script>

</body>

</html>