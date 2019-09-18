<!DOCTYPE html>
<html>
<head>
	<title>Menu Alumnos</title>
</head>
<body>

	<?php require 'views/header.php' ?>

	<div class="opciones">

		<h1>Examenes a Solicitar</h1>
	
		<div id="llenarSelect">

			<form method="POST" action="<?php echo constant('URL') . 'alumnos/solicitarExamen/solicitud' ?>">

				<div class="panel">
					
					<h2>Extemporaneo</h2>

					<label>IdAlumno: </label>
					<input type="text" name="idAlumno"><br>

					<!--<label>Materia: </label>
					<input type="text" name="materia1">-->
					<label>Materia: </label>
					<select name="materia1">
						<option v-for="materia in materias" :value="materia.idMateria">{{ materia.nombreMateria }}</option>
					</select>




				</div>


				<div class="panel alerta">
					<p>A partir de la tercera solicitud seran sometidas a revision para su autorizacion</p>

					<img src="<?php echo constant('URL') . 'public/img/alerta.png' ?>">
				</div>


				<input type="submit" name="" class="btn-registrar">
				
			</form>

		</div>
			
		
	</div>

	<?php require 'views/sidebar.php' ?>

</body>
<?php require 'views/vue.php' ?>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/obtenerMaterias.js' ?>"></script>
</html>