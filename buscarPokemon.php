<?php
$nombre = $_GET['nombre'];

if(!empty($nombre)){
    header('location:index.php?nombre='.$nombre);
    exit();
}
if(empty($nombre)){
    header('location:index.php');
    exit();
}
?>
