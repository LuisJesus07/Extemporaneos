<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php require 'views/header.php' ?>

	<div class="principal">
		
		<div class="opciones">

			<h1>Examenes Extemporaneos</h1>

			<div class="opciones-btn">

				<div class="opcion">
					<img src="<?php echo constant('URL') ?>public/img/inscribir.png">

					<a href="<?php echo constant('URL') . 'alumnos/solicitarExamen' ?>"><input type="button" name="" value="Solicitar Examen"></a>
					
				</div>

				<div class="opcion">
					<img src="<?php echo constant('URL') ?>public/img/materias.png">

					<a href="<?php echo constant('URL') . 'alumnos/consultarExamenes' ?>"><input type="button" name="" value="Consultar" ></a>
				</div>

				
			</div>
			

		</div>

		<?php require 'views/sidebar.php'; ?>

</body>
</html>