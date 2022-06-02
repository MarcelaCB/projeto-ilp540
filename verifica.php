<?php
if(!isset($_SESSION)) 
    session_start();

if(!isset($_SESSION["id_usuario2"])) 
    header("Location:index.php");
?>