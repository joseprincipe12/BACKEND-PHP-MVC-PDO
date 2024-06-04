<?php
//*** DECLARAR LA CLASE ***//
class Venta
{
	//Propiedades
	public $cantidad;
	public $precio;

	//Metodos
	function getTotal()
	{
		$total = $this->cantidad * $this->precio;
		return $total;
	}

	function getIgv()
	{
		$igv = 0.18 * $this->getTotal();
		return $igv;
	}

	function getTotalIgv()
	{
		$totalIgv = $this->getTotal() + $this->getIgv();
		return $totalIgv;
	}			
}

?>