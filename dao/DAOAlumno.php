<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 29/01/2018
 * Time: 19:20
 */

require_once '../conexion/classConexion.php';
require_once '../entities/Alumno.php';
class DAOAlumno {

	public function listadoAlumnos(){
		$conexion = new Conexion();

		$objPDO = $conexion->getPDO();

		$ordenSql = "SELECT * FROM alumno";

		$statement = $objPDO->prepare($ordenSql);

		$listadoAlumnos= array();


		try{
			$statement->execute();

			while ($fila= $statement->fetch(PDO::FETCH_ASSOC)){
				$alumno = new Alumno();

				$alumno->setDniAlumno($fila['DNI_ALUMNO']);
				$alumno->setApellidosNombreAlumno($fila['APELLIDOS_NOMBRE_ALUMNO']);
				$alumno->setCodEmpresa($fila['COD_EMPRESA']);
				$alumno->setDniTutorGrupo($fila['DNI_TUTOR_GRUPO']);
				$alumno->setCursoAcademico($fila['CURSO_ACADEMICO']);
				$alumno->setGrupoUnidad($fila['GRUPO_UNIDAD']);
				$alumno->setDniTutorEmp($fila['DNI_TUTOR_EMP']);

				$listadoAlumnos[] = $alumno;
			}


		}catch (PDOException $e){
			$_SESSION['errormysql']=$statement->errorInfo();
			throw ($e);
		}finally{
			$statement=NULL;  // para cerrar la conexión usamos estas dos órdenes.
			$objPDO=NULL;
		}

		return $listadoAlumnos;
	}
}