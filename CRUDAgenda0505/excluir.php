<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM contato WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
    echo "Contato excluído com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
} else {
    echo "Erro ao excluir: " . mysqli_error($conexao);
}
?>