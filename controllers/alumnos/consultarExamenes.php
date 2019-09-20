<?php

class ConsultarExamenes extends Controller{

	function __construct(){
		parent::__construct();
		//verificar que sea admin
		session_start();
		if($_SESSION['datosUsuario']['privilegios'] != 2){
			header("location:".constant('URL') . 'login/mainLogin');
		}
	}

	function renderVista(){

		//obtener los examenes del alumno 
		$examenes = $this->model->getAllExamenesById($_SESSION['datosUsuario']['idUsuario']);
		//mandar los examnes a la vista
		$this->view->examenes = $examenes;

		$this->view->render('alumnos/consultarExamenes'); 
	}

	function eliminarExamen($param = null){

		$idSolicitudExamen = $param[0];

		if($this->model->deleteSolicitud($idSolicitudExamen)){
			$mensaje = "Examen eliminado";
		}else{
			$mensaje = "No se pudo eliminar el examen";
		}

		echo $mensaje;
	}




	
}

?>