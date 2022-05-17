<?php
    require_once('db.php');
    include('./includes/header.php');
    include('./includes/navbar.php');

        $titleTask = $_POST['title-task'];
        $descriptionTask = $_POST['description'];
        
        $newTask = "INSERT INTO tasks (title, description) VALUES ('$titleTask', '$descriptionTask')";
        $querySet = mysqli_query($db, $newTask) ? print("<script>alert('Tarea creada correctamente')</script>") : print('Error al realizar la consulta: '.mysqli_error());

    include_once('./includes/footer.php');