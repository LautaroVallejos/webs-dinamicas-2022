<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes</title>
</head>
<body>
<h2>InsertarImagen </h2>
 <form action="#" method="post" enctype="multipart/form-data">	
 	<input type="file" name="foto">
 	<input type="submit" name="insertar" value="insertar">
 </form>

 <?php 
include("redimensionarImg.php");

if(isset($_POST['insertar'])){


	if(is_uploaded_file($_FILES['foto']['tmp_name']))
{  
	$archivo = $_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $archivo);	
	
	$nbr_img = redimensionarImg($archivo,400,100);
	
	unlink($archivo);
}
echo '<img src="'.$archivo.'" alt="">';
echo '<img src="imagenes/'.$nbr_img.'" alt="">';

}
?>

</body>
</html>