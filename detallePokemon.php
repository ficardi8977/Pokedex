
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
        <div>
            <h1>Pokedex</h1>
        </div>
    </div>
</header>
<main>
    <section class="container">
        <?php
        include_once ("Database.php");
        // tenemos que crear un formulario  en cargarResultados.php para enviar por Get en name concatenando dir Imagenes mas la variable imagen
        $linkImagen = $_GET["linkImagen"];

        // No se como concatenar
        if(isset($linkImagen)){
            ""<article>
            <img src=".'$linkImagen'." alt="">
             </article>""
        }
        ?>

        <article>
            <div>
                <img src="" alt="">
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ipsum iure libero necessitatibus quas, quisquam suscipit temporibus totam ut voluptate. Accusantium assumenda aut deserunt fuga quaerat quos, sint vel voluptatum.</p>
            </div>
        </article>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

