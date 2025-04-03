<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="formulario.php" method="post">
        Nome:
        <input type="text" name="nome" size="80"> <br><br>
        Endereço:
        <input type="text" name="endereco" size="80"> <br><br>
        Idade:
        <input type="number" name="idade" > <br><br>
        Sexo: <br>
        <input type="radio" name="sexo" value="Fem"/> Fem<br />
        <input type="radio" name="sexo" value="Masc"/> Masc<br />
        <input type="radio" name="sexo" value="Prefiro não dizer"/> Prefiro não dizer<br />
        <input type="submit" value="Enviar" name="enviar">
    </form>


    <?php
    if(isset($_POST["enviar"])){
        $nome=$_POST["nome"];
        $idade=$_POST["idade"];
        $endereco=$_POST["endereco"];
        $sexo=$_POST["sexo"];

        echo "<h2>Seu nome é: $nome</h2>";
    
    if($idade>=18){
        
        echo "<h2>Seu endereço: $endereco</h2>";
        echo "<h2>Sua idade: $idade</h2>";
        echo "<h2>Seu sexo: $sexo</h2>";
    }else{
        echo "<h2> Você é menor de idade</h2>";
    }}
?>

</body>
</html>