<?php

class MainLogin extends Controller{

	function __construct(){
		parent::__construct();
	}

	function renderVista(){
		$this->view->render('login/index');
	}

	function login(){

		$correo = $_POST['correo'];
		$password = $_POST['password'];

		if($this->model->verificarUsuario(['correo' => $correo,
										   'password' => $password]) == 1){
			//mandar a la vista admin
			//$this->view->render('administrador/index');
			header("location:".constant('URL') . 'administrador/menu');
		}else{
			//mandar a la vista alumno
			//$this->view->render('alumnos/index');
			header("location:".constant('URL') . 'alumnos/menu');
		}
	}

	function registrarUsuario(){

		$numControl = $_POST['numControl'];
		$nombre = $_POST['nombre'];
		$apellidoPaterno = $_POST['apellidoPaterno'];
		$apellidoMaterno = $_POST['apellidoMaterno'];
		$correo = $_POST['correo'];
		$password = $_POST['password'];
		$plan = $_POST['plan'];

		if($this->model->insertUsuario(['numControl' => $numControl,
										'nombre' => $nombre,
										'apellidoPaterno' => $apellidoPaterno,
										'apellidoMaterno' => $apellidoMaterno,
										'correo' => $correo,
										'password' => $password,
										'plan' => $plan]) ){

			echo "Registro realizado con exito";

		}else{

			echo "No se pudo realizar el registro";
		}

	}

}

?>