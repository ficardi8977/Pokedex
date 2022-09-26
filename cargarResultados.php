<?php
function cargarResultado($resultados){

foreach ( $resultados as $item){

          $datos =  "<tr>".
                '<td><img width="100" height="100" src="imagenes/'.$item["imagen"].'"></td>'.
                '<td><img width="100" height="100" src="imagenes/'.$item["tipo"].'"></td>'.
                "<td>".$item["numero"]."</td>".
                "<td>".$item["nombre"]."</td>";

                if(isset($_SESSION['logueado']) && $_SESSION['administrador'])
                {
                    $datos = $datos . " <td>
                    <input type='submit' class='btn btn-dark' name='modificacion' value='Modificacion'>
                    <input type='sumbit' class='btn btn-dark' name='baja' value='Baja'>
                    </td>";
                }
                $datos = $datos ."</tr>";
                echo $datos;
            }
}
?>