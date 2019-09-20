<?php

class MenuConsultarExamenes extends Controller{

	function __construct(){
		parent::__construct();
		//verificar que sea admin
		session_start();
		if($_SESSION['datosUsuario']['privilegios'] != 1){
			header("location:".constant('URL') . 'login/mainLogin');
		}
	}

	function renderVista(){
		$this->view->render('administrador/menuConsultarExamenes');
	}

}

?>