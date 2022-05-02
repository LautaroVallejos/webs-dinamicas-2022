<?php
    // Conexion a la base de datos

    $server = "localhost"; 
    $user = "root";
    $pass = "";

    $connection = mysqli_connect($server, $user, $pass);

    //Validacion de la conexion

    if($connection){
        echo "DB connected succesfully";
    } else {
        echo "connection error";
    }

    //Selecion de la base de datos
    $db = mysqli_select_db($connection, "empresa");

    //Validacion a la base de datos puntual
    if($db){
        echo "Vinculamiento a EmpresaDB";
    } else {
        echo "Error al vincular la Base de Datos correcta";
    }

    //OPERACIONES CRUD (Create, Read, Update, Delete)

    //CREATE
    //Crear un registro e insertando consulta
    $sql = "INSERT INTO usuarios VALUES (null, 'ElPibeOchinChin', 'yametee')";
    $insert = mysqli_query($connection, $sql) ? print("consulta ejecutada correctamente") : print("consulta erronea");
    
    //DELETE
    /*Eliminando un elemento*/
    $query = "DELETE FROM usuarios WHERE ID='4'";
    $query_set = mysqli_query($connection, $query) ? print("registro eliminado") : print("error al eliminar el registro");

    //UPDATE
    /*Modificando un elemento*/
    $query = "UPDATE usuarios SET NBR_Usuario='Lisandro' WHERE ID='3'";
    $query_set = mysqli_query($connection, $query_set) ? print("Registro Modificado correctamente") : print("Error al modificar el registro");

    //READ
    /**Get querys */
    $query = "SELECT * FROM usuarios WHERE ID='1'";
    $query_set = mysqli_query($connection, $query);
    $registro = mysqli_fetch_array($query_set);
    echo 'ID:'.$registro['ID'];
    echo "<br>";
    echo 'Nombre:'.$registro['NBR_Usuario'];
    echo "<br>";
    echo 'Password:'.$registro['PASS_Usuario'];
    echo "<br>";
    

    msqli_close($connection) //Cerrando conexion con la BD
?>