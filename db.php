<?php

    session_start();
    /** Server Connection */
    $server = 'localhost';
    $user = 'root';
    $pass = "";
    $dbName = "tasksdb";

    $db = mysqli_connect(
        $server, 
        $user, 
        $pass
        ) or die(
            mysqli_connect_error()
        );
    
    /** Server Validation */
    if(isset($db)){
       // echo "Connection with DB Succefully <br>";
    } else {
        echo "Error to connect DB: \n".mysqli_error();
    }

    /** DB Selection */
    $selectDB= mysqli_select_db($db, $dbName);

    /** DB Validation */
    if(isset($selectDB)){
       // echo "DataBase selected: <b>$dbName</b>";
    } else {
        echo "\nError to select DB".mysqli_error();
    }