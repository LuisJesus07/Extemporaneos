<?php

class CerrarSesion extends Controller{

	function __construct(){
		parent::__construct();
		session_start();//Se reanuda la sesion iniciada
		session_destroy();//Se destruye la sesion iniciada
	}

	function renderVista(){
		$this->view->render('login/index');
	}
}

?>