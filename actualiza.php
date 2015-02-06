<?php
	session_start();
	require_once("funciones/funciones.php");
	sesion($_SESSION["usuario"],$_SESSION["contrasena"]);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="estilo/estilo.css"/>
</head>
<body>
<?php 
	$asiento=$_POST["asiento"];
	actualiza($asiento);
?>
</body>
</html>