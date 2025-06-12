<?php
include('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO contato (nome, endereco, telefone) VALUES ('$nome', '$endereco', '$telefone')";

if (mysqli_query($conexao, $sql)) {
    // Redireciona automaticamente para a página index.php
    header("Location: index.php");
    exit(); // Encerra o script após o redirecionamento
} else {
    echo "Erro ao salvar: " . mysqli_error($conexao);
}
?>
