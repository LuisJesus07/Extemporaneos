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

			<div id="app">

				<table class="tabla" id="tabla">
					<thead>
						<tr>
							<th>NumControl</th>
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
						<tr v-for="examen in examenes" v-bind:class="{ pendiente: examen.estado == 2 }">
							<td>{{ examen.numControl }}</td>
							<td>{{ examen.nombre }}</td>
							<td>{{ examen.apellidoPaterno }}</td>
							<td>{{ examen.apellidoMaterno }}</td>
							<td>{{ examen.nombrePlan }}</td>
							<td>{{ examen.nombreCarrera }}</td>
							<td>{{ examen.nombreMateria }}</td>
							<td v-if="examen.estado == 2">Espera</td>
							<td v-else>Aceptado</td>
							<td>Eliminar</td>
						</tr>
					</tbody>
				</table>
				
			</div>
			
		</div>
		
		<input type="button" onclick="tableToExcel('tabla', 'Ejemplo')" value="Obtener Excel">

	</div>


</body>
<?php require 'views/vue.php' ?>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/obtenerExamenes.js' ?>"></script>
<script type="text/javascript" src="<?php echo constant('URL') . 'public/js/obtenerExcel.js' ?>"></script>
</html>