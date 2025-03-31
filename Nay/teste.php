<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <form method="post" action="teste.php">
    Digite o seu nome:
    <input type="text" size="80" name="txtnome">
    <input type="submit" value="Vai" name="enviar">
    </form>

    <?php
    if (isset($_POST["enviar"])){
        $nome=$_POST["txtnome"];
        echo "<h2>Seu nome: $nome</h2>";
    }else
        echo "<h2> Preencha com algum nome</h2>";
        ?>

</body>
</html>