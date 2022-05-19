<?php
    $query = "SELECT * FROM tasks";
    $querySet = mysqli_query($db, $query);
    $logs = mysqli_fetch_assoc($querySet);
	$logsA = mysqli_fetch_array($querySet);
?>
<div class="grid-container">
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">ID Tarea</a></div>
			<div class="header__item"><a id="name" class="filter__link" href="#">Titulo</a></div>
			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Descripción</a></div>
			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Fecha de Creación</a></div>
		</div>
		<div class="table-content">	

			<div class="table-row">
				<?php
					foreach($logs as $log => $data){
						echo "<div id='dinamics'class='table-row'>";
						?>
						<?php
							echo '<div class="table-data">'.$data.'</div>';
						echo "</div>";
					}
				?>
			</div>
			
			<div class="table-row">		
				<div class="table-data">Tom</div>
				<div class="table-data">2</div>
				<div class="table-data">0</div>
				<div class="table-data">1</div>
				<div class="table-data">5</div>
			</div>
			<div class="table-row">
				<div class="table-data">Dick</div>
				<div class="table-data">1</div>
				<div class="table-data">1</div>
				<div class="table-data">2</div>
				<div class="table-data">3</div>
			</div>
			<div class="table-row">
				<div class="table-data">Harry</div>
				<div class="table-data">0</div>
				<div class="table-data">2</div>
				<div class="table-data">2</div>
				<div class="table-data">2</div>
			</div>
		</div>	
	</div>
</div>