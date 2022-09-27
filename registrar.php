<?php
include_once ("Database.php");

$database = new Database();

$numero = $_POST["numero"];
$nombre= $_POST["nombre"];
$imagen= $_FILES["imagen"];
$tipo= $_POST["tipo"];
$descripcion= $_POST["descripcion"];
$nro= $_POST["nro"];

if (isset($_POST["registrar"])) {
    $page = "alta.php?mensaje=no se pudo registrar pokemon";
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagenes/" . $_FILES["imagen"]["name"]);

    $sql = "INSERT INTO pokemon (numero, nombre, imagen, tipo, descripcion)
    VALUES (" . $numero .
        ",'" . $nombre .
        "','" . $_FILES["imagen"]["name"] .
        "','" . $tipo .
        "','" . $descripcion . "')";
    ejecutar($sql, $database, $page);
}

elseif (isset($_POST["modificar"])) {
    $page = "update.php?modificacion=Modificacion&numero=" . $nro . "&mensaje=no se pudo modificar pokemon";
    $sql = "UPDATE pokemon SET numero=" . $numero . ", nombre='" . $nombre . "', tipo='" . $tipo . "', descripcion='" . $descripcion . "' WHERE numero=" . $nro;
    ejecutar($sql, $database, $page);
    if (!empty($_FILES["imagen"]["tmp_name"])){
        move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagenes/" . $_FILES["imagen"]["name"]);
        $sql = "UPDATE pokemon SET imagen='" . $_FILES["imagen"]["name"] . "' WHERE numero=" . $numero;
        ejecutar($sql, $database, $page);
    }
}
function ejecutar($sql, $database, $page){
    try {
        $database->execute($sql);
        header("location:index.php");
        exit();
    } catch (Exception $e) {
        header("location:" . $page);
        exit();
    }
}
?>