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

			session_start();
			$_SESSION['datosUsuario'];

			while($row = $query->fetch()){

				$_SESSION['datosUsuario']['privilegios'] = $row['privilegios'];
				$_SESSION['datosUsuario']['idUsuario'] = $row['idUsuario'];
				$_SESSION['datosUsuario']['numControl'] = $row['numControl'];
				$_SESSION['datosUsuario']['correo'] = $row['correo'];
				$_SESSION['datosUsuario']['nombre'] = $row['nombre'];
				$_SESSION['datosUsuario']['nombrePlan'] = $row['nombrePlan'];

			}




			return $_SESSION['datosUsuario'];

		}catch(PDOException $e){
			return $e;
		}
	}
}

?>