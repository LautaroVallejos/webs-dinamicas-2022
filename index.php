<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Calculador de supermercado</title>
</head>
<body>
    <!-- Contenedor del Formulario -->
    <div class="container">
        <form action="result.php" method="post">

            <div class="section">
                <label class="label" for="">Titulo de la Página</label>
                <input type="text" name="title" id="title-text" placeholder="Ingrese un titulo">
            </div>
            
            <div class="section">
                <label for="" class="label">Encabezado</label>
                <input type="number" name="header" id="header-number" placeholder="Encabezado del 1 - 6">
            </div>
            
            <div class="section">
                <label for="" class="label">Texto</label>
                <textarea name="text-area" id="text-input" placeholder="Ingrese un texto" cols="30" rows="10"></textarea>
            </div>

            <div class="section">
                <input type="submit" value="Enviar" name="send" class="send">
            </div>
        
        </form>
    </div>

    

</body>
</html>