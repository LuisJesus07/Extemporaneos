<?php

class ConsultarExamenes extends Controller{

	function __construct(){
		parent::__construct();
	}

	function renderVista(){

		//obtener los examenes del alumno 
		$examenes = $this->model->getAllExamenesById(1);
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