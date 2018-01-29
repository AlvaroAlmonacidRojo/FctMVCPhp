<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 29/01/2018
 * Time: 22:06
 */

class Empresa {

	private $nCon;
	private $fechaC;
	private $nombEmpresa;
	private $dirEmpresa;
	private $municipioEmpresa;
	private $provinciaEmpresa;
	private $tlfEmpresa;
	private $faxEmpresa;
	private $nifEmpresa;
	private $codPostal;

	/**
	 * @return mixed
	 */
	public function getNCon() {
		return $this->nCon;
	}

	/**
	 * @param mixed $nCon
	 */
	public function setNCon( $nCon ): void {
		$this->nCon = $nCon;
	}

	/**
	 * @return mixed
	 */
	public function getFechaC() {
		return $this->fechaC;
	}

	/**
	 * @param mixed $fechaC
	 */
	public function setFechaC( $fechaC ): void {
		$this->fechaC = $fechaC;
	}

	/**
	 * @return mixed
	 */
	public function getNombEmpresa() {
		return $this->nombEmpresa;
	}

	/**
	 * @param mixed $nombEmpresa
	 */
	public function setNombEmpresa( $nombEmpresa ): void {
		$this->nombEmpresa = $nombEmpresa;
	}

	/**
	 * @return mixed
	 */
	public function getDirEmpresa() {
		return $this->dirEmpresa;
	}

	/**
	 * @param mixed $dirEmpresa
	 */
	public function setDirEmpresa( $dirEmpresa ): void {
		$this->dirEmpresa = $dirEmpresa;
	}

	/**
	 * @return mixed
	 */
	public function getMunicipioEmpresa() {
		return $this->municipioEmpresa;
	}

	/**
	 * @param mixed $municipioEmpresa
	 */
	public function setMunicipioEmpresa( $municipioEmpresa ): void {
		$this->municipioEmpresa = $municipioEmpresa;
	}

	/**
	 * @return mixed
	 */
	public function getProvinciaEmpresa() {
		return $this->provinciaEmpresa;
	}

	/**
	 * @param mixed $provinciaEmpresa
	 */
	public function setProvinciaEmpresa( $provinciaEmpresa ): void {
		$this->provinciaEmpresa = $provinciaEmpresa;
	}

	/**
	 * @return mixed
	 */
	public function getTlfEmpresa() {
		return $this->tlfEmpresa;
	}

	/**
	 * @param mixed $tlfEmpresa
	 */
	public function setTlfEmpresa( $tlfEmpresa ): void {
		$this->tlfEmpresa = $tlfEmpresa;
	}

	/**
	 * @return mixed
	 */
	public function getFaxEmpresa() {
		return $this->faxEmpresa;
	}

	/**
	 * @param mixed $faxEmpresa
	 */
	public function setFaxEmpresa( $faxEmpresa ): void {
		$this->faxEmpresa = $faxEmpresa;
	}

	/**
	 * @return mixed
	 */
	public function getNifEmpresa() {
		return $this->nifEmpresa;
	}

	/**
	 * @param mixed $nifEmpresa
	 */
	public function setNifEmpresa( $nifEmpresa ): void {
		$this->nifEmpresa = $nifEmpresa;
	}

	/**
	 * @return mixed
	 */
	public function getCodPostal() {
		return $this->codPostal;
	}

	/**
	 * @param mixed $codPostal
	 */
	public function setCodPostal( $codPostal ): void {
		$this->codPostal = $codPostal;
	}


}