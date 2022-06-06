<?php require_once('./db.php')?>
<?php include('./includes/header.php')?>
    <?php
        // Validacion de mensajes
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            session_unset();
        }
    ?>
    <?php include('./includes/navbar.php')?>
    <?php include ('./includes/form.php')?>
    <?php include('./includes/dashboard.php')?>

<?php include('./includes/footer.php')?>