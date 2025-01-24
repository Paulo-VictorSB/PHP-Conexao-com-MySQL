<?php

$db = 'udemy_loja_online';
$user = 'user_loja_web';
$pass = 'b7399fbec45a8f35dbbf89e6b81662e2c135c40f892bd14e8271fa404dcb3b78';

$conexao = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);

$status = $conexao->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo $status;