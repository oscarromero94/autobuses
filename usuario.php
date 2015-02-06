<?php
	session_start();
	require_once("funciones/funciones.php");
	sesion($_POST["usuario"],$_POST["contrasena"]);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Usuarios-Autobuses</title>
	<script src="control.js"></script>
	<link rel="stylesheet" href="estilo/estilo.css"/>
	<header id="cabezeraUsuario">
	<h1 id="ssss">Autobuses AJAX</h1>
		<ul>
			<li><a href="#">Confirmar compra</a></li>
			<li><a href="#">Configuracion</a></li>
			<li><a href="index.php">Cerrar sesion</a></li>
		</ul>
	</header>
</head>
<body id="user">
	
	<h1>Esta es la situación actual de nuestro autobus</h1>
	<section id="situacion">
		
	</section>
</body>
</html>