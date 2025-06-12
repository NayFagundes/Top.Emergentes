<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="senha.php" method="post">
    Nome de Usuário:
    <input type="text" name="nome" size="80"> <br><br>
    Cargo:
    <input type="text" name="cargo" size="80"> <br><br>
    Senha:
    <input type="password" name="senha" size="80"> <br><br>
    <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
    // Fiz baseado no que foi dito em sala, 
    // sobre dizer ao código a "senha correta"
    if(isset($_POST['enviar'])) {
        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $senha = $_POST['senha'];

    if($senha == 123 && $nome == "Nayane Fagundes Quevedo") {
        echo "Boas Vindas! Seu cargo é $cargo";
    } else {
        echo "Senha ou nome de usuário incorreto!";
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
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
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