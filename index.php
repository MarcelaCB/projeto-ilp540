<?php
    $email = $senha = $check = "";
    if(isset($_COOKIE["email"])){
        $email = $_COOKIE["email"];
        $check = "checked";
    }
    if(isset($_COOKIE["senha"]))
        $senha = $_COOKIE["senha"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css" >
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <p id="h1" class="center">Login</p>
        <form action="process_login.php" method="POST">
            <div class="user-box">
                <input type="text" name="email" id="email" value="<?= $email ?>" placeholder="E-mail ou Login" required>
            </div>
            <div class="user-box">
                <input type="password" name="senha" id="senha" value="<?= $senha ?>" placeholder="Senha" required>
            </div>
            <label>
                <input type="checkbox" name="salvar" <?= $check ?>>
                Salvar dados de acesso
            </label><br>
            
            <a href="https://www.facebook.com/sharer/sharer.php?u=" class="text" >Entrar com Facebook</a>
    
            <a href="https://accounts.google.com/signin" class="text">Entrar com Google</a><br>
            <br>

            <input type="submit" value="Login"><br>

            <a href="cadastrar.php">Realizar cadastro</a>

        </form>  
    </div>   
</body>
</html>