<!DOCTYPE html>
<html>
<head>
	<title>Consultar Examenes</title>
</head>
<body>

	<?php require 'views/header.php'  ?>

	<div class="opciones">

		<div class="panel">

			<h2>Filtrar Busqueda</h2>

			<form method="POST" action="<?php echo constant('URL') . 'administrador/consultarExamenes/examenesPorCarrera' ?>">

				<label>Por Carrera:</label>
				<input type="text" name="carrera">

				<input type="submit" name="">
				
			</form>

			<form method="POST" action="<?php echo constant('URL') . 'administrador/consultarExamenes/examenesPorPlan' ?>">

				<label>Por Plan:</label>
				<input type="text" name="plan">

				<input type="submit" name="">
				
			</form>

			<form method="POST" action="<?php echo constant('URL') . 'administrador/consultarExamenes/examenesPorMateria' ?>">

				<label>Por Materia:</label>
				<input type="text" name="materia">

				<input type="submit" name="">
				
			</form>
			
		</div>
		
	</div>

	<?php require 'views/sidebar.php' ?>

</body>
</html>