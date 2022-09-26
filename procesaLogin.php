<?php
session_start();

$usuario = $_POST["user"];
$contraseña= $_POST["pass"];

include_once ("Database.php"); 
        
$database = new Database();

$sql = "SELECT Nombre, Administrador FROM usuario where Nombre = '".$usuario. "' AND password = '". $contraseña . "'"  ;

$resultados= $database->query($sql);

$item = $resultados[0];

if(isset($item)){
    $_SESSION["logueado"]= true;
    $_SESSION["nombre"]= $usuario;
    $_SESSION["administrador"]= $item['Administrador'];
    header("location:index.php");
    exit();
}else{
    $_SESSION["logueado"]= false;
    header("location:index.php");
    exit();
}
