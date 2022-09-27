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
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagenes/" . $_FILES["imagen"]["name"]);

    $sql = "INSERT INTO pokemon (numero, nombre, imagen, tipo, descripcion)
VALUES (" . $numero .
        ",'" . $nombre .
        "','" . $_FILES["imagen"]["name"] .
        "','" . $tipo .
        "','" . $descripcion . "')";
    ejecutar($sql, $database);
}

elseif (isset($_POST["modificar"])) {
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagenes/" . $_FILES["imagen"]["name"]);
    $sql = "UPDATE pokemon SET numero=" . $numero . ", nombre='" . $nombre . "', tipo='" . $tipo . "', descripcion='" . $descripcion . "' WHERE numero=" . $nro;
    ejecutar($sql, $database);
    if (!empty($_FILES["imagen"]["tmp_name"])){
        $sql = "UPDATE pokemon SET imagen='".$_FILES["imagen"]["name"]."' WHERE numero=".$numero;
        ejecutar($sql, $database);
    }
}
function ejecutar($sql, $database){
    try {
        $database->execute($sql);

    } catch (Exception $e) {
        header("location:index.php?mensaje=error al crear pokemon");
    }
}
header("location:index.php");
exit();
?>