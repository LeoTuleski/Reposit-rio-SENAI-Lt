<?php
include("connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM livros WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: livros.php");
    exit();
} else {
    echo "Erro ao deletar: " . $conn->error;
}

$conn->close();
?>
