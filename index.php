<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<header>
            <div class="d-flex flex-row justify-content-between p-3 mb-5">
                <div>
                    <a class= "d-inline align-middle" href='index.php'><img src="imagenes/pokebola.png" alt="" class="img-fluid " width="50" height="50"></a>
                    <h1 class= "d-inline align-middle">Pokedex</h1>
                </div>
                <?php
                session_start();
                if(isset($_SESSION["logueado"]) && $_SESSION["logueado"])
                {
                    echo "<div class='d-flex flex-row'>
                        <h3 class='px-2'> Hola ".$_SESSION["nombre"]."<h3>";
                    echo'    <form action="logout.php" method="post" enctype="application/x-www-form-urlencoded">
                            <input type="submit" class="btn btn-dark" name="salir" value="Salir">
                            </form></div>';
                }else{
                 echo '<div>
                    <form action="procesaLogin.php" method="post" enctype="application/x-www-form-urlencoded">
                        <input type="text" placeholder="Usuario" name="user">
                        <input type="password" placeholder="Contraseña" name="pass">
                        <input type="submit" value="Ingresar" class="btn btn-dark">
                    </form>
                </div>';
                }
                ?>
                
            </div>
    <form action="buscarPokemon.php" method="GET" enctype="application/x-www-form-urlencoded">
        <div class="input-group mb-3 p-2">
            <input type="text" id ="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre,tipo o número de pokémon" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <input type="submit" value="Quien es este pokemon?" class="input-group-text" id="basic-addon2">
        </div>
    </form>
</header>
<main>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr class='text-center'>
                <th scope="col">Imagen</th>
                <th scope="col">Tipo</th>
                <th scope="col">Numero</th>
                <th scope="col">Nombre</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include_once("cargarResultados.php");
            include_once ("Database.php");
        
            $nombre="";
            if(isset($_GET['nombre'])){
                $nombre = $_GET['nombre'];
            }

            $database = new Database();

            $sql = "SELECT * FROM `pokemon`";

            if(isset($_GET["nombre"]))
            {
                $nombreBusqueda = $_GET["nombre"];
                
                $sql = $sql . " where tipo LIKE '%".$nombreBusqueda."%'".
                " OR nombre LIKE '%".$nombreBusqueda."%'".
                " OR numero LIKE '%".$nombreBusqueda."%'";
            }

            $resultados = $database->query($sql);

            if(count($resultados) == 0)
            {
                echo "<tr><h1> pokemon no encontrado </h1></tr>";
                $sql = "SELECT * FROM pokemon";
                $resultados= $database->query($sql);
            }
            cargarResultado($resultados);

            ?>
            </tbody>
        </table>
    </div>
    <?php
    if(isset($_SESSION['logueado']) && $_SESSION['administrador']){
    echo '<form action="alta.php" method="post" enctype="application/x-www-form-urlencoded">    
        <div class="text-center my-5">
        <input type="submit" value="Nuevo Pokemon" class="btn btn-dark">    
        </div>
        </form>';
    }

    ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
