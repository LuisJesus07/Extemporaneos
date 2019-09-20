<?php

class SolicitarExamen extends Controller{

	function __construct(){
		parent::__construct();
		//verificar que sea admin
		session_start();
		if($_SESSION['datosUsuario']['privilegios'] != 2){
			header("location:".constant('URL') . 'login/mainLogin');
		}
	}

	function renderVista(){

		//obtener materias del plan al que perrtence el alumno
		$materias = $this->model->getMateriasByPlan($_SESSION['datosUsuario']['nombrePlan']);
		//pasarle las materias a la vista
		$this->view->materias = $materias;

		
		$this->view->render('alumnos/solicitarExamen');
	}

	function solicitud(){

		//recibir las solicitudes
		$idAlumno = $_SESSION['datosUsuario']['idUsuario'];
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

			$this->view->render('alumnos/solicitudExitosa');

		}else{

			$this->view->render('alumnos/solicitudError');
		}

	}


}

?>