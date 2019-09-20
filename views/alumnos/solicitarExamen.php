<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Alumnos</title>
</head>
<body>

	<?php require 'views/header.php' ?>

	<div class="opciones">

		<h1>Examenes a Solicitar</h1>
	

		<form method="POST" action="<?php echo constant('URL') . 'alumnos/solicitarExamen/solicitud' ?>">

			<div class="panel">
				
				<h2>Extemporaneo</h2>

				<!--<label>IdAlumno: </label>
				<input type="text" name="idAlumno"><br>-->


				<label>Materia :</label>
				<select name="materia1">
					<?php 
					foreach ($this->materias as $row) {

						$materia = new Materia();
						$materia = $row;
						
					
					?>

					<option value="<?php echo $materia->idMateria; ?>"><?php echo $materia->nombreMateria; ?></option>

					<?php } ?>
				</select>

			</div>


			<div class="panel alerta">
				<p>A partir de la tercera solicitud seran sometidas a revision para su autorizacion</p>

				<img src="<?php echo constant('URL') . 'public/img/alerta.png' ?>">
			</div>


			<input type="submit" name="" class="btn-registrar">
			
		</form>

		
			
		
	</div>

	<?php require 'views/sidebar.php' ?>

</body>
</html>