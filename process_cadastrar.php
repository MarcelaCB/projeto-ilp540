<?php
include("conecta.php");

$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$dt_nascimento = $_POST["dt_nascimento"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];


if(!isset($_SESSION)) {
	session_start();
	
	if(isset($_SESSION["id_usuario1"])){
		$id = $_SESSION["id_usuario1"];
		$location = "Location:logado.php";
		$sql = "UPDATE `usuarios1` SET `nome`='$nome', `sexo`='$sexo', `dt_nascimento`='$dt_nascimento', `cpf`='$cpf', `telefone`='$telefone', `senha`='$senha' WHERE `id`=$id";
	}
	else{
		$email = $_POST["email"];
		$location = "Location:index.php";
		$sql = "INSERT INTO usuarios1 (`id`, `nome`, `sexo`, `dt_nascimento`, `cpf`, `telefone`, `email`, `senha`) VALUES (NULL, '$nome', '$sexo', '$dt_nascimento', '$cpf', '$telefone', '$email','$senha')";
	}
}

try {	
	$conn->exec($sql);		
} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

header($location);

?>