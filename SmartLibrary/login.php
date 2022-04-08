<?php
session_start();
ob_start();
include_once 'conexao.php';
unset($_SESSION['id'],$_SESSION['nome']);

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


    <?php

    //Exemplo criptografar a senha
    //echo password_hash(123456, PASSWORD_DEFAULT);

     ?>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <img id="imLogo" src="_images/livrimM.png">
                <h2 class="logo">SmartLibrary</h2>
            </div>
        </div>
        <?php

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($dados['senha'])){
            //var_dump($dados);
              $query_username = "SELECT id, nome, username, senha
                      FROM usuarios WHERE username =:username 
                       LIMIT 1";
                        $result_username = $conn->prepare($query_username);
                        $result_username->bindParam(':username', $dados['username'], 
                        PDO::PARAM_STR);                       
                        $result_username->execute();

                        if(($result_username) AND ($result_username->rowCount() != 0)){
                            $row_username = $result_username->fetch(PDO::FETCH_ASSOC);
                            //var_dump( $row_username);
                            if(password_verify($dados['senha'], $row_username['senha'])){
                               $_SESSION['id'] = $row_username['id'];
                               $_SESSION['nome'] = $row_username['nome'];
                               header("Location: menu.php");
                            }else{
                                $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Senha inválida. Verifique!</p>";
                            }
                        }else{
                            $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário inválido. Verifique!</p>";
                        }                        
        }

        //Uma vez impressa ao atualizar destroi a mensagem!
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>


        <div id="form">
            <form method="POST" action="">
                <h2 class="title">BEM-VINDO!</h2>

                <!--Username-->
                <label for="username">Nome</label>
                <div class="input">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <!--icone-->
                    <input id="username" name="username" placeholder="Username" type="text" autocomplete="off" value="<?php if(isset($dados['username'])){ echo $dados['username']; } ?>">
                </div>

                <!--Senha-->
                <label for="senha">Senha</label>
                <div class="input">
                    <i class="fas fa-lock"></i>
                    <!--icone-->
                    <input id="senha" name="senha" placeholder="Password" type="password" autocomplete="off" value="<?php if(isset($dados['senha'])){ echo $dados['senha']; } ?>">
                </div>

                <!--Botão Entrar-->
                <div id="btn">
                    <button type="submit" <a href="#">Entrar</a></button>
                </div>

               <!-- <p class="link">Não tem uma conta?<br>
                    <a href="cadastrarSenha.php">Entre </a> aqui.</a>-->
                </p>

            </form>

        </div>

        <footer>
            <b>| SMARTLIBRARY | - © 2022 Copyright: Design Company</b>
        </footer>
    </div>

</body>

</html>