<?php
include_once ("Database.php");

$database = new Database();

$numero = $_POST["numero"];
$nombre= $_POST["nombre"];
$imagen= $_FILES["imagen"];
$tipo= $_POST["tipo"];
$descripcion= $_POST["descripcion"];

move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagenes/" . $_FILES["imagen"]["name"]);

$sql = "INSERT INTO pokemon (numero, nombre, imagen, tipo, descripcion)
VALUES (".$numero .
",'".$nombre.
"','".$_FILES["imagen"]["name"].
"','".$tipo.
"','".$descripcion."')";

try {
    $database->execute($sql);
    header("location:index.php");
    exit();

} catch (Exception $e) {
    header("location:alta.php?mensaje=error al crear pokemon");
}
?>