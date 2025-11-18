<?php 

include("procs1.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


$sql = "INSERT INTO usuario (usuario, email, senha) VALUES ('$nome', '$email', '$password')";

if($conn->query($sql) === TRUE){
    echo "Usuário cadastrado com sucesso!";
    header('Location: login.php');
}
else{
    echo "Eroo: " . $sql . "<br>" . $conn->error;
}

$conn->close();