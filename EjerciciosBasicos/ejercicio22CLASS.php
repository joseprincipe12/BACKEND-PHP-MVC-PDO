<?php
//*** DECLARAR LA CLASE ***//
class Circulo
{
	//Propiedades
	public $radio;

	//Metodos
	function getDiametro()
	{
		return round(2*$this->radio,2);
	}
	function getPerimetro()
	{
		return round(($this->getDiametro($this->radio) * pi()),2);
	}
	function getArea()
	{
		return round((pi() * pow($this->radio,2)),2);
	}
}
?>