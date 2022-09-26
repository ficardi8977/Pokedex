<?php
$nombre = $_GET['nombre'];

if(!empty($nombre)){
    header('location:index.php?nombre='.$nombre);
    exit();
}
?>
