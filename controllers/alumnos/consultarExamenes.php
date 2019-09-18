<?php

class ConsultarExamenes extends Controller{

	function __construct(){
		parent::__construct();
	}

	function renderVista(){
		$this->view->render('alumnos/consultarExamenes');
	}

	function obtenerExamenes(){
		//obtener los examenes del alumno 
		$examenes = $this->model->getAllExamenesById(1);

		echo $examenes;
	}

	
}

?>