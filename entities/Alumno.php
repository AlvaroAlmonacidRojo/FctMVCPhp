<?php
/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 29/01/2018
 * Time: 19:14
 */

class Alumno {

	private $dniAlumno;
	private $apellidosNombreAlumno;
	private $codEmpresa;
	private $dniTutorGrupo;
	private $cursoAcademico;
	private $grupoUnidad;
	private $dniTutorEmp;

	/**
	 * @return mixed
	 */
	public function getDniAlumno() {
		return $this->dniAlumno;
	}

	/**
	 * @param mixed $dniAlumno
	 */
	public function setDniAlumno( $dniAlumno ): void {
		$this->dniAlumno = $dniAlumno;
	}

	/**
	 * @return mixed
	 */
	public function getApellidosNombreAlumno() {
		return $this->apellidosNombreAlumno;
	}

	/**
	 * @param mixed $apellidosNombreAlumno
	 */
	public function setApellidosNombreAlumno( $apellidosNombreAlumno ): void {
		$this->apellidosNombreAlumno = $apellidosNombreAlumno;
	}

	/**
	 * @return mixed
	 */
	public function getCodEmpresa() {
		return $this->codEmpresa;
	}

	/**
	 * @param mixed $codEmpresa
	 */
	public function setCodEmpresa( $codEmpresa ): void {
		$this->codEmpresa = $codEmpresa;
	}

	/**
	 * @return mixed
	 */
	public function getDniTutorGrupo() {
		return $this->dniTutorGrupo;
	}

	/**
	 * @param mixed $dniTutorGrupo
	 */
	public function setDniTutorGrupo( $dniTutorGrupo ): void {
		$this->dniTutorGrupo = $dniTutorGrupo;
	}

	/**
	 * @return mixed
	 */
	public function getCursoAcademico() {
		return $this->cursoAcademico;
	}

	/**
	 * @param mixed $cursoAcademico
	 */
	public function setCursoAcademico( $cursoAcademico ): void {
		$this->cursoAcademico = $cursoAcademico;
	}

	/**
	 * @return mixed
	 */
	public function getGrupoUnidad() {
		return $this->grupoUnidad;
	}

	/**
	 * @param mixed $grupoUnidad
	 */
	public function setGrupoUnidad( $grupoUnidad ): void {
		$this->grupoUnidad = $grupoUnidad;
	}

	/**
	 * @return mixed
	 */
	public function getDniTutorEmp() {
		return $this->dniTutorEmp;
	}

	/**
	 * @param mixed $dniTutorEmp
	 */
	public function setDniTutorEmp( $dniTutorEmp ): void {
		$this->dniTutorEmp = $dniTutorEmp;
	}





}