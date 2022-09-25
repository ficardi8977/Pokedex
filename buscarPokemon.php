<?php
include_once ("Database.php");

$database = new Database();

$sql = "SELECT * FROM pokemon";

if(isset($_POST["nombre"]))
{
    $nombreBusqueda = $_POST["nombre"];
    
    $sql = $sql . " where tipo LIKE '%".$nombreBusqueda."%'".
    " OR nombre LIKE '%".$nombreBusqueda."%'".
    " OR numero LIKE '%".$nombreBusqueda."%'";
}

$resultados= $database->query($sql);

foreach ( $resultados as $item){

          echo  "<tr>".
                "<td>".$item["imagen"]."</td>".
                "<td>".$item["tipo"]."</td>".
                "<td>".$item["numero"]."</td>".
                "<td>".$item["nombre"]."</td>".
                "<td>
                    <input type='submit' class='btn btn-dark' name='modificacion' value='Modificacion'>
                    <input type='sumbit' class='btn btn-dark' name='baja' value='Baja'>
                </td>".
            "</tr>";
}
header()
