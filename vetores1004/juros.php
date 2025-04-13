<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Dívida</title>
</head>
<body>

<h2>Calculadora de Dívida</h2>

<form method="post">
    Valor da dívida: <input type="number" name="divida"><br><br>
    Juros (%): <input type="number" name="juros"><br><br>
    Parcelas: <input type="number" name="parcelas"><br><br>
    <input type="submit" name="calcular" value="Calcular">
</form>

<?php
if (isset($_POST["calcular"])) {
    $divida = $_POST["divida"];
    $juros = $_POST["juros"];
    $parcelas = $_POST["parcelas"];

    // Convertendo juros para decimal
    $taxa = $juros / 100;

    // Cálculo do montante (juros simples)
    $montante = $divida + ($divida * $taxa * $parcelas);

    // Valor de cada parcela
    $valorParcela = $montante / $parcelas;

    echo "<h3>Resultado:</h3>";
    echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";
    echo "Montante total: R$ " . number_format($montante, 2, ',', '.') . "<br>";
    echo "Média das parcelas: R$ " . number_format($valorParcela, 2, ',', '.');
}
?>

</body>
</html>
