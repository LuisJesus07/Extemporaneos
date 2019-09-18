<?php
include_once 'models/obj/infoExamenes.php';

class AdministradorModel extends Model{

	function __construct(){
		parent::__construct();
	}

	function getExamenesByCarrera($carrera){


		$examenes = [];

		try{

			$query = $this->db->connect()->prepare('SELECT USU.numControl,USU.nombre,USU.apellidoPaterno,USU.apellidoMaterno,PLAN.nombrePlan,CARR.nombreCarrera,
				MAT.nombreMateria,SOLI.estado
				FROM usuarios AS USU 
				INNER JOIN planesDeEstudio AS PLAN ON PLAN.idPlanDeEstudio=USU.idPlanDeEstudio
				INNER JOIN carreras AS CARR ON CARR.idCarrera=PLAN.idCarrera
				INNER JOIN solicitudesExamenes AS SOLI ON USU.idUsuario=SOLI.idUsuario
				INNER JOIN materias AS MAT ON MAT.idMateria=SOLI.idMateria
				WHERE CARR.nombreCarrera =:carrera AND SOLI.estado = 1');

			$query->execute(['carrera' => $carrera]);

			while($row = $query->fetch()){
				$examen = new InfoExamen();

				$examen->numControl = $row['numControl'];
				$examen->nombre = $row['nombre'];
				$examen->apellidoPaterno = $row['apellidoPaterno'];
				$examen->apellidoMaterno = $row['apellidoMaterno'];
				$examen->nombrePlan = $row['nombrePlan'];
				$examen->nombreCarrera = $row['nombreCarrera'];
				$examen->nombreMateria = $row['nombreMateria'];
				$examen->estado = $row['estado'];

				array_push($examenes, $examen);
			}

			return $examenes;

		}catch(PDOException $e){
			return $e;
		}
	}
}

?>