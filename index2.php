<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <title>Calculador de supermercado</title>
</head>
<body>
    <div class="container">
    <form class='forms' action="" method="post">
            <h1>Compra de Articulos</h1>
            <div class="in-container">
                <label for="">Producto</label>
                <input class="inputf" type="text" name="product" placeholder="Ingrese producto">
            </div>

            <div class="in-container">
            <label for="">Cantidad</label>
                <input class="inputf" type="number" name="quantity" placeholder="Ingrese cantidad">
            </div>

            <div class="in-container">
               <center><input type="submit" name="submit" value="Calcular Total"></center>
            </div>
        </form>
    </div>

    <?php
        $products = array("yerba" => 200, "mayonesa" => 100, "gaseosa" => 120, "don staur" => 80);


        if(isset($_POST['submit'])){
            foreach($products as $product => $price){
                if(isset($_POST['product']) && isset($_POST['quantity'])){
                    $cant = $_POST['quantity'];
                    $total = $price * $cant;
                    echo "el valor total es: $total";
                }
            }
        }
    ?>

</body>
</html>