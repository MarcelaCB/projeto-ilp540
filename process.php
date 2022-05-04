<?php

$login = $_POST["login"];
$senha = $_POST["senha"];
if(isset($_POST["salvar"])){
    setcookie("login",$login);
    setcookie("senha",$senha);
}
else{
    setcookie("login",$login,time()-1);
    setcookie("senha",$senha,time()-1);
}

if($login == "admin" && $senha == "123"){
    if(!isset($_SESSION)) session_start();
    $_SESSION['logar'] = true;
    header("Location: logar.php");
}
else
    header("Location: index.php");
?>