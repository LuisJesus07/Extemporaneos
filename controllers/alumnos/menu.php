<?php

class Menu extends Controller{

	function __construct(){
		parent::__construct();
		//verificar que sea admin
		session_start();
		if($_SESSION['datosUsuario']['privilegios'] != 2){
			header("location:".constant('URL') . 'login/mainLogin');
		}
	}

	function renderVista(){
		$this->view->render('alumnos/index');
	}
}

?>