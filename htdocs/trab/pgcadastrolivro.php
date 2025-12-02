<?php 

include("connection.php");

// Variável para armazenar a mensagem de erro
$error_message = "";

if ($_POST) {
    // Recebe os dados do formulário
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];

    // Validação: Verifica se algum campo está vazio
    if (empty($titulo) || empty($autor) || empty($ano) || empty($categoria) || empty($quantidade)) {
        // Se algum campo estiver vazio, armazena a mensagem de erro
        $error_message = "Todos os campos devem ser preenchidos, caso contrário o livro não será cadastrado!";
    } else {
        // Caso contrário, realiza a inserção no banco
        // Preparando a consulta SQL
        $sql = $conn->prepare("INSERT INTO livros (titulo, autor, ano, categoria, quantidade) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("ssisi", $titulo, $autor, $ano, $categoria, $quantidade);

        // Executando a consulta
        if ($sql->execute()) {
            // Redireciona para a página de cadastro de livros
            header('Location: pgcadastrolivro.php');
            exit(); // Evita qualquer código posterior ser executado
        } else {
            // Se ocorrer algum erro na execução, exibe a mensagem de erro
            echo "Erro: " . $sql->error;
        }
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabalho nota extra</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container flex center column">
        <div class="flex center column quadrado">    
            <h1 class="fontp">SEJA BEM VINDO A LIVRARIA DO</h1>
            <h1 class="fontp size">SENAI</h1>
            <br><br><br><br>

            <!-- Exibir a mensagem de erro, se houver -->
            <?php if ($error_message != ""): ?>
                <div class="error-message">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <!-- Formulário de cadastro -->
            <form method="POST">
                <div class="flex column">
                    <br>
                    <input type="text" placeholder="TÍTULO" class="input" name="titulo">
                    <br>
                    <input type="text" placeholder="AUTOR" class="input" name="autor">
                    <br>
                    <input type="number" placeholder="ANO DE PUBLICAÇÃO" class="input" name="ano">
                    <br>
                    <select name="categoria" class="other2">
                        <option value="drama" class="cortxtsec">DRAMA</option>
                        <option value="ficcao_cientifica" class="cortxtsec">FICÇÃO CIENTÍFICA</option>
                        <option value="romance" class="cortxtsec">ROMANCE</option>
                        <option value="fantasia" class="cortxtsec">FANTASIA</option>
                        <option value="didatico" class="cortxtsec">DIDÁTICO</option>
                        <option value="outros" class="cortxtsec">OUTROS...</option>
                    </select>
                    <br>
                    <input type="text" placeholder="QUANTIDADE" class="input" name="quantidade">
                    <br><br><br>
                    <button class="cortxtsec other2">CADASTRAR</button>
                </div>
            </form>

            <br><br><br>
            <a href="livros.php" class="cortxtsec other2 flex center">CONFIRA OS LIVROS JA CADASTRADOS</a>
        </div>
    </div>  
</body>
</html>
