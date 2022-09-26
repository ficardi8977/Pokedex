<?php
include_once ("Database.php");

$database = new Database();

$numero = $_POST["numero"];
$nombre= $_POST["nombre"];
$imagen= $_POST["imagen"];
$tipo= $_POST["tipo"];
$descripcion= $_POST["descripcion"];

$sql = "INSERT INTO pokemon (numero, nombre, imagen, tipo, descripcion)
VALUES (".$numero .
",".$nombre.
",".$imagen.
",".$tipo.
",".$descripcion ")";

if ($conn->query($sql) === TRUE) {
echo “Registro Creado";

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>