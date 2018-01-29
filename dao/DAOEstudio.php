<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 29/01/2018
 * Time: 22:18
 */
require_once '../conexion/classConexion.php';
require_once '../entities/Estudio.php';
class DAOEstudio {

	public function listadoEstudios(){
		$conexion = new Conexion();

		$objPDO = $conexion->getPDO();
		$ordenSql = "SELECT * FROM estudio ORDER BY NOMBRE";

		$statement = $objPDO->prepare($ordenSql);
		$listadoEstudios = array();

		try{
			$statement->execute();

			while ($fila = $statement->fetch(PDO::FETCH_ASSOC)){
				$estudio = new Estudio();

				$estudio->setEstudio($fila['ESTUDIO']);
				$estudio->setNombre($fila['NOMBRE']);

				$listadoEstudios[] = $estudio;
			}
		}catch (PDOException $e){
			$_SESSION['errormysql']=$statement->errorInfo();
			throw ($e);
		}finally{
			$statement = NULL;
			$objPDO = NULL;
		}

		return $listadoEstudios;
	}
}