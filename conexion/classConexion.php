<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 29/01/2018
 * Time: 19:08
 */

class Conexion {

	public function getPDO(){
		$usuario='root';
		$password='';

		try {
			$pdo = new PDO( 'mysql:host=localhost;dbname=fct', $usuario, $password, array( PDO::ATTR_PERSISTENT => true ) );
			$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			return $pdo;
		}catch (PDOException $e){
			$_SESSION['errorconexion']="dladj";
			throw $e;
		}

	}


}
?>