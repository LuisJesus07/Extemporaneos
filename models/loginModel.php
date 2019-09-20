<?php

class LoginModel extends Model{

	function __construct(){
		parent::__construct();
	}

	function insertUsuario($datos){

		try{

			$query = $this->db->connect()->prepare('INSERT INTO usuarios(numControl,nombre,apellidoPaterno,apellidoMaterno,correo,password,privilegios,idPlanDeEstudio)
			VALUES(:numControl,:nombre,:apellidoPaterno,:apellidoMaterno,:correo,:password,2,:plan)');

			$query->execute(['numControl' => $datos['numControl'],
							 'nombre' => $datos['nombre'],
							 'apellidoPaterno' => $datos['apellidoPaterno'],
							 'apellidoMaterno' => $datos['apellidoMaterno'],
							 'correo' => $datos['correo'],
							 'password' => $datos['password'],
							 'plan' => $datos['plan']]);

			return true;

		}catch(PDOException $e){
			return false;
		}
	}


	function verificarUsuario($datos){

		try{

			$query = $this->db->connect()->prepare('SELECT USU.privilegios,USU.idUsuario,USU.numControl,USU.correo,USU.nombre,PLAN.nombrePlan
				FROM usuarios AS USU 
				INNER JOIN planesDeEstudio AS PLAN ON PLAN.idPlanDeEstudio=USU.idPlanDeEstudio
				WHERE correo=:correo AND password=:password');

			$query->execute(['correo' => $datos['correo'],
							 'password' => $datos['password']]);


			//guardar en sesion id del usuario
			session_start();
			$_SESSION['idUsuario'] = $query->fetch()[0];


			return $_SESSION['idUsuario'];

		}catch(PDOException $e){
			return $e;
		}
	}
}

?>