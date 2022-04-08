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
                <h2 class="logo">SmartLibrary</h2>
            </div>

            <h2 class="title1">MENU</h2>

            <section class="flex">
                <div class="item">
                    <a href="cadastrarLivro.php"><img src="_images/cadLivro.png"></a>
                    <div>Cadastrar Livro</div>
                </div>
                <div class="item">
                    <a href="cadastrarUsuario.php"><img src="_images/usuario.png"></a>
                    <div>Cadastrar Usuário</div>
                </div>
                <div class="item">
                    <a href="emprestimo.php"><img src="_images/emprestimo.png"></a>
                    <div>Empréstimo</div>
                </div>
                <div class="item">
                    <a href="consultar.php"><img src="_images/consulta.png"></a>
                    <div>Consultas</div>
                </div>
                <div class="item">
                    <a href="ajuda.php"><img src="_images/ajuda.png"></a>
                    <div>Ajuda</div>
                </div>
                <div class="item">
                    <a href="login.php"><img src="_images/sair.png"></a>
                    <div>Sair</div>
                </div>
            </section>
        </div>

        <footer>
            <b>| SMARTLIBRARY | - © 2022 Copyright: Design Company</b>
        </footer>
    </div>

</body>

</html>