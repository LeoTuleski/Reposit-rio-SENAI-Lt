<?php
session_start();
require "procs1.php";

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' LIMIT 1";
    $res = mysqli_query($conn, $sql);

    if(mysqli_num_rows($res) > 0) {
        $user = mysqli_fetch_assoc($res);

        if($password == $user['senha']) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            header("location: pagina.php");
            exit;
        } else {
            $erro = "Senha incorreta!";
        }
    } else {
        $erro = "Usuário não encontrado!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="color back">
        <div class="container flex center">
            <div class="pglogin flex space">


                <div class="quadrado_bv flex center column">
                    <h1 class=" size bem font lett">NOVO POR AQUI?</h1>
                    <h1 class=" size bem font lett"></h1>
                    <br>
                    <h3 class="bem">Crie sua conta agora</h3>
                    <br>
                    <br>
                    <a href="cadastro1.php">
                    <button onclick="" class="font button">CADASTRAR</button>
                    </a>
                </div>
                <div class="quadrado_vb flex center">
                    <div>
                        <div class="flex center">
                            <h1 class="font sizee">FAÇA SEU LOGIN</h1>
                        </div>
                        <br>
                        <br>
                        <?php if(isset($erro)) echo "<p style='color:red; text-align:center;'>$erro</p>"; ?>
                        <br>
                        <form action="" method="POST">
                            <div class="flex center column">
                            <input type="text" placeholder="Email" name="email" class="inputtt ">
                            <br>
                            <input type="password" placeholder="Senha" name="password" class="inputtt ">
                        
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="flex center">    
                        <button class="buttonII font">ENTRAR</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>