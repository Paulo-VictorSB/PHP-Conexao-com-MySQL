<?php

$db = 'udemy_loja_online';
$user = 'user_loja_web';
$pass = 'b7399fbec45a8f35dbbf89e6b81662e2c135c40f892bd14e8271fa404dcb3b78';

$conexao = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);

$resultados = $conexao->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_ASSOC);

$conexao = null;

foreach($resultados as $resultado)
{
    $resultados = $resultado['produto'] . " - " . " R$ " . $resultado['preco_unidade'];
    echo $resultados;
    echo "<br>";
}

?>

