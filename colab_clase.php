<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Clases y más Clases</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clases">
    <meta name="author" content="Inri">

	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>

<?php 


class Cabecera
{
	
	private $texto;
	
	public function __construct($titulo)
	{
		$this->texto=$titulo;
	}

	public function graficar()
	{
		echo "<h1>". $this->texto."</h1>";
	}

}

/*+++++++++++++++++++++++++++++*/

class Cuerpo
{
	
	private $lineas=array();

	public function iniciar_Linea($li)
	{
		$this->lineas[]=$li;

	}

	public function graficar()
	{
		for($i=0; $i < sizeof($this->lineas); $i++)
		{
			echo "<p>".$this->lineas[$i]."</p>";

		}
	}

}

/*********************/

class Footer
{
	private $texto;
	
	public function __construct($cadena)
	{
		$this->texto=$cadena;
	}

	public function graficar()
	{
		echo "<hr />";
		echo $this->texto;
	}
}


/* Implementando la colaboracion de clases y metodos*/
class Pagina
{
	private $cabecera;
	private $body;
	private $pie;

	public function __construct($texto_cabecera,$texto_pie)
	{
		$this->cabecera = new Cabecera($texto_cabecera);
		$this->body = new Cuerpo();
		$this->pie = new Footer($texto_pie);
	}

	public function crearCuerpo($texto)
	{
		$this->body->iniciar_Linea($texto);
	}

	public function vista()
	{
		$this->cabecera->graficar();
		$this->body->graficar();
		$this->pie->graficar();
	}
}

/***********++++++++++++++++++ Vistas ++++++++++*/

$page = new Pagina("Ejemplo de colaboracion de Clases","Inri");
$page->crearCuerpo("Esta es una linea 1");
$page->crearCuerpo("Esta es una linea 2");
$page->crearCuerpo("Esta es una linea 3");
$page->crearCuerpo("Esta es una linea 4");
$page->crearCuerpo("Esta es una linea 5");
$page->vista();


?>


</body>
</html>