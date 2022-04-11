<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Formulario de imagenes</title>
</head>
<body>
    <!--Formulario-->
    <form action="slider.php" class="form" method="post" enctype="multipart/form-data">
        <h1 class="title">Ingrese 3 imagenes</h1>

        <div class="input-container">
            <label for="wall1">Primera Imagen</label>
            <input type="file" name="foto1" id="wall1">
        </div>

        <div class="input-container">
            <label for="wall1">Segundas Imagen</label>
            <input type="file" name="foto2" id="wall2">
        </div>

        <div class="input-container">
            <label for="wall1">Tercera Imagen</label>
            <input type="file" name="foto3" id="wall3">
        </div>

        <input class="boton" type="submit" value="Enviar Imagenes">
    </form>

</body>
</html>