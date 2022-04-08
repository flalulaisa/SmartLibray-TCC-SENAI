<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "inic";
$port = 3308;

try{
    //Conexão com a porta
    $conn = new PDO("mysql:host=$host;port=$port; dbname=" . $dbname, $user, $pass);


    //Conexão sem a porta
     //$conn = new PDO("mysql:host=$host; dbname=" . $dbname, $user, $pass);
    // echo "Conexão com banco de dados realizado com sucesso!";
}catch(PDOException $err){
    //echo "Erro: Verifique a conexão com o banco de dados! Erro gerado " . $err->getMessage();
}