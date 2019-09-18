<?php
include_once 'models/obj/infoExamenes.php';

class AlumnosModel extends Model{

	function __construct(){
		parent::__construct();
	}

	function insertSolicitudExamen($datos){

		try{

			$query = $this->db->connect()->prepare('INSERT INTO solicitudesExamenes(estado,idUsuario,idMateria) VALUES(:estado,:idUsuario,:idMateria)');

			$query->execute(['estado' => $datos['estado'],
							 'idUsuario' => $datos['idUsuario'],
							 'idMateria' => $datos['idMateria']]);

			return true;

		}catch(PDOException $e){
			return $e;
		}
	}

	function getAllExamenesById($id){

		$examenesSolicitados = [];

		try{

			$query = $this->db->connect()->prepare('SELECT USU.idUsuario,USU.numControl,USU.nombre,USU.apellidoPaterno,USU.apellidoMaterno,PLAN.nombrePlan,CARR.nombreCarrera,
				MAT.nombreMateria,SOLI.estado
				FROM usuarios AS USU 
				INNER JOIN planesDeEstudio AS PLAN ON PLAN.idPlanDeEstudio=USU.idPlanDeEstudio
				INNER JOIN carreras AS CARR ON CARR.idCarrera=PLAN.idCarrera
				INNER JOIN solicitudesExamenes AS SOLI ON USU.idUsuario=SOLI.idUsuario
				INNER JOIN materias AS MAT ON MAT.idMateria=SOLI.idMateria
				WHERE USU.idUsuario =:id');

			$query->execute(['id' => $id]);

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

				array_push($examenesSolicitados, $examen);
			}

			

			return $examenesSolicitados;

		}catch(PDOException $e){
			return $e;
		}

	}

	function solicitudesRealizadas($id){

		try{

			$query = $this->db->connect()->prepare('SELECT COUNT(USU.idUsuario)
				FROM usuarios AS USU 
				INNER JOIN planesDeEstudio AS PLAN ON PLAN.idPlanDeEstudio=USU.idPlanDeEstudio
				INNER JOIN carreras AS CARR ON CARR.idCarrera=PLAN.idCarrera
				INNER JOIN solicitudesExamenes AS SOLI ON USU.idUsuario=SOLI.idUsuario
				INNER JOIN materias AS MAT ON MAT.idMateria=SOLI.idMateria
				WHERE USU.idUsuario =:id');

			$query->execute(['id' => $id]);

			return $query->fetch()[0];

		}catch(PDOException $e){

		}

	}
}

?>