<?php
    $server = "localhost"; 
    $user = "root";
    $pass = "";

    $connection = mysqli_connect($server, $user, $pass);

    if($connection){
        echo "DB connected succesfully";
    } else {
        echo "connection error";
    }

    $db = mysqli_select_db($connection, "empresa");

    if($db){
        echo "Vinculamiento a EmpresaDB";
    } else {
        echo "Error al vincular la Base de Datos correcta";
    }

    //Insertando SQL
    $sql = "INSERT INTO usuarios VALUES (null, 'ElPibeOchinChin', 'yametee')";

    $insert = mysqli_query($connection, $sql) ? print("consulta ejecutada correctamente") : print("consulta erronea");
    // msqli_close($connection)
?>