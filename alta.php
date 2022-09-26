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
                    <img src="imagenes/pokebola.png" alt="" class="img-fluid " width="50" height="50">
                </div>
                <div>
                    <h1>Pokedex</h1>
                </div>
                <div>
                    <form action="procesaLogin.php" method="GET" enctype="application/x-www-form-urlencoded">
                        <input type="text" placeholder="Usuario" name="user">
                        <input type="password" placeholder="Contraseña" name="pass">
                        <input type="submit" value="Ingresar" class="btn btn-dark">
                    </form>
                </div>
            </div>
</header>
<form class= "form-column-center" action="registrar.php" method="POST" enctype="multipart/form-data">
    <input type="number" id="numero" name="numero" placeholder="numero"> 
    <input type="text" id="nombre" name="nombre" placeholder="nombre">
    <input type="file" id="imagen" name="imagen" placeholder="imagen">
    <select name="tipo">
        <option value="default" selected>seleccione un tipo</option>
        <option value="agua.png" >agua</option>
        <option value="fuego.png">fuego</option>        
        <option value="tierra.png">tierra</option>
        <option value="veneno.png">veneno</option>
    </select>
    <textarea name="descripcion" id="descripcion" rows="5" placeholder="descripcion"></textarea>
    <input type='submit' class='btn btn-dark' name='registrar' value='registrar'>
    <?php
               $mensaje="";
               if(isset($_GET['mensaje'])){
                   $mensaje= $_GET['mensaje'];
                   echo '<span>'.$mensaje.'<span>';
               }
    ?>
</form>
</body>
</html>
