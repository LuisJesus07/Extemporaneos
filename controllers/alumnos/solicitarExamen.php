<?php

class SolicitarExamen extends Controller{

	function __construct(){
		parent::__construct();
	}

	function renderVista(){
		$this->view->render('alumnos/solicitarExamen');
	}

	function solicitud(){

		//recibir las solicitudes
		$idAlumno = $_POST['idAlumno'];
		$idMateria1 = $_POST['materia1'];

		//ver el estado del alumno(disponible para solicitar o no)
		$solicitados = $this->model->solicitudesRealizadas($idAlumno);


		//si ya solicito dos sus solicitudos pasaran a revision
		if($solicitados >=2){
			//seran sometidos a revicion
			$estado = 2;
		}else{
			//aceptados
			$estado =1;
		}


		if($this->model->insertSolicitudExamen(['estado' => $estado,
											 	'idUsuario' => $idAlumno,
											 	'idMateria' => $idMateria1])){

			echo "Solicitud Realizada con Exito";
		}else{

			echo "Ocurrio un error";
		}

	}

	function obtenerMaterias(){
		//obtener todas las materias a partir de un plan
		$materias = $this->model->getAllMaterias();

		
		echo $materias;
	}

	function obtenerCarreras(){

		$carreras = $this->model->getAllCarreras();

		echo $carreras;


	}
}

?>