<?php

class Recursos extends Controller{

	function __construct(){
		parent::__construct();
	}

	function obtenerCarreras(){

		$carreras = $this->model->getAllCarreras();

		echo $carreras;
	}

	function obtenerMaterias(){
		$materias = $this->model->getAllMaterias();
		
		echo $materias;
	}

	function obtenerPlanes(){

		$planes = $this->model->getAllPlanes();

		echo $planes;
	}

	function obtenerMateriasByPlan(){

		$materiasByPlan = $this->model->getMateriasByPlan('IDS 2015');

		echo $materiasByPlan;
	}
}

?>