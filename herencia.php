<?php

class Valores /* Clase padre */
{
		
	protected $valor1;
	protected $valor2;
	protected $resultado;

	public function cargar1($v1)
	{
		$this->valor1=$v1;
	}

	public function cargar2($v2)
	{
		$this->valor2=$v2;
	}

	public function imprimir()
	{
		return $this->resultado;
	}

}

/*+++++++++++++++++++++++++++++++++++*/

class Sumar extends Valores  /* ahora la clase sumar es hija de la clase valores */
{
	public function operar()
	{
		$this->resultado = $this->valor1 + $this->valor2;
		return $this->resultado;
	}
}

/*++++++++++++++++++++++++++++++++++++++*/
class Restar extends Valores
{
	
	public function operar()
	{
		$this->resultado = $this->valor1 - $this->valor2;
		return $this->resultado;
	}
}
/*++++++++++++++++++++++*/

class Multiplicar extends Valores
{
	
	public function operar()
	{
		$this->resultado = $this->valor1 * $this->valor2;
		return $this->resultado;
	}
}

$suma = new Sumar();

$suma->cargar1(25);
$suma->cargar2(25);
$suma->operar();
echo "la Suma de los valores es: ". $suma->imprimir();

$resta = new Restar();
$resta->cargar1(10);
$resta->cargar2(5);
$resta->operar();
echo "La Resta de los valores es: ". $resta->imprimir();

$multiplica = new Multiplicar();
$multiplica->cargar1(10);
$multiplica->cargar2(5000);
$multiplica->operar();
echo "La Multiplicacion de los valores es: ". $multiplica->imprimir();


?>
