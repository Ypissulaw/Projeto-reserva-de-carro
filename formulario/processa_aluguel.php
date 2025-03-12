<?php
// Conexão ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alugar-carro";

// Criando conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtendo dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $carro_id = $_POST['carro_id'];
    $data_retirada = $_POST['data_retirada'];
    $hora_retirada = $_POST['hora_retirada'];
    $data_retorno = $_POST['data_retorno'];
    $hora_retorno = $_POST['hora_retorno'];

    // Inserindo dados na tabela 'aluguel'
    $sql = "INSERT INTO aluguel (carro_id, data_retirada, hora_retirada, data_retorno, hora_retorno) 
            VALUES ('$carro_id', '$data_retirada', '$hora_retirada', '$data_retorno', '$hora_retorno')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo aluguel registrado com sucesso!<br><br>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Consulta SQL para obter os aluguéis e informações dos carros
$sql = "SELECT aluguel.id, carro.marca, carro.modelo, carro.valor_diario, carro.foto, 
        aluguel.data_retirada, aluguel.hora_retirada, aluguel.data_retorno, aluguel.hora_retorno 
        FROM aluguel
        JOIN carro ON aluguel.carro_id = carro.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Marca</th><th>Modelo</th><th>Valor Diário</th><th>Foto</th><th>Data de Retirada</th><th>Hora de Retirada</th><th>Data de Retorno</th><th>Hora de Retorno</th></tr>";
    // Saída de dados de cada linha
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["marca"] . "</td>";
        echo "<td>" . $row["modelo"] . "</td>";
        echo "<td>" . $row["valor_diario"] . "</td>";
        echo "<td><img src='" . $row["foto"] . "' width='100' /></td>";
        echo "<td>" . $row["data_retirada"] . "</td>";
        echo "<td>" . $row["hora_retirada"] . "</td>";
        echo "<td>" . $row["data_retorno"] . "</td>";
        echo "<td>" . $row["hora_retorno"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum aluguel encontrado.";
}

$conn->close();
?>
