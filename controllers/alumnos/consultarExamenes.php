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




	
}

?>