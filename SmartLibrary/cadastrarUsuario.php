<?php
session_start();
ob_start();
include_once 'conexao.php';


//Verificação de usuário
if((!isset($_SESSION['id'])) AND !isset(($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style = 'color: #ff0000'>Erro: Necassário fazer Login para acessar a página!</p>";
    //header("Location: login.php");
}


    //Recebe os dados do formulario de cadastraUsuario
    if (isset($_POST['acao']) && $_POST['form'] == 'f_form'){
        $nomeUsusario = $_POST['nomeUsuario'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $anoEdicao = $_POST['anoEdicao'];
        $msg = $_POST['msg'];
        $fImage = $_POST['fImage'];

        
        
        if($nomeUsusario == ''){
            Form::alert('erro','Preencha o Nome!');
        }else if($cpf == ''){
            Form::alert('erro','Preencha o CPF!');
        }else if($telefone == ''){
            Form::alert('erro','Preencha o Telefone!');
        }else if($endereco == ''){
            Form::alert('erro','Preencha o Endereço!');
        }else if($cep == ''){
            Form::alert('erro','Preencha o Cep!');
        }else if($anoEdicao == ''){
            Form::alert('erro','Preencha a Data de Nascimento!');
        }else if($msg == ''){
            Form::alert('erro','Preencha o Complemento!');
        }else if($fImage == ''){
            Form::alert('erro','Preencha com a Foto!');
        }else{
            Form::cadastrar($nomeUsusario,$cpf,$telefone,$endereco,$cep,$anoEdicao,$msg,$fImage);
            Form::alert('erro','Usuario ' .$nomeUsusario. 'cadastrado com sucesso!');
        }
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

        <h2 class="title3">CADASTRAR USUÁRIO</h2>
        <form method="POST" action="menu.php" name="form" value="f_form">
        <div class="container2">
            <div class="line">
                <div class="item1">
                    <label for="nomeUsuario">Nome</label>
                    <div class="input1">
                        <input id="nomeUsuario" name="nomeUsuario" placeholder="Nome completo" type="text" autocomplete="off">
                    </div>
                </div>

                <div class="item1">
                    <label for="cpf">CPF</label>
                    <div class="input1">
                        <input id="cpf" name="cpf" type="text" placeholder="Somente números"  pattern="[0-9]{11}" autocomplete="off" maxlength="14">
                        <!--<input id="editora" name="editora" placeholder="Editora" type="text" autocomplete="off">-->
                    </div>
                </div>


                <div class="item1">
                    <label for="tel">Telefone</label>
                    <div class="input1">
                        <input id="telefone" name="telefone" placeholder="Número" type="tel" autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="item1">
                    <label for="endereco">Endereço</label>
                    <div class="input1">
                        <input id="endereco" name="endereco" placeholder="Rua,Avenida,Logradouro, etc.." type="text" autocomplete="off">
                    </div>
                </div>

                <div class="item1">
                    <label for="cep">CEP</label>
                    <div class="input1">
                        <input id="cep" name="cep" placeholder="Somente números" type="text" autocomplete="off">
                    </div>
                </div>

                <div class="item1">
                    <label for="dataNasc">Data de nascimento</label>
                    <div class="inputAnoEdi">
                        <input id="anoEdicao" name="anoEdicao" placeholder="Data" type="date" autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="item1">
                    <label for="information">Informações Adicionais</label>
                    <div class="input1">
                        <textarea id="msg" name="msg" placeholder="Complemento:" rows="8" cols="60" maxlength="1000" type="text"></textarea>
                    </div>
                </div>


                <div class="item1">
                    <label class="labelCapa" for="foto">Foto</label>
                    <div class="inputCapa">
                        <img src="_css/camera.png" alt="Selecione uma imagem" id="imgPhoto">
                    </div>
                </div>

                <input type="file" id="flImage" name="fImage" accept="image/*">
            </div>


        </div>

        <!--Botão cadastrar-->

        <div id="btn1">
            <button id="btn1" type="submit" name ="acao" valeu="cadastrar">Cadastrar</button>
        </div>
        </form>
        <footer>
            <b>| SMARTLIBRARY | - © 2022 Copyright: Design Company</b>
        </footer>
    </div>

    <script src="_javascript/script.js"></script>

</body>

</html>