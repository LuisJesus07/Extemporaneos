<?php

class Menu extends Controller{

	function __construct(){
		parent::__construct();

		session_start();
		echo $_SESSION['idUsuario'];
	}

	function renderVista(){
		$this->view->render('alumnos/index');
	}
}

?>