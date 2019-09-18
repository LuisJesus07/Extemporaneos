<?php

class ConsultarExamenes extends Controller{

	function __construct(){
		parent::__construct();
	}


	function examenesPorCarrera(){

		$carrera = $_POST['carrera'];
		//obtenemos los examenes por carrera
		$examenes = $this->model->getExamenesByCarrera($carrera);
		//los pasamos a la vista
		$this->view->examenes = $examenes;

		$this->view->render('administrador/examenesPorCarrera');
	}

	function examenesPorPlan(){

		$plan = $_POST['plan'];
		//obtenemos los examenes por carrera
		$examenes = $this->model->getExamenesByPlan($plan);
		//los pasamos a la vista
		$this->view->examenes = $examenes;

		$this->view->render('administrador/examenesPorPlan');
	}

	function examenesPorMateria(){

		$materia = $_POST['materia'];
		//obtenemos los examenes por carrera
		$examenes = $this->model->getExamenesByMateria($materia);
		//los pasamos a la vista
		$this->view->examenes = $examenes;

		$this->view->render('administrador/examenesPormateria');
	}
}

?>