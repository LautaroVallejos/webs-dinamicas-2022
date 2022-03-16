<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title><?php echo $_POST['title'] ?></title>
</head>
<body>
    <!-- Instrucciones Dinamicas -->
    <?php
        if(isset($_POST['title']) && isset($_POST['header']) && isset($_POST['text-area'])){
            $title = $_POST['title'];
            $header = $_POST['header'];
            $text = $_POST['text-area'];
            $color = $_POST['font-color'];
            
            echo "<h$header class='procesed-text'>
            $title   <br>
            </h$header>";
            
            echo "<p class='procesed-text'>$text</p>";
        } else {
            echo "Error alguno de los 3 campos fue no ingresado, intentelo nuevamente";
        }
        echo"<style>
            .procesed-text{color: $color;}
        </style>"

    ?>
</body>
</html>