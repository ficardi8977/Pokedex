<?php
function cargarResultado($resultados){

foreach ( $resultados as $item){

          $datos =  "<tr class='text-center align-middle'>".
                '<td>
                <img width="100" height="100" src="imagenes/' . $item["imagen"] . '">
                <form action="detallePokemon.php" method="GET" enctype="application/x-www-form-urlencoded">
                <input type="submit" value="Ver detalle" class="btn btn-dark">
                <input type="hidden" name="numero" value=' . $item['numero'].'>
                </form>
                </td>'.
                '<td><img width="100" height="100" src="imagenes/' . $item["tipo"] . '"></td>'.
                "<td>" . $item["numero"] . "</td>".
                "<td>" . $item["nombre"] . "</td>";

                if(isset($_SESSION['logueado']) && $_SESSION['logueado'] && $_SESSION['administrador'])
                {
                    $datos = $datos . " <td>
                        <form action='update.php' method='GET' enctype='application/x-www-form-urlencoded'>
                            <input type='hidden' name='numero' value='" . $item['numero']."'>
                            <input type='submit' class='btn btn-dark' name='modificacion' value='Modificacion'>
                            <input type='submit' class='btn btn-dark' name='baja' value='Baja'>
                        </form>
                    </td>";
                }
                $datos = $datos ."</tr>";
                echo $datos;
            }
}
?>
