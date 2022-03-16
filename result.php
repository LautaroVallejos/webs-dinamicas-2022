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
        $numA = $_REQUEST['numA'];
        $numB = $_REQUEST['numB'];
        $opcion = $_REQUEST['op'];
        $res;

        if(isset($_POST['send'])){

            if($opcion == 1){
                $res = $numA + $numB;
            }

            if($opcion == 2){
                $res = $numA - $numB;
            }

            if($opcion == 3){
                $res = $numA * $numB;
            }

            if($opcion == 4){
                if($numB == 0){
                    $res = "Error, no es posible dividir entre 0.";
                } else{
                    $res = $numA / $numB;
                }
            }

            switch($opcion){
                case 1: echo "<h1>El resultado de la operacion es: $res</h1>"; break;
                case 2: echo "<h1>El resultado de la operacion es: $res</h1>"; break;
                case 3: echo "<h1>El resultado de la operacion es: $res</h1>"; break;
                case 4: echo "<h1>El resultado de la operacion es: $res</h1>"; break;
                default: echo "A ocurrido un error";break;
            }
        }
    ?>
</body>
</html>