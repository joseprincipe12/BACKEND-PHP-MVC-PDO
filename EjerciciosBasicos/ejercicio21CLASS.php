<?php
//*** DECLARAR LA CLASE ***//
class Rectangulo
{
	//Propiedades
	public $largo;
	public $ancho;

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