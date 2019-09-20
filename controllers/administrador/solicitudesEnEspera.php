<?php

class SolicitudesEnEspera extends Controller{

	function __construct(){
		parent::__construct();
		//verificar que sea admin
		session_start();
		if($_SESSION['datosUsuario']['privilegios'] != 1){
			header("location:".constant('URL') . 'login/mainLogin');
		}
	}

	function renderVista(){

		$solicitudesEnEspera = $this->model->getSolicitudesEnEspera();

		$this->view->examenes = $solicitudesEnEspera;

		$this->view->render('administrador/solicitudesEnEspera');
	}

	function aceptarSolicitud($param = null){
		
		$idSolicitudExamen = $param[0];

		if($this->model->setEstadoSolicitud($idSolicitudExamen)){
			$mensaje = "Examen Aceptado";
		}else{
			$mensaje = "No se pudo aceptar el examen";
		}

		echo $mensaje;
	}
}

?>