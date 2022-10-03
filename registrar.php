<?php
include_once ("Database.php");

$database = new Database();

$numero = $_POST["numero"];
$nombre= $_POST["nombre"];
$imagen= $_FILES["imagen"];
$imagenTxt = $_POST["imagen_txt"];
$tipo= $_POST["tipo"];
$descripcion= $_POST["descripcion"];
$nro= $_POST["nro"];

error_log(json_encode($_POST), 0);

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
    
    if (!empty($_FILES["imagen"]["tmp_name"]))
    {
        move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagenes/" . $_FILES["imagen"]["name"]);
        $imagen = $_FILES["imagen"]["name"];
    }else
    {
        $imagen = $imagenTxt;
    }



    
    $sql = "UPDATE pokemon 
            SET numero=" . $numero . ",
             nombre='" . $nombre . "',
             tipo='" . $tipo . "',
             imagen='".$imagen."', 
             descripcion='" . $descripcion . "' 
             WHERE numero=" . $nro;
    
    ejecutar($sql, $database, $page);
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