<?php
//*** DECLARAR LA CLASE ***//
class Rectangulo
{
	//Propiedades
	private $largo;
	private $ancho;

	//Constructor
	function __construct($largo_, $ancho_)
	{
		$this->largo = $largo_;
		$this->ancho = $ancho_;
	}

	//Encapsulado
	function getLargo()
	{
		return $this->largo;
	}
	function setLargo($valor)
	{
		$this->largo = $valor;
	}
	function getAncho()
	{
		return $this->ancho;
	}
	function setAncho($valor)
	{
		$this->ancho = $valor;
	}


	//Metodos
	function getPerimetro()
	{
		return (2 * ($this->largo + $this->ancho));
	}
	function getArea()
	{
		return ($this->largo*$this->ancho);
	}
	function getDiagonal()
	{
		return (sqrt(pow($this->largo,2)+pow($this->ancho,2)));
	}
}

?>