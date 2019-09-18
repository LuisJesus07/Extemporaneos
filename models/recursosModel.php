<?php
include_once 'models/obj/materia.php';
include_once 'models/obj/carrera.php';
include_once 'models/obj/plan.php';

class RecursosModel extends Model{

	function __construct(){
		parent::__construct();
	}

	function getAllCarreras(){

		$carreras = [];

		try{

			$query = $this->db->connect()->query('select * from carreras');

			while($row = $query->fetch()){
				$carrera = new Carrera();

				$carrera->idCarrera = $row['idCarrera'];
				$carrera->nombreCarrera = $row['nombreCarrera'];

				array_push($carreras, $carrera);
			}


			return json_encode($carreras);

		}catch(PDOException $e){
			return $e;
		}
	}



	function getAllMaterias(){

		$materias = [];

		try{

			$query = $this->db->connect()->query('select * from materias where idMateria != 11');

			while($row = $query->fetch()){
				$materia = new Materia();

				$materia->idMateria = $row['idMateria'];
				$materia->nombreMateria = $row['nombreMateria'];

				array_push($materias, $materia);
			}

			//var_dump($materias);

			return json_encode($materias);

		}catch(PDOException $e){
			return $e;
		}
	}


	function getAllPlanes(){

		$planes = [];

		try{

			$query = $this->db->connect()->query('select * from planesDeEstudio');

			while($row = $query->fetch()){
				$plan = new Plan();

				$plan->idPlanDeEstudio = $row['idPlanDeEstudio'];
				$plan->nombrePlan = $row['nombrePlan'];

				array_push($planes, $plan);
			}

			return json_encode($planes);

		}catch(PDOException $e){
			return $e;
		}
	}


	function getMateriasByPlan($plan){

		$materias = [];

		try{

			$query = $this->db->connect()->prepare('SELECT MAT.idMateria,MAT.nombreMateria,PLAN.nombrePlan
				FROM materias AS MAT
				INNER JOIN planesDeEstudio AS PLAN ON MAT.idPlanDeEstudio=PLAN.idPlanDeEstudio
				WHERE PLAN.nombrePlan =:plan');

			$query->execute(['plan' => $plan]);

			while($row = $query->fetch()){
				$materia = new Materia();

				$materia->idMateria = $row['idMateria'];
				$materia->nombreMateria = $row['nombreMateria'];
				$materia->nombrePlan = $row['nombrePlan'];

				array_push($materias, $materia);
			}

			return json_encode($materias);

		}catch(PDOException $e){
			return $e;
		}
	}




}

?>