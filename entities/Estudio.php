<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 29/01/2018
 * Time: 22:11
 */

class Estudio {

	private $estudio;
	private $nombre;

	/**
	 * @return mixed
	 */
	public function getEstudio() {
		return $this->estudio;
	}

	/**
	 * @param mixed $estudio
	 */
	public function setEstudio( $estudio ): void {
		$this->estudio = $estudio;
	}

	/**
	 * @return mixed
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * @param mixed $nombre
	 */
	public function setNombre( $nombre ): void {
		$this->nombre = $nombre;
	}




}