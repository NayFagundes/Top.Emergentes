<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Insira sua média do semestre: </h2> 
    Utilize ponto no lugar de vírgula!
    <form action="notadoexame.php" method="post">
    <input type="text" name="media">
    <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php
    if (isset($_POST['Enviar'])) {
        $media = $_POST['media'];
        $exame = (50-(6*$media))/4;

        if ($media <=1.7){
            echo "Você não poderá realizar o exame!";
        } elseif ($media >= 7 && $media <= 10){
            echo "Você está aprovado!";
        } elseif ($media >10){
            echo "Você tem certeza que foi essa nota?";
        } else{
            echo "Você poderá realizar o exame! e precisa tirar $exame";
        }
        }
    ?>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            color: #333;
        }
        form {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>
</body>
</html>