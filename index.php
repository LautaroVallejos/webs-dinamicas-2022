<?php 
    require_once('./db.php');
    include('./includes/header.php');    
        // Validacion de mensajes
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            session_unset();
        }
        include('./includes/navbar.php');
        include ('./includes/form.php');
        include('./includes/dashboard.php');
    include('./includes/footer.php');