<?php
    require_once('db.php');

    $titleTask = $_POST['title-task'];
    $descriptionTask = $_POST['description'];
        
    $newTask = "INSERT INTO tasks (title, description) VALUES ('$titleTask', '$descriptionTask')";
    $querySet = mysqli_query($db, $newTask) ? print_r("<script>alert('Tarea Creada')</script>") : print('Error al realizar la consulta: '.mysqli_error());
    
    $_SESSION['message'] = '<script language="javascript">alert("Tarea Creada");</script>';

    header("Location: index.php");