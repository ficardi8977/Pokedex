<?php
require_once("verificarLogin.php");
include_once ("Database.php");

$numero = $_GET['numero'];
$database = new Database();
$sql = "SELECT * FROM pokemon WHERE numero=$numero";
$resultados = $database->query($sql);
if (isset($_GET['modificacion'])):
    ?>
    <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
                <link href="estilos/alta.css" rel="stylesheet">
                <title>Document</title>
            </head>
                <body>
                    <header>
                                <div class="d-flex flex-row justify-content-between p-3 mb-5">
                                    <div>
                                    <a href='index.php'><img src="imagenes/pokebola.png" alt="" class="img-fluid " width="50" height="50"></a>
                                    </div>
                                    <div>
                                        <h1>Pokedex</h1>
                                    </div>
                                    <div>
                                    <?php
                                         require_once("verificarLogin.php");
                                         echo "<h3> Hola ".$_SESSION["nombre"]."<h3>";
                                         echo'<form action="logout.php" method="post" enctype="application/x-www-form-urlencoded">
                                                     <input type="submit" class="btn btn-dark" name="salir" value="Salir">
                                                     </form>';
                                    ?>
                                    </div>
                                </div>
                    </header>
                    <?php
                    echo '<form class= "form-column-center" action="registrar.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="nro" value="'.$numero.'">
                        <input type="number" id="numero" name="numero" placeholder="numero" value="' . $resultados[0]["numero"] . '"> 
                        <input type="text" id="nombre" name="nombre" placeholder="nombre" value="' . $resultados[0]["nombre"] . '">
                        <img width="100" height="100" src="imagenes/' . $resultados[0]["imagen"] . '">
                        <input type="file" id="imagen" name="imagen" placeholder="imagen">
                        <select name="tipo">
                            <option value="' . $resultados[0]["tipo"] . '" selected>' . substr($resultados[0]["tipo"],0,-4) . '</option>
                            <option value="agua.png" >agua</option>
                            <option value="fuego.png">fuego</option>
                            <option value="tierra.png">tierra</option>
                            <option value="veneno.png">veneno</option>
                        </select>
                        <textarea name="descripcion" id="descripcion" rows="5" placeholder="descripcion">'.$resultados[0]["descripcion"].'</textarea>
                        <input type="submit" class="btn btn-dark" name="modificar" value="Modificar">';
                    $mensaje="";
                    if(isset($_GET['mensaje'])){
                        $mensaje= $_GET['mensaje'];
                        echo '<span>' . $mensaje . '<span>';
                    }
                    echo '</form>';
                    ?>
                </body>
    </html>
<?php
elseif (isset($_GET['baja'])):
    echo 'borrar '.$numero;
    $sql = "DELETE FROM pokemon WHERE numero =". $numero;
    $database->execute($sql);
    header("location:index.php");
    exit();
endif;
