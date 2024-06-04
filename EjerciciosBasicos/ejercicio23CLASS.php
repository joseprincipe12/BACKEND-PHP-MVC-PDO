<?php
class Triangulo
{
	//Propiedades 
	public $a;
	public $b;
	public $c;

	//Metodos
	function getExiste()
	{
		/*
			Teorema Existencia:
			|b-c|<a<b+c
			|a-c|<b<a+c
			|b-a|<c<b+a
		*/
		$condicion_1 = (abs($this->b-$this->c)<$this->a) && ($this->a<($this->b+$this->c));
		$condicion_2 = (abs($this->a-$this->c)<$this->b) && ($this->b<($this->a+$this->c));
		$condicion_3 = (abs($this->b-$this->a)<$this->c) && ($this->c<($this->b+$this->a));

		$existe = $condicion_1 && $condicion_2 && $condicion_3;

		return $existe; // true | false
	}

	function getPerimetro()
	{
		$perimetro = 0;
		if($this->getExiste())
		{
			$perimetro = $this->a + $this->b + $this->c;
		}else{
			$perimetro = 0;
		}

		return $perimetro;
	}
	function getArea()
	{
		$area = 0;
		if($this->getExiste())
		{
			$p = $this->getPerimetro()/2;
			$area = sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
		}else
		{
			$area = 0.0;
		}

		return $area;
	}
	function getTipo()
	{
		$tipo = "";
		if($this->getExiste())
		{
			if(($this->a==$this->b)&&($this->b==$this->c)&&($this->a==$this->c))
			{
				$tipo = "Equilatero";
			}
			else if(($this->a==$this->b)||($this->b==$this->c)||($this->a==$this->c))
			{
				$tipo = "Isoceles";
			}
			else
			{
				$tipo = "Escaleno";
			}
		}else{
			$tipo = "No existe";
		}

		return $tipo;
	}

}
?>