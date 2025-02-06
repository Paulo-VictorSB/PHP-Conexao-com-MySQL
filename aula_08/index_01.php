<?php

$database = 'novo_banco_dados';
$username = 'root';
$password = '';

$conexao = new PDO('mysql:host=localhost', $username, $password);

$conexao->exec("DROP DATABASE IF EXISTS $database");
$conexao->exec("CREATE DATABASE IF NOT EXISTS $database");
$conexao->exec("USE `$database`");

$conexao->exec(
    "CREATE TABLE usuarios (" .
    "`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, " .
    "`usuario` VARCHAR(30) NULL DEFAULT NULL, " . 
    "`senha` VARCHAR(100) NULL DEFAULT NULL, " .
    "`created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP" .  
    ")"
);

$ligacao = null;