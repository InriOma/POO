<?php

//definiendo la clase

class persona
{
	//defniendo los atributos

	//privados - solo disponibles dentro de la clase - private or protected
	//publicos - se pueden llamar desde cualquier clase - public
	//protected $color_de_pelo;
	//public $tamaño;

	private $nombre=array();
	private $apellido=array();
	

	//creando metodos (en php se llaman funciones)

	public function iniciar($nom,$apellido)
	{
		$this->nombre=$nom;
		$this->apellido=$apellido;
	}

	public function listar_nombres()
	{
		//return count($this->nombre);
		return $this->nombre;
	}

	public function listar_apellidos()
	{
		return $this->apellido;
	}
}

//creacion de la instancia persona
$persona= new persona();


?>