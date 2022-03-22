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

    // $send = $_REQUEST['send'];

    // if(isset($send)){
        echo "<h1 class='h1'>El nombre seleccionado es $name</h1>";
        echo "<h1 class='h1'>El apellido seleccionado es $surname</h1>";
        echo "<h1 class='h1'>El nombre de usuario es $user</h1>";
        echo "<h1 class='h1'>La contrasena es $password</h1>";
        echo "<h1 class='h1'>La edad seleccionada es $age</h1>";
        echo "<h1 class='h1'>El sexo seleciconado es $sex</h1>";
        echo "<h1 class='h1'>El dia de cumpleanos selecconado es $birthday</h1>";
        echo "<h1 class='h1'>La nacionalidad seleccionada es $nationality</h1>";
        echo "<h1 class='h1'>El color favorito seleccionado es $color</h1>";
        echo "<h1 class='h1'>El email seleccionado es $email</h1>";
        echo "<h1 class='h1'>La descripcion escrita es $description</h1>";
    
    foreach($hobbies as $hobbie){
        echo "<h1 class='h1'>Los hobbies seleccionados son: $hobbie</h1>";
    }
    // }
?>