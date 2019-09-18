<?php

class Menu extends Controller{

	function __construct(){
		parent::__construct();
	}

	function renderVista(){
		$this->view->render('alumnos/index');
	}
}

?>