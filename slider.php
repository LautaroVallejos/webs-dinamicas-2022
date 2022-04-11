<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Slider</title>
</head>
<body>
    <?php
        if(is_uploaded_file($_FILES['foto1']['tmp_name']) && 
        is_uploaded_file($_FILES['foto2']['tmp_name']) &&
        is_uploaded_file($_FILES['foto3']['tmp_name'])){
            $photo1 = $_FILES['foto1']['name'];
            move_uploaded_file($_FILES['foto1']['tmp_name'], $photo1);

            $photo2 = $_FILES['foto2']['name'];
            move_uploaded_file($_FILES['foto2']['tmp_name'], $photo2);
            
            $photo3 = $_FILES['foto3']['name'];
            move_uploaded_file($_FILES['foto3']['tmp_name'], $photo3);
        } else{
            echo "A ocurrido un error, las imagenes no fueron cargadas correctamente, verifique que los 3 campos esten completos";
        }
    ?>

    <div class="main-container">
        <input type="radio" name="image-slide" id="1" hidden>
        <input type="radio" name="image-slide" id="2" hidden>
        <input type="radio" name="image-slide" id="3" hidden>

        <!-- Slider  -->
        <div class="slide">
            <div class="slide-item">
                <img src="<?php echo $photo1?>" alt="error al cargar la imagen">
            </div>
            <div class="slide-item">
                <img src="<?php echo $photo2?>" alt="error al cargar la imagen">
            </div>
            <div class="slide-item">
                <img src="<?php echo $photo3?>" alt="error al cargar la imagen">
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <label class="pagination-item" for="1">
                <img src="./<?php echo $photo1?>" alt="error al cargar la imagen">
            </label>
            <label class="pagination-item" for="2">
                <img src="./<?php echo $photo2?>" alt="error al cargar la imagen">
            </label>
            <label class="pagination-item" for="3">
                <img src="./<?php echo $photo3?>" alt="error al cargar la imagen">
            </label>
        </div>
    </div>
</body>
</html>