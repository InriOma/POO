<?php
require_once('class.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Clases y más Clases</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">ç
    <meta name="description" content="Clases">
    <meta name="author" content="Inri">

	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
</head>
<body>

<section>

	<input type="text" id="nombre" placeholder="Nombre" />
	<br />
	<input type="text" id="apellido" placeholder="Apellidos" />

	<br />

</section>

<?php 

$persona->iniciar("Inri","Zurita"); 
echo $persona->listar_nombres()." ";
echo $persona->listar_apellidos();


?>


</body>
</html>