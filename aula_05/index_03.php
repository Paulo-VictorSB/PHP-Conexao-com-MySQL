<?php

$db = 'udemy_loja_online';
$user = 'user_loja_web';
$pass = 'b7399fbec45a8f35dbbf89e6b81662e2c135c40f892bd14e8271fa404dcb3b78';

try {
    $conexao = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);

    $resultados = $conexao->query("SELECT * FROM produtos WHERE id > 100")->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $err) {
    $erro = "Aconteceu um erro durante a conexão.";
}

$conexao = null;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>

    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-5">

                <?php if (!empty($erro)): ?>
                    <p class="text-center text-danger"><?= $erro ?></p>
                <?php else: ?>

                    <?php if (count($resultados) == 0): ?>
                        <p class="text-center">Não foram encontrados dados.</p>
                    <?php else: ?>

                        <?php foreach ($resultados as $produto): ?>
                            <div class="card p-3 mb-2 bg-light text-center">
                                <h5><?= $produto->produto ?></h5>
                                <h3 class="text-primary"><?= $produto->preco_unidade ?>$</h3>
                            </div>
                        <?php endforeach; ?>

                    <?php endif; ?>

                <?php endif; ?>

            </div>
        </div>

    </div>

</body>

</html>