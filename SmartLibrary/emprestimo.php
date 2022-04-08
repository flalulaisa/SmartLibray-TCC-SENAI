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
                <img id="imLogo" src="_images/livrimM.png">
                <a href="menu.php"><h2 class="logo">SmartLibrary</h2></a>
            </div>
        </div>

        <h2 class="title3">EMPRÉSTIMO</h2>

        <div class="container4">
            <div class="line">
                <div class="item1">
                    <label for="nome">Nome usuário</label>
                    <div class="input1">
                        <input id="nome" name="nome" placeholder="Nome completo" type="text" autocomplete="off">
                    </div>
                </div>

                <div class="item1">
                    <label for="livro">Nome do Livro</label>
                    <div class="input1">
                        <input id="livro" name="livro" placeholder="Título" type="text" autocomplete="off">
                    </div>
                </div>

            </div>

            <div class="line">

                <div class="item1">
                    <label for="emprestimo">Data de empréstimo</label>
                    <div class="inputAnoEdi">
                        <input id="emprestimo" name="emprestimo" placeholder="Saída" type="date" autocomplete="off">
                    </div>
                </div>

                <div class="item1">
                    <label for="devolucao">Data de devolução</label>
                    <div class="inputAnoEdi">
                        <input id="devolucao" name="devolucao" placeholder="Devolução" type="date" autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="item1">
                    <label for="descricao">Informações Adicionais</label>
                    <div class="input1">
                        <textarea id="msg" name="msg" placeholder="Descrição" rows="8" cols="60" maxlength="1000" type="text"></textarea>
                    </div>
                </div>


                <div class="item1">
                    <label class="labelCapa2" for="descricao">Capa</label>
                    <div class="inputCapa2">
                        <img src="_css/camera.png" alt="Selecione uma imagem" id="imgPhoto">
                    </div>
                </div>

                <input type="file" id="flImage" name="fImage" accept="image/*">
            </div>


        </div>
        <!--Botão Salvar-->

        <div id="btn1">
            <button type="submit">Salvar</button>
        </div>

        <footer>
            <b>| SMARTLIBRARY | - © 2022 Copyright: Design Company</b>
        </footer>
    </div>

    <script src="_javascript/script.js"></script>

</body>

</html>