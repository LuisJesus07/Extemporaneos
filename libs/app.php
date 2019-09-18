<?php


class App{

	function __construct(){


		//si url si trae algo lo asignamos
		if(!empty($_GET['url'])){
			//recibir por get lo que tenga la url
			$url = $_GET['url'];
		}else{
			$url = null;
		}
		//convertimos en array lo que rae url
		$url = rtrim($url, '/');
		$url = explode('/', $url);





		if($url[0] == null){
			require 'controllers/main/main.php';
			$controller = new Main();
			$controller->renderVista();
		}else{

			//$url[0] = carpeta   $url[1] = controlador
			$archivoController = 'controllers/'.$url[0].'/'.$url[1].'.php';
			


			//validamos que si exista el controlador
			if(file_exists($archivoController)){
				
				require $archivoController;
				$controller = new $url[1];

				//cargar el modelo
				$controller->loadModel($url[0]);

				//num de parametros que recibimos
				$numParam = sizeof($url);


				if($numParam >2){
					if($numParam >3){
						//metemos los parametros en un array
						$parametros = [];

						for($i=3;$i < $numParam;$i++){

							array_push($parametros, $url[$i]);
						}
						//cargamos el metodo y le pasamos los parametros
						$controller->{$url[2]}($parametros);
					}else{
						//en caso de no recibir parametros cargamos el metodo solamente
						$controller->{$url[2]}();
					}
		
				}else{
					//cargar la vista
					$controller->renderVista();
				}


			}else{
				require 'controllers/errores.php';
				$controller = new Errores();
				$controller->renderVista();
			}

		}

		
		


	}


}

?>