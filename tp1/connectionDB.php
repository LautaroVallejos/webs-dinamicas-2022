<?php
    //Inicializacion
    $server = "localhost";
    $DBuser = "root";
    $DBpass = "";

    //Conexión
    $connection = mysqli_connect($server, $DBuser, $DBpass);

    //Validación
    if(!$connection){
        echo "error to connect DB\n";
        echo "error: ".mysqli_connect_error();
    } else {
        echo "connected succesfully\n";
    }

    //Selección DB
    $DBname = "comercio";
    $DB = mysqli_select_db($connection, $DBname);

    //Validacion de la conexión
    if(!$DB){
        echo "error to select DB\n";

        /*Por si la DB no esta creada*/
        /* 
            if(!$DBname){
                 $createDB = "CREATE DATABASE 'comercio'";
                 $querySet = mysqli_query($connection, $createDB) ? print("DB has been created") : print(mysqli_error());
             }
         */
    } else {
        echo "DB ready to operate\n";
    }

    $exitDB = mysqli_close($connection);
    if($exitDB){
        echo "DB connection finished";
    }
?>