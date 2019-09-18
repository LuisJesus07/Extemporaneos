<?php

class MenuConsultarExamenes extends Controller{

	function __construct(){
		parent::__construct();
	}

	function renderVista(){
		$this->view->render('administrador/menuConsultarExamenes');
	}

}

?>