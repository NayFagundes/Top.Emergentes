<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "DELETE FROM contato WHERE id = $id";
?>

<html>
<head>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="dados">
    <?php
    if (mysqli_query($conexao, $sql)) {
        echo "<p>Contato excluído com sucesso!</p>";
    } else {
        echo "<p>Erro ao excluir: " . mysqli_error($conexao) . "</p>";
    }
    ?>
    <a href="index.php">Voltar</a>
</div>
</body>
</html>
