<div class="admin-info">

			<img src="<?php echo constant('URL') . 'public/img/admin.png' ?>">

			<div class="info-cuenta">
				
				<div class="info-cuenta-cabecera">Tipo cuenta: </div>


				<div class="info-cuenta-cabecera informacion">Administrador</div>

				

				<div class="info-cuenta-cabecera">Nombre: </div>
				<div class="info-cuenta-cabecera informacion"><?php echo $_SESSION['datosUsuario']['nombre']; ?></div>

				<div class="info-cuenta-cabecera">Correo: </div>
				<div class="info-cuenta-cabecera informacion"><?php echo $_SESSION['datosUsuario']['correo']; ?></div>

			</div>


			<div class="social">

				<img src="<?php echo constant('URL') ?>public/img/logouabcs1.png">

				<div class="iconos-social">
					<a href=""><i class="fab fa-facebook-square"></i></a>
					<a href=""><i class="fab fa-twitter-square"></i></a>
				</div>
				
			</div>
			
</div>