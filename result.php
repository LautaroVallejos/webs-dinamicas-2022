<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./processed.css">
    <title>Perfil</title>
</head>
<body>
    <div class="container">
        <?php
            //Inicializacion de Variables           
            $name = $_REQUEST['name'];
            $surname = $_REQUEST['surname'];
            $user = $_REQUEST['user'];
            $password = $_REQUEST['pass'];
            $age = $_REQUEST['age'];
            $sex = $_REQUEST['sex'];
            $birthday = $_REQUEST['birthday'];
            $nationality = $_REQUEST['nationality'];
            $color = $_REQUEST['colour'];
            $email = $_REQUEST['email'];
            $description = $_REQUEST['desc'];
            $hobbies = $_REQUEST['hobbies'];

            if($sex == 1){
                $sex = "Masculino";
            } else {
                $sex = "Femenino";
            }
        ?>

        <nav id='navegation'>
            <img id="logo" style="width:25%; border-radius:47%;" src="./src/Logo.png" alt="error al cargar la image">
            <h1 id="title">
                Bienvenido a Hentai Web <?php echo $user?>!!!
            </h1>
        </nav>

        <p class="sub-container">
            Estamos muy agradecidos de que nos hayas elegido, estimado/a <?php echo "$name $surname.";?>
            A continuación presentaremos los datos de perfil ingresados, con el fin de corroborar que son los correctos.
        </p>

        <div class="perfil-container">
            <div class="sub-title">Nombre de Usuario: <?php echo $user?></div>
            <div class="sub-title">Nombre Y Apellido: <?php echo "$name $surname";?></div>
            <div class="sub-title">Contraseña: <?php echo $password?></div>
            <div class="sub-title">Sexo: <?php echo $sex?></div>
            <div class="sub-title">Tu Fecha de Nacimiento es: <?php echo $birthday?></div>
            <div class="sub-title">Tu Nacionalidad es: <?php echo $nationality?></div>
            <div class="sub-title">Tu Color Favorito es: <div class="box" style="padding: .8em; background-color: <?php echo $color?>"></div></div>
            <div class="sub-title">Tu Email es: <?php echo $email?></div>
            <div class="sub-title">La Descripción Ingresada es: "<?php echo $description?>"</div>
            <?php
                foreach($hobbies as $hobbie){
                    echo "<div class='sub-title'>Uno de tus Hobbies es: $hobbie</div>";
                }
            ?>
        </div>

        <!-- <div class="sub-container">
        </div> -->





            <!-- //     echo "<h1 class='h1'>El nombre seleccionado es $name</h1>";
            //     echo "<h1 class='h1'>El apellido seleccionado es $surname</h1>";
            //     echo "<h1 class='h1'>El nombre de usuario es $user</h1>";
            //     echo "<h1 class='h1'>La contrasena es $password</h1>";
            //     echo "<h1 class='h1'>La edad seleccionada es $age</h1>";
            //     echo "<h1 class='h1'>El sexo seleciconado es $sex</h1>";
            //     echo "<h1 class='h1'>El dia de cumpleanos selecconado es $birthday</h1>";
            //     echo "<h1 class='h1'>La nacionalidad seleccionada es $nationality</h1>";
            //     echo '<h1 class="h1">El color favorito seleccionado es <div style="width:20px; height:20px; background:'.$color.'"></div></h1>';
            //     echo "<h1 class='h1'>El email seleccionado es $email</h1>";
            //     echo "<h1 class='h1'>La descripcion escrita es $description</h1>";
            
            // foreach($hobbies as $hobbie){
            //     echo "<h1 class='h1'>Los hobbies seleccionados son: $hobbie</h1>";
            // } -->
            
    </div>

    </body>
</html>