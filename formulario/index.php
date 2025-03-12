<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Aluguel de Carro</title>
</head>
<body>
    <h1>Formulário de Aluguel de Carro</h1>
    <form action="processa_aluguel.php" method="post">
        <label for="carro_id">Carro:</label>
        <select name="carro_id" id="carro_id">
            <option value="1">Tesla X</option>
            <option value="2">Tesla Y</option>
            <option value="3">Tesla Z</option>
        </select><br><br>

        <label for="data_retirada">Data de Retirada:</label>
        <input type="date" name="data_retirada" id="data_retirada"><br><br>

        <label for="hora_retirada">Hora de Retirada:</label>
        <input type="time" name="hora_retirada" id="hora_retirada"><br><br>

        <label for="data_retorno">Data de Retorno:</label>
        <input type="date" name="data_retorno" id="data_retorno"><br><br>

        <label for="hora_retorno">Hora de Retorno:</label>
        <input type="time" name="hora_retorno" id="hora_retorno"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
