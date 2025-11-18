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
                    <h1 class=" size bem font lett">BEM-VINDO DE</h1>
                    <h1 class=" size bem font lett">VOLTA!</h1>
                    <br>
                    <h3 class="bem">Acessar sua conta agora</h3>
                    <br>
                    <br>
                    <a href="cadastro2.php">
                    <button onclick="" class="font button">ENTRAR</button>
                    </a>
                </div>
                <div class="quadrado_vb flex center">
                    <div>
                        <div class="flex center">
                            <h1 class="font sizee">CRIE SUA CONTA</h1>
                        </div>
                        <br>
                        <br>
                        <br>
                        <form action="procsss1.php" method="POST">
                            <div class="flex center column">
                                <input type="text" placeholder="Nome" name="nome" class="inputtt">
                                <br>
                                <input type="email" placeholder="E-mail" name="email" class="inputtt">
                                <br>
                                <input type="password" placeholder="Senha" name="password" class="inputtt ">
                                <br>
                                <input type="password" placeholder="Confirmar senha" name="confirm_password" class="inputtt">
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="flex center">
                            <input type="submit" placeholder="Cadastrar" class="inputtt">
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>