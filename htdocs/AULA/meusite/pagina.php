<?php
session_start();

if(!isset($_SESSION['id'])) {
    header("location: login.php");
    exit;
}
?>

<h2>Bem vindo, <?php echo $_SESSION ['nome']; ?>!</h2>
<a href="logout.php">SAIR</a>