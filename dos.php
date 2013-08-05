<?php

class pagina
{
	private $titulo;
	private $posicion;


	public function __construct($tit,$pos)
	{
		$this->titulo=$tit;
		$this->posicion=$pos;
	}

	public function imprimir()
	{
		?>
			<div align="<?php echo $this->posicion; ?>"><?php echo $this->titulo; ?></div>
		<?php
	}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Probando Clases</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>

<?php 
$pa = new pagina("Probando Pagina Inri","center");
$pa->imprimir();

?>


</body>
</html>
