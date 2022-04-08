<?php
session_start();
ob_start();
include_once 'conexao.php';

//Receber os dados do formulario
//$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($dados);

class Form{
    public static function alert($tipo,$mensagem){
        if($tipo == 'erro'){
            echo '<div style=" backgroud="black" color:red; font-size:25px;" >'.$mensagem.'</div>';
            return false;
        }else if($tipo == 'sucesso'){
            echo '<div style=" backgroud="black" color:green; font-size:25px;" >'.$mensagem.'</div>';
            return true;
        }
    }

    public static function cadastrar($nomeUsusario,$cpf,$telefone,$endereco,$cep,$anoEdicao,$msg,$fImage){
        $sql = conectar()->prepare("INSERT INTO 'cdusuario' VALUES (null, ?,?,?,?,?,?,?,?) ");
        $sql = exewcute($nomeUsusario,$cpf,$telefone,$endereco,$cep,$anoEdicao,$msg,$fImage);
    }