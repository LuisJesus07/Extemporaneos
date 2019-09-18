<!DOCTYPE html>
<html>
<head>
	<title>Examenes Por Carrera</title>
</head>
<body>

	<?php require 'views/header.php' ?>

	<div class="opciones datos-tabla">

		<div class="panel">

			<h2>Extemporaneos</h2>

			<table class="tabla" id="tabla" class="display nowrap">
				<thead>
					<tr>
						<th>Numero Control</th>
						<th>Nombre</th>
						<th>Apellido Paterno</th>
						<th>Apellido Materno</th>
						<th>Plan</th>
						<th>Carrera</th>
						<th>Materia</th>
					</tr>
				</thead>
				
				
				<tbody>

					<?php 
					foreach ($this->examenes as $row) {

						$examen = new InfoExamen();
						$examen = $row;
						
					
					?>
					<tr id="fila">
						<td><?php echo $examen->numControl; ?></td>
						<td><?php echo $examen->nombre; ?></td>
						<td><?php echo $examen->apellidoPaterno; ?></td>
						<td><?php echo $examen->apellidoMaterno; ?></td>
						<td><?php echo $examen->nombrePlan; ?></td>
						<td><?php echo $examen->nombreCarrera; ?></td>	
						<td><?php echo $examen->nombreMateria; ?></td>				
					</tr>

					<?php } ?>
					
				</tbody>

			</table>
			
		</div>
		
	</div>



</body>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/jquery-3.3.1.js' ?>"></script>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/jquery.dataTables.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/dataTables.buttons.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/jszip.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/pdfmake.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/vfs_fonts.js' ?>"></script>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/buttons.print.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/buttons.html5.min.js' ?>"></script>

<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/generarExcel.js' ?>"></script>
</html>