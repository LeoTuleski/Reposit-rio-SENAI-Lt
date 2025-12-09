<?php
include("connection.php");

$id = $_GET['id'];

$sql = "SELECT * FROM livros WHERE id = $id";
$result = $conn->query($sql);
$livro = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container flex center">

    <div class="quadrado flex column center">

        <h1 class="fontp size" style="margin-bottom: 30px;">Editar Livro</h1>

        <form action="update_livro.php" method="POST" class="flex column center">

            <input type="hidden" name="id" value="<?= $livro['id'] ?>">

            <label class="fontp cortxtsec corrr">Título:</label>
            <input class="input" type="text" name="titulo" value="<?= $livro['titulo'] ?>"><br>

            <label class="fontp cortxtsec">Autor:</label>
            <input class="input" type="text" name="autor" value="<?= $livro['autor'] ?>"><br>

            <label class="fontp cortxtsec">Ano:</label>
            <input class="input" type="number" name="ano" value="<?= $livro['ano'] ?>"><br>

            <label class="fontp cortxtsec">Categoria:</label>
            <input class="input" type="text" name="categoria" value="<?= $livro['categoria'] ?>"><br>

            <label class="fontp cortxtsec">Quantidade:</label>
            <input class="input" type="number" name="quantidade" value="<?= $livro['quantidade'] ?>"><br><br>

            <button type="submit" class="other2 fontp" style="cursor: pointer; font-size: 18px;">
                Salvar Alterações
            </button>

        </form>

    </div>

</div>

</body>
</html>
