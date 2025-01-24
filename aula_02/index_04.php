<?php

$db = 'udemy_loja_onlinexxx';
$user = 'user_loja_web';
$pass = 'b7399fbec45a8f35dbbf89e6b81662e2c135c40f892bd14e8271fa404dcb3b78';

try {
    $conexao = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);

    $conexao = $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $status = $conexao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo $status;

    $conexao = null;

} catch(PDOException $err){
    echo "<pre>";
    print_r($err);
    
    echo "<br>";
    print_r($err->errorinfo);
}