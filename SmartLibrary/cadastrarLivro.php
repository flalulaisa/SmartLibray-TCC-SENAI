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

        <h2 class="title3">CADASTRAR LIVRO</h2>

        <div class="container2">
            <div class="line">
                <div class="item1">
                    <label for="nomeLivro">Título</label>
                    <div class="input1">
                        <input id="nomeLivro" name="nomeLivro" placeholder="NomeLivro" type="text" autocomplete="off">
                    </div>
                </div>

                <div class="item1">
                    <label for="editora">Editora</label>
                    <div class="input1">
                        <input id="editora" name="editora" placeholder="Editora" type="text" autocomplete="off">
                    </div>
                </div>

                <div class="item1">
                    <label for="autor">Autor</label>
                    <div class="input1">
                        <input id="autor" name="autor" placeholder="Autor" type="text" autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="item1">
                    <label for="genero">Gênero</label>
                    <div class="input1">
                        <input id="genero" name="genero" placeholder="Gênero" type="text" autocomplete="off">
                    </div>
                </div>

                <div class="item1">
                    <label for="paginas">Número de páginas</label>
                    <div class="input1">
                        <input id="paginas" name="paginas" placeholder="Páginas" type="text" autocomplete="off">
                    </div>
                </div>

                <div class="item1">
                    <label for="anoEdicao">Ano de Edição</label>
                    <div class="inputAnoEdi">
                        <input id="anoEdicao" name="anoEdicao" placeholder="Data Publicação" type="date" autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="item1">
                    <label for="descricao">Descrição</label>
                    <div class="input1">
                        <textarea id="msg" name="msg" placeholder="Resumo" rows="8" cols="60" maxlength="1000" type="text"></textarea>
                    </div>
                </div>


                <div class="item1">
                    <label class="labelCapa" for="descricao">Capa</label>
                    <div class="inputCapa">
                        <img src="_css/camera.png" alt="Selecione uma imagem" id="imgPhoto">
                    </div>
                </div>

                <input type="file" id="flImage" name="fImage" accept="image/*">
            </div>


        </div>
        <!--Botão cadastrar-->

        <div id="btn1">
            <button type="submit">Cadastrar</button>
        </div>

        <footer>
            <b>| SMARTLIBRARY | - © 2022 Copyright: Design Company</b>
        </footer>
    </div>

    <script src="_javascript/script.js"></script>

</body>

</html>