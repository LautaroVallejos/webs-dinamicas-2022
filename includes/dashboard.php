<?php
    $query = "SELECT * FROM tasks";
    $querySet = mysqli_query($db, $query);
    $logs = mysqli_fetch_assoc($querySet);
	$logsA = mysqli_fetch_array($querySet);
?>

<!-- Dashboard -->
<div class="grid-container">
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">ID Tarea</a></div>
			<div class="header__item"><a id="name" class="filter__link" href="#">Titulo</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Descripción</a></div>
			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Fecha de Creación</a></div>
			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Estado</a></div>
		</div>
		<div class="table-content">			
		
			<?php
					while($data = mysqli_fetch_assoc($querySet)){?>
						<div class="table-row">
							<span class="table-data"><?php echo $data['id']?></span>
							<span class="table-data"><?php echo $data['title']?></span>
							<span class="table-data"><?php echo $data['description']?></span>
							<span class="table-data"><?php echo $data['created_at']?></span>
							<span class="table-data">
								<a href="update-tasks.php?update=<?php echo $data['id']?>" class="update">Modificar</a>
								<a href="dashboard.php?delete=<?php echo $data['id']?>" class="delete">Eliminar</a>
							</span>
						</div>
					<?php };?>
		</div>	
	</div>
</div>

<?php
	if(isset($_GET['update'])){
		include('./update-task.php');
	}
?>