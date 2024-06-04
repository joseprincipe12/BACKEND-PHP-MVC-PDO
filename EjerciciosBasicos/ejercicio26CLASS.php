<?php
//*** DECLARAR LA CLASE ***//
class Venta
{
	//Propiedades
	private $cantidad;
	private $precio;

	//Constructor
	function __construct($cantidad_,$precio_)
	{
		$this->cantidad = $cantidad_;
		$this->precio = $precio_;
	}

	//Encapsular
	function getCantidad()
	{
		return $this->cantidad;
	}
	function setCantidad($valor)
	{
		$this->cantidad=$valor;
	}

	function getPrecio()
	{
		return $this->precio;
	}
	function setPrecio($valor)
	{
		$this->precio=$valor;
	}


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