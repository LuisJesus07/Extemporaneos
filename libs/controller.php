<?php

class Controller{

	function __construct(){

		//echo "<p>Clase padre controlador</p>";
		$this->view = new View();

		//4mensajes de exito y error}
		$this->view->mensajeError = "";
		$this->view->mensajeExito = "";
	}


	function loadModel($datos){

		$url = 'models/'.$datos.'model.php';

		if(file_exists($url)){

			require $url;
			$nombreModel = $datos.'Model';
			$this->model = new $nombreModel();
		}
	}


}

?>