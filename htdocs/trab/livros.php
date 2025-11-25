<?php 
include("connection.php");
$sql = "SELECT * FROM livros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Cadastrados</title>
    <link rel="stylesheet" href="livro.css">
</head>
<body>

<div class="container">
    <div class="box">

        <h1 class="titulo">Livros Cadastrados</h1>

        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>

                <div class="livro">
                    <h3><?= $row['titulo'] ?></h3>
                    <p><strong>ID:</strong> <?=$row['id'] ?></p>
                    <p><strong>Autor:</strong> <?= $row['autor'] ?></p>
                    <p><strong>Ano:</strong> <?= $row['ano'] ?></p>
                    <p><strong>Categoria:</strong> <?= $row['categoria'] ?></p>
                    <p><strong>Quantidade:</strong> <?= $row['quantidade'] ?></p>
                </div>

            <?php endwhile; ?>
        <?php else: ?>
            <p>Nenhum livro cadastrado.</p>
        <?php endif; ?>

        <a href="pgcadastrolivro.php">
            <button class="btn">Cadastrar Novo Livro</button>
        </a>

    </div>
</div>

</body>
</html>

<?php 
$conn->close();
?>
