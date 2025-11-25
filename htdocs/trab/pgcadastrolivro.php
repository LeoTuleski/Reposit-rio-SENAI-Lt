<?php 

include("connection.php");

if ($_POST) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];


    $sql = "INSERT INTO livros (titulo, autor, ano, categoria, quantidade) VALUES ('$titulo', '$autor', '$ano', '$categoria', '$quantidade')";

    if($conn->query($sql) === TRUE){
        echo "Livro cadastrado com sucesso!";
        header('Location: pgcadastrolivro.php');
    }
    else{
        echo "Eroo: " . $sql . "<br>" . $conn->error;
    }

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
        <h1 class="fontp">SEJA BEM VINDO A LIVRARIA DO SENAI</h1>
        <h1 class="fontp size">SENAI</h1>
        <br><br><br><br>
        <form method="POST">
            <div class="flex column">
            <br>
                <input type="text" placeholder="TÍTULO" class="input" name="titulo">
                <br>
                <input type="text" placeholder="AUTOR" class="input" name="autor">
                <br>
                <input type="number" placeholder="ANO DE PUBLICAÇÃO" class="input" name="ano">
                <br>
                <select value = "selecione sua opção" name="categoria" class="other2">
                    <option value="" class="cortxtsec">DRAMA</option>
                    <option value="" class="cortxtsec">FICÇÃO CIENTÍFICA</option>
                    <option value="" class="cortxtsec">ROMANCE</option>
                    <option value="" class="cortxtsec">FANTASIA</option>
                    <option value="" class="cortxtsec">DIDÁTICO</option>
                    <option value="" class="cortxtsec">OUTROS...</option>
                </select>
                <br>
                <input type="text" placeholder="QUANTIDADE" class="input" name="quantidade">
                <br><br><br>
                <button class="cortxtsec other2">CADASTRAR</button>
                </form>
                <br><br><br>
                <a href="livros.php" class="cortxtsec other2 flex center">CONFIRA OS LIVROS JA CADASTRADOS</a>
            </div>
        </div>  
    </div>
</body>
</html>