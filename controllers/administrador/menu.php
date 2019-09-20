<?php

class Menu extends Controller{

	function __construct(){
		parent::__construct();
		//iniciamos la sesion
		session_start();
		//verificar que sea admin
		if($_SESSION['datosUsuario']['privilegios'] != 1){
			header("location:".constant('URL') . 'login/mainLogin');
		}
	}

	function renderVista(){
		$this->view->render('administrador/index');
	}
}

?>