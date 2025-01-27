<?php

$db = 'udemy_loja_online';
$user = 'user_loja_web';
$pass = 'b7399fbec45a8f35dbbf89e6b81662e2c135c40f892bd14e8271fa404dcb3b78';

$conexao = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);

$clientes = $conexao->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);

$conexao = null;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela PHP conexão com MySQL</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h3>Tabela</h3>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-bordered table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>Data Nascimento</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($clientes as $cliente): ?>
                            <tr>
                                <td><?=$cliente->nome?></td>
                                <td><?=$cliente->sexo == 'f' ? "Feminino" : "Masculino"?></td>
                                <td>
                                    <?=$cliente->data_nascimento?>
                                </td>
                                <td><?=$cliente->email?></td>
                                <td><?=$cliente->telefone?></td>
                                <td><?=$cliente->morada . " - " . $cliente->cidade?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <hr>

        <div class="row mt-3">
            <div class="col">
                Total: <strong><?=count($clientes)?> clientes</strong>
            </div>
        </div>
    </div>

</body>
</html>