<?php
// Conexão com o banco de dados
$host = "localhost";
$dbname = "rentcar_db";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cidade_retirada = $_POST["cidade_retirada"];
    $data_retirada = $_POST["data_retirada"];
    $hora_retirada = $_POST["hora_retirada"];
    $cidade_devolucao = $_POST["cidade_devolucao"];
    $data_devolucao = $_POST["data_devolucao"];
    $hora_devolucao = $_POST["hora_devolucao"];

    // Inserindo os dados na tabela
    $sql = "INSERT INTO reservas (cidade_retirada, data_retirada, hora_retirada, cidade_devolucao, data_devolucao, hora_devolucao) 
            VALUES (:cidade_retirada, :data_retirada, :hora_retirada, :cidade_devolucao, :data_devolucao, :hora_devolucao)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":cidade_retirada", $cidade_retirada);
    $stmt->bindParam(":data_retirada", $data_retirada);
    $stmt->bindParam(":hora_retirada", $hora_retirada);
    $stmt->bindParam(":cidade_devolucao", $cidade_devolucao);
    $stmt->bindParam(":data_devolucao", $data_devolucao);
    $stmt->bindParam(":hora_devolucao", $hora_devolucao);

    if ($stmt->execute()) {
        echo "<script>alert('Reserva realizada com sucesso!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Erro ao realizar a reserva!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/css/estilo-al.css">
</head>
<body>
<header>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">
            <img src="../../assets/logo-white.png" alt="logo" class="logo-white" />
            <img src="../../assets/logo-dark.png" alt="logo" class="logo-dark" />
            <span>RentCar</span>
          </a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">Início</a></li>
        <li><a href="#about">Catálogo</a></li>
        <li><a href="#choose">Sobre nós</a></li>
        <li><a href="#client">Ajuda</a></li>
        <li><a href="#">Registrar</a></li>
      </ul>
    </nav>
  </header>
<!--menu-->
<div class="main-container">
    <!-- Formulário -->
    <div class="form-container">
        <h2>Detalhes do Aluguel 🚗</h2>

        <form method="POST" action="alugar_carro.php" onsubmit="mostrarLoader()">
            <div class="form-group">
                <label><i class="fa-solid fa-location-dot"></i> Retirada</label>
                <div class="row">
                    <input type="text" name="cidade_retirada" id="cidade_retirada" placeholder="Cidade" required>
                    <input type="date" name="data_retirada" id="data_retirada" required>
                    <input type="time" name="hora_retirada" id="hora_retirada" required>
                </div>
            </div>

            <div class="form-group">
                <label><i class="fa-solid fa-location-dot"></i> Devolução</label>
                <div class="row">
                    <input type="text" name="cidade_devolucao" id="cidade_devolucao" placeholder="Cidade" required>
                    <input type="date" name="data_devolucao" id="data_devolucao" required>
                    <input type="time" name="hora_devolucao" id="hora_devolucao" required>
                </div>
            </div>

            <button type="submit">Confirmar Reserva</button>
            <div id="loader" class="loader" style="display:none;"></div>
        </form>
    </div>

    <!-- Resumo -->
    <div class="resumo-container">
        <h3> <i class="fa-solid fa-car"></i> Resumo da Reserva</i></h3>
        <p><strong><i class="fa-solid fa-location-dot"></i> Retirada:</strong> <span id="resumoRetirada">-</span></p>
        <p><strong><i class="fa-solid fa-location-dot"></i> Devolução:</strong> <span id="resumoDevolucao">-</span></p>
    </div>
</div>
<script src="../../src/js/main2.js"></script>

    
</body>
</html>