<?php
include("conecta.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

try {
	
	$sql = "SELECT * FROM `usuarios2` 
	    WHERE `email` = '$email' AND `senha` = '$senha'";
	
	$res = $conn->query($sql)->fetchAll();

	if(count($res) > 0) {
        foreach ($res as $row) {
            $id = $row['id'];
        }
        
	    if(isset($_POST["salvar"])){
			setcookie("email",$email);
			setcookie("senha",$senha);
		}
		else{
			setcookie("email",$email,time()-1);
			setcookie("senha",$senha,time()-1);
		}

		if(!isset($_SESSION)) 
			session_start();
		
		$_SESSION["id_usuario2"] = $id;
		
		header("Location:logado.php");
    }
  	
  	else {
      header("Location:index.php"); 
    }

} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>