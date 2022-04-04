<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Imagen</title>
</head>
<body>
    <?php
        if(isset($_POST['send'])){
            if(is_uploaded_file($_FILES['files']['tmp_name'])){
                $photo = $_FILES['files']['name'];
                move_uploaded_file($_FILES['files']['tmp_name'], $photo);
            }
        }
    ?>

    <div class="img-container">
        <img id='image' src="<?php echo $photo?>" alt="error al cargar la imagen">
    </div>
</body>
</html>