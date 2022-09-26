<?php
session_start();
if(!isset($_SESSION["logueado"]) && !$_SESSION["logueado"]){
    header("location:index.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="d-flex flex-row justify-content-between p-3 mb-5">
            <div>
                <img src="imagenes/pokebola.png" alt="" class="img-fluid " width="50" height="50">
            </div>

            <h1>Pokedex</h1>
            <h2>
                <?php
                echo $_SESSION["nombre"];
                ?>
            </h2>
    </div>
    <div class="input-group mb-3 p-2">
        <input type="text" class="form-control" placeholder="Ingrese el nombre,tipo o número de pokémon" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">Quien es este pokemon?</span>
    </div>
</header>
<main>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Imagen</th>
                <th scope="col">Tipo</th>
                <th scope="col">Numero</th>
                <th scope="col">Nombre</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
    <form action="logout.php" method="post" enctype="application/x-www-form-urlencoded">
        <input type="submit" class="btn btn-dark" name="salir" value="Salir">
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
