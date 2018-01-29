<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 29/01/2018
 * Time: 22:27
 */
require_once '../dao/DAOEstudio.php';
session_start();

$op = $_REQUEST['op'];

switch ($op){
	case "inicio":
		$daoEstudio = new DAOEstudio();

		try{
			$listadoEstudios = $daoEstudio->listadoEstudios();
			$_SESSION['listadoEstudios'] = $listadoEstudios;
			header('Location: home.php');

		}catch (PDOException $e){
			header('Location: error.php');
		}
		break;
}
?>