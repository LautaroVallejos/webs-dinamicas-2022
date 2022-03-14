<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="articles.css">
    <title>Calculador de supermercado</title>
</head>
<body>
    <!-- Contenedor del Formulario -->
    <div class="container">
        <form class='forms' action="#" method="post">
            <h1><i>Compra de Articulos</i></h1>
            <div class="in-container">
                <label for="">Producto</label>
                <input class="inputf" type="text" name="product" placeholder="Ingrese producto">
            </div>

            <div class="in-container">
                <label for="">Cantidad</label>
                <input class="inputf" type="number" name="quantity" placeholder="Ingrese cantidad">
            </div>

            <div id="submit-button" class="in-container">
               <input class="button" type="submit" name="send" value="Calcular Total">
            </div>
        </form>
    </div>

    <!-- Instrucciones Dinamicas -->
    <?php
        if(isset($_POST['send'])){
            //Productos en Stock
            $products = array("yerba" => 200, "mayonesa" => 100, "gaseosa" => 120, "don satur" => 80);
            $product_exist = 0;

            foreach($products as $product => $price){
            // Si hace match con un producto calcula el tota y lo devuelve
                if($_POST['product'] == $product && isset($_POST['quantity'])){
                    $cant = $_POST['quantity'];
                    $total = $price * $cant;
                    echo "El total es de: $$total";
                    $product_exist = 1;
                    break; // Una vez encuentra el producto corta del foreach
                }
            }

            // Si el producto existe retorna el total por pantalla, sino devuelve error
            if($product_exist == 1){
                    echo "<br>Operacion realizada exitosamente";
            } else{
                    echo "Error, el producto no se encuetra diponible o la cantidad no ha sido ingresada";
            }
    ?>

</body>
</html>