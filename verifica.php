<?php
if(!isset($_SESSION)) 
    session_start();

if(!isset($_SESSION["id_usuario1"])) 
    header("Location:index.php");
?>