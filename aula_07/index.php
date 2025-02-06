<?php

use CRUDdb\Database;

define('MYSQL_CONFIG', [
    'host' => 'localhost',
    'database' => 'bd_stock',
    'username' => 'root',
    'password' => ''
]);

require_once('Database.php');

$db = new Database(MYSQL_CONFIG);

// SELECT 
// $results = $db->execute_query("SELECT * FROM stock limit 100");

// INSERT
// $params = [
//     ':produto' => 'produto tres',
//     ':quantidade' => 300
// ];

// $results = $db->execute_non_query("INSERT INTO stock(produto, quantidade) VALUES(:produto, :quantidade)", $params);
// UPDATE

// DELETE
$params = [
    ':id' => 5
];  

$results = $db->execute_non_query("DELETE FROM stock WHERE id = :id");

echo "<pre>";
print_r($results);
echo "OK";