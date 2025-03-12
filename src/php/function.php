<?php

//mostra carro
function getCarrosDisponiveis($pdo)
{
    $stmt = $pdo->query("SELECT id, marca, modelo FROM carros");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// mostra clientes
function getClientes($pdo) {
    $sql = "SELECT id, nome FROM clientes"; // Trocar 'name' por 'nome'
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
