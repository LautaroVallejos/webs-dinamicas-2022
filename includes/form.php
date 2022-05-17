<section class="main">
    <img class="anya" src="./src/statics/Anya.png" alt="error to load pic" srcset="">
    
    <div class="container">
        
        <h1 class="title">&#127752; Anyadir nuevas tareas!!</h1>
        
        <form id="form" action="save-tasks.php" method="post">
            <input type="text" name="title-task" class="input-tasks" placeholder="Añada el Titulo de su Tarea" required autofocus>
            <textarea name="description" rows="5" columns="100" class="input-tasks" placeholder="Descripcion de la Tarea"></textarea>
            <input type="submit" value="Guardar Tarea" class="send" name="save">
        </form>
        
    </div>
</section>

