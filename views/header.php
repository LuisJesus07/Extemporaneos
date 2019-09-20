<!DOCTYPE html>
<html>
<head>
	<title>Vista Main</title>
	<link rel="stylesheet" type="text/css" href="<?php echo constant('URL') ?>public/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

	<header class="header">

		<div class="main-header">

			

			<div class="menu-container">


				<nav class="menu">
					<ul class="main-menu">

						<!--<li>
							<a href="">Principal</a>
						</li>	-->	

						<li>
							<a href="<?php echo constant('URL') . 'login/cerrarSesion'  ?>"><i class="fas fa-sign-out-alt salir"></i></a>
						</li>

					

					</ul>

					
				</nav>

				

			</div>

			<div class="logo">

				<a href="<?php echo constant('URL') ?>main/main"><img src="<?php echo constant('URL') ?>public/img/logouabcs1.png"></a>
				
			</div>
			
			
		</div>

	</header>

</body>
</html>