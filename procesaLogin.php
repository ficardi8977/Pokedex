<?php
session_start();

$usuario = $_POST["user"];
$contraseña= $_POST["pass"];

if($usuario =="eve" && $contraseña=="1234" ){
    $_SESSION["logueado"]= true;
    $_SESSION["nombre"]= $usuario;
    header("location:home.php");

    exit();
}else{
    header("location:index.php");
    exit();
}
