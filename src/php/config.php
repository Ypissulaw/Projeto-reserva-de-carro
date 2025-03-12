<?php
$dsn = 'mysql:host=localhost;dbname=aluguel_carros';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    die('Conexão falhou: ' . $erro->getMessage());
}
?>