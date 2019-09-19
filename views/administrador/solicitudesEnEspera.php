<!DOCTYPE html>
<html>
<head>
	<title>Examenes Por Carrera</title>
	<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/jquery-3.3.1.js' ?>"></script>
	<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/jquery.dataTables.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/dataTables.buttons.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/jszip.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/pdfmake.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/vfs_fonts.js' ?>"></script>
	<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/buttons.print.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/buttons/buttons.html5.min.js' ?>"></script>

	<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/generarExcel.js' ?>"></script>
</head>
<body>

	<?php require 'views/header.php' ?>

	<div id="respuesta"></div>

	<div class="opciones datos-tabla">

		<div class="panel">

			<h2>Examenes no Aceptados</h2>

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
						<th>Estado</th>
						<th>Aceptar</th>
					</tr>
				</thead>
				
				
				<tbody id="tbody-examenes">

					<?php 
					foreach ($this->examenes as $row) {

						$examen = new InfoExamen();
						$examen = $row;
						
					
					?>
					<tr class="estado-2" id="fila-<?php echo $examen->idSolicitudExamen ?>"  >
						<td><?php echo $examen->numControl; ?></td>
						<td><?php echo $examen->nombre; ?></td>
						<td><?php echo $examen->apellidoPaterno; ?></td>
						<td><?php echo $examen->apellidoMaterno; ?></td>
						<td><?php echo $examen->nombrePlan; ?></td>
						<td><?php echo $examen->nombreCarrera; ?></td>	
						<td><?php echo $examen->nombreMateria; ?></td>
						<td>Espera</td>		
						<td><button class="btn-eliminar" data-idSolicitud="<?php echo $examen->idSolicitudExamen ?>">Aceptar</button></td>		
					</tr>

					<?php } ?>
					
				</tbody>

			</table>
			
		</div>
		
	</div>



</body>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/aceptarSolicitud.js' ?>"></script>
</html>