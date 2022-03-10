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
        //Productos en Stock
        
        
        if(isset($_POST['send'])){
            $products = array("yerba" => 200, "mayonesa" => 100, "gaseosa" => 120, "don satur" => 80);
            
            $product_exist = 0;
            foreach($products as $product => $price){

                if($_POST['product'] == $product && isset($_POST['quantity'])){
                    $cant = $_POST['quantity'];
                    $total = $price * $cant;
                    // echo "El producto es $product y el precio es $price";
                    echo "El total es de: $$total";
                    $product_exist = 1;
                    break;
                }
            }

            if($product_exist == 1){
                    echo "\nOperacion realizada exitosamente";
            } else{
                    echo "Error, el producto no se encuetra diponible o la cantidad no ha sido ingresada";
            }


        //Non-functional code
        //====================================================================>
            // foreach($products as $product => $price){
            //     if(isset($_POST['product']) && isset($_POST['quantity'])){
            //         $cant = $_POST['quantity'];
            //         $total = $price * $cant;
            //         $valid_item = 1;
            //     } else {
            //         $error = "Elemento no incluido en el inventario";
            //     }
            // }
            
            // echo "el valor total es: $total";
        }
    ?>

</body>
</html>