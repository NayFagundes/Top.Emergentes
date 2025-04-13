<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Convidados</title>
</head>

<body>
    <form action="convidados.php" method="post">
        Adicionar Convidado:
        <input type="text" name="convidado">
        <input type="submit" name="adicionar" value="Adicionar">
        <input type="submit" name="retirar" value="Retirar">
    </form>



<?php
session_start(); //Esse comando inicia uma sessão PHP.

if (!isset($_SESSION['conv'])) {//“Se ainda não existe uma variável de conversa na sessão, 
    $_SESSION['conv'] = [];     //crie uma agora e deixe vazia.”
}

if(isset($_POST["adicionar"])){//“Se o botão de envio do formulário foi clicado, execute o código dentro do bloco.”
    $nome = $_POST["convidado"];//“Pegue o valor digitado no campo de nome e salve na variável $nome.”


    array_push($_SESSION['conv'], $nome);//A função array_push() serve para adicionar um ou mais valores ao final de um array existente.

    foreach ($_SESSION['conv'] as $i => $v){
        echo "($i) - $v <br>";
    }
}
if (isset($_POST['retirar'])) {
    array_pop($_SESSION['conv']);//Retira

    foreach ($_SESSION['conv'] as $i => $v) {
        echo "($i) - $v <br>";
    }
}
?>

<style>
    body {
        background-color: #f0f4f8;
        font-family: 'Arial', sans-serif;
        color: #333;
        text-align: center;
        margin: 0;
        padding: 0;
    }

    form {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /*sombra*/
        display: inline-block;
        padding: 20px 30px;
        margin-top: 50px;
    }

    input[type="text"] {
        width: 200px;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color:rgb(147, 76, 175);
        color: white;
        border: none;
        padding: 10px 20px;
        margin: 5px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

</style>
</body>

</html>