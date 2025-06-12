<html>

<head>
    <!-- Importa o arquivo CSS com estilos -->
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <!-- Container para centralizar e limitar a largura do conteúdo -->
    <div class="dados">
        <h2>Cadastrar Contato</h2>

        <!-- Formulário para enviar os dados do novo contato para salvar.php -->
        <form method="post" action="salvar.php">
            Nome: <input type="text" name="nome" required><br><br> <!-- Campo obrigatório para nome -->
            Endereço: <input type="text" name="endereco"><br><br> <!-- Campos opcionais -->
            Telefone: <input type="text" name="telefone" id="telefone"><br><br>
            <input type="submit" value="Salvar"> <!-- Botão para enviar os dados -->

        </form>



        <h2>Lista de Contatos</h2>

        <!-- Div com classe para aplicar estilo à lista -->
        <div class="lista">
            <?php
            include('conexao.php'); // Conecta ao banco de dados
            $sql = "SELECT * FROM contato";// Busca todos os contatos cadastrados
            $resultado = mysqli_query($conexao, $sql);

            // Verifica se há resultados e exibe cada contato
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    // Mostra nome, endereço, telefone e botões de editar/excluir
                    echo $linha['nome'] . " | " . $linha['endereco'] . " | " . $linha['telefone'] .
                        " | <a href='editar.php?id=" . $linha["id"] . "'>Editar</a>" .
                        " | <a href='excluir.php?id=" . $linha["id"] . "' onclick=\"return confirm('Deseja excluir este contato?');\">Excluir</a><br>";
                }
            } else {
                echo "Nenhum contato encontrado.";
            }
            ?>
        </div>

    </div>
    <script>
        // Quando o usuário digitar, a função formata automaticamente
        document.getElementById('telefone').addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, ''); // Remove tudo que não for número

            if (value.length > 11) value = value.slice(0, 11); // Limita a 11 dígitos

            if (value.length > 0) value = '(' + value;
            if (value.length > 3) value = value.slice(0, 3) + ') ' + value.slice(3);
            if (value.length > 10) value = value.slice(0, 10) + '-' + value.slice(10);

            e.target.value = value;
        });
    </script>
</body>

</html>