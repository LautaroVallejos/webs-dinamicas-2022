<?php
    $query = "SELECT * FROM tasks";
    $querySet = mysqli_query($db, $query);
    $logs = mysqli_fetch_assoc($querySet);
	$logsA = mysqli_fetch_array($querySet);
?>

<?php
	// while($row = mysqli_fetch_array($querySet)){
	// Testing Code
	// }
?>

<!-- Dashboard -->
<div class="grid-container">
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">ID Tarea</a></div>
			<div class="header__item"><a id="name" class="filter__link" href="#">Titulo</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Descripción</a></div>
			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Fecha de Creación</a></div>
		</div>
		<div class="table-content">			
		<?php
			for($i=0; $i<count($logsA); $i++){
		?>
			<div class="table-row">
			<?php
				foreach($logs as $log){
			?>
					<span class='table-data'><?php print_r($logs['id']);?></span>
					<span class='table-data'><?php print_r($logs['title']);?></span>
					<span class='table-data'><?php print_r($logs['description']);?></span>
					<span class='table-data'><?php print_r($logs['created_at']);?></span>
			<?php break; }; ?> <!--Si se saca el break se rompe-->
				</div>
		<?php };?>
			
			
		</div>	
	</div>
</div>