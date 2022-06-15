<?php
    if(isset($_GET['update'])){
        $update_id = $_GET['update'];

        $get_query_set = "SELECT * FROM tasks WHERE id='$update_id'";
        $get_query = mysqli_query($db, $get_query_set);

        $row = mysqli_fetch_array($get_query);

        $title = $row['title'];
        $description = $row['description'];
        $created_at = $row['created_at'];
    }
?>
<br />

<section class="main">
    <img class="giyu" src="./src/statics/viejo-sabroso.png" alt="error to load pic" srcset="">
    
    <div class="container">
        
        <h1 class="title">🐱‍👤 Actualizar tareas</h1>
        
        <form id="form" action="" method="POST">
            <input type="text" class="input-tasks" name="new_title" value="<?php echo $title;?>">
            <textarea name="new_description" value="<?php echo $description;?>" class="input-tasks" cols="100" rows="5" placeholder="Nueva descripción"></textarea>
            <input type="submit" style="background-color: #d60053;" value="Actualizar Tarea" class="send" name="save">

            <!-- <input type="radio" name="title-task" class="input-tasks" placeholder="Añada el Titulo de su Tarea" required autofocus>
            <textarea name="description" rows="5" columns="100" class="input-tasks" placeholder="Descripcion de la Tarea"></textarea> -->
        </form>
    
    </div>
</section>

<?php
    $update_title = $_POST['title'];
    $update_description = $_POST['description'];

    $query_set = "UPDATE tasks SET title='$update_title', description='$update_description', WHERE id='$update_id'";
    $query_set = mysqli_query($db, $query_set);

    if($query_set){
        echo "<script>alert('Información Actualizada Correctamente!!')</script>";
        echo "<script>window.open('index.php')</script>";
    }
?>