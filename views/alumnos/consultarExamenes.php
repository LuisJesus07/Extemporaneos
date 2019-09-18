<!DOCTYPE html>
<html>
<head>
	<title>Examenes Solicitados</title>
</head>
<body>

	<?php require 'views/header.php' ?>



	<div class="opciones datos-tabla">

		<div class="panel">

			<h2>Mis Examenes</h2>

			<table class="tabla" id="tabla">
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
						<th>Eliminar</th>
					</tr>
				</thead>
				
				
				<tbody>

					<?php 
					foreach ($this->examenes as $row) {

						$examen = new InfoExamen();
						$examen = $row;
						
					
					?>
					<tr id="fila" class="estado-<?php echo $examen->estado ?>">
						<td><?php echo $examen->numControl; ?></td>
						<td><?php echo $examen->nombre; ?></td>
						<td><?php echo $examen->apellidoPaterno; ?></td>
						<td><?php echo $examen->apellidoMaterno; ?></td>
						<td><?php echo $examen->nombrePlan; ?></td>
						<td><?php echo $examen->nombreCarrera; ?></td>	
						<td><?php echo $examen->nombreMateria; ?></td>	
						<td><?php if($examen->estado == 1){echo "Aceptado";}else{echo "Espera";} ?></td>
						<td>Eliminar</td>			
					</tr>

					<?php } ?>
					
				</tbody>

			</table>
			
		</div>
		

	</div>


</body>
</html>