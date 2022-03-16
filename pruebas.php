<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for=""> nombre </label>
        <input type="text" name="nombre">
        <input type="number" name="edad">
        <input type="submit" value="enviar">
    </form>
<!-- 
    Instrucciones funcionales.
    Se debe de ingresar los campos deseados para que 
    se eliminen los errores por pantalla.
-->
    <?php
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
        echo 'Tu nombre es '.$nombre.'y tu edad es: '.$edad;
    ?>
</body>
</html>