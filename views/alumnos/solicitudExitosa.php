<!DOCTYPE html>
<html>
<head>
	<title>Solicitud exitosa</title>
</head>
<body>

	<?php require 'views/header.php' ?>

	<div class="opciones">

		<div class="panel">

			<h2>Solicitud realizada con exito</h2>

			<a href="<?php echo constant('URL') . 'alumnos/menu' ?>"><button>Volver al menu</button></a>
			
			<a href="<?php echo constant('URL') . 'alumnos/consultarExamenes' ?>"><button>Ver mis solicitudes</button></a>

			<a href="<?php echo constant('URL') . 'alumnos/solicitarExamen' ?>"><button>Realizar otra solicitud</button></a>	
			
		</div>
		
	</div> 

	<?php require 'views/sidebar.php' ?>

</body>
</html>