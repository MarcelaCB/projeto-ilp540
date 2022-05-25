<?php

$email = $_POST["email"];
$senha = $_POST["senha"];
if(isset($_POST["salvar"])){
    setcookie("email",$email);
    setcookie("senha",$senha);
}
else{
    setcookie("email",$email,time()-1);
    setcookie("senha",$senha,time()-1);
}

if($email == "admin" && $senha == "123"){
    if(!isset($_SESSION)) 
        session_start();
    $_SESSION["logado"] = true;
    header("Location:logado.php");
}
else
    header("Location:index.php");
?>
