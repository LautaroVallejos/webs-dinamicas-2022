<section class="main">
    <img class="giyu" src="./src/statics/viejo-sabroso.png" alt="error to load pic" srcset="">
    
    <div class="container">
        
        <h1 class="title">💀 Eliminar tareas</h1>
        
        <form id="form" action="save-tasks.php" method="post">
            <input type="radio" name="title-task" class="input-tasks" placeholder="Añada el Titulo de su Tarea" required autofocus>
            <textarea name="description" rows="5" columns="100" class="input-tasks" placeholder="Descripcion de la Tarea"></textarea>
            <input type="submit" style="background-color: #d60053;" value="Eliminar Tarea" class="send" name="save">
        </form>
        
    </div>

    <?php
        echo 'testimng';
    ?>
</section>