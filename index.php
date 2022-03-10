<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Inicio de Sesion</title>
</head>
<body>

    <!--Contenedor del Formulario-->
    <div class="container">
        <div class="form-container">
            <form class="form" action="#" method="post">
                <h1><i>Inicio de Sesion</i></h1>
                <input class="inputf" type="text" name="user" placeholder="User">
                <input class="inputf" type="password" name="passwd" placeholder="Password">
                <input class="inputf" id="submit" name="send" type="submit" value="Iniciar Sesion">
            </form>
        </div>
    </div>

    <!-- Instrucciones Dinamicas -->
    <?php
        if(isset($_POST['send'])){
            //Usuarios Validos
            $valid_users = array("admin"=>"admin123", "lvallejos"=>"antiperonista");
            $is_valid = 0;

            //Validacion de Usuario
            foreach($valid_users as $user => $pass){
                if($_POST['user'] == $user && $_POST['passwd'] == $pass){
                    $is_valid = 1;
                }
            }

            //Autenticacion
            if($is_valid == 1){
                echo "Sesion iniciada exitosamente, Bienvenido mi estimado usuario";
            } else {
                echo "Usuario incorrecto, revise su usuario y contraseña y reintentelo";
            }

            // Siempre queda el resultado de la consulta anterior debajo del comentario
            // Para solucionarlo volver a cargar la url raiz
        } 
        ?>
</body>
</html>