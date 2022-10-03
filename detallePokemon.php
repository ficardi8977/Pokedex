
<?php
include_once ("Database.php");

$numero = $_GET['numero'];
$database = new Database();
$sql = "SELECT * FROM pokemon WHERE numero=$numero";
$resultados = $database->query($sql);

?>
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
    </div>
</header>
<main>
    <section class="container">
    <div class="row p-4 bg-light">
    <?php
                    echo '
                    <article class="col-12 col-md-4 d-flex justify-content-center">
                        <figure class="m-auto">
                            <img  width="230" height="230" src="imagenes/' . $resultados[0]["imagen"] . '">
                        </figure>
                    </article>
                    <article class="col-12 col-md-8">
                        <div class="p-2">
                            <figure class="d-inline">
                                <img width="50" height="50" src="imagenes/' . $resultados[0]["tipo"] . '">
                            </figure>                            
                            <h2 class="d-inline align-middle ms-3">'.$resultados[0]["nombre"].'</h2>
                        </div>
                        <div class="p-2 py-3">
                            <p>'.$resultados[0]["descripcion"].'</p>
                        </div>
                    </article>'
        ?>
    </div>

        <div class="text-center my-4">
            <a class="btn btn-dark" href="index.php">Volver</a>
        </div>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

