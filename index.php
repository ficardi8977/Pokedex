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
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid " >
                <a class="navbar-brand" href="#">
                    <img src="imagenes/pokebola.png" alt="" class="img-fluid " width="50" height="50">
                    <h1 class="d-inline">Pokedex</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div>
                        <form action="procesaLogin.php" method="post" enctype="application/x-www-form-urlencoded">
                            <input type="text" placeholder="Usuario" name="user">
                            <input type="password" placeholder="Contraseña" name="pass">
                            <input type="submit" value="Ingresar" class="btn btn-dark">
                        </form>
                    </div>
                </div>
        </div>
    </nav>
    <form action="buscarPokemon.php" method="post" enctype="application/x-www-form-urlencoded">
        <div class="input-group mb-3 p-2">
            <input type="text" class="form-control" placeholder="Ingrese el nombre,tipo o número de pokémon" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <input type="submit" name="buscarPokemon" value="Quien es este pokemon?" class="input-group-text" id="basic-addon2">
<!--            <span class="input-group-text" id="basic-addon2" type="submit" name="">Quien es este pokemon?</span>-->
        </div>
    </form>
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
            <?php
            include_once ("buscarPokemon.php");
            ?>
            </tbody>
        </table>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>