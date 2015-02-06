<?php
	session_start();
	$_SESSION["usuario"]="patata";
	$_SESSION["contrasena"]="patata";
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Autobuses AJAX</title>
	<link rel="stylesheet" href="estilo/estilo.css">
	<link rel="icon" type="image/png" href="bus.png" />
	<script src="control.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body id="principal">
	<section id="sesion">
		<form action="usuario.php" method="POST" accept-charset="utf-8">
			<strong>Usuario</strong> <br>
     		<input type="text" name="usuario" class="campo" required><br>
    		<strong>Contrase&ntilde;a</strong> <br>
      		<input type="password" name="contrasena" class="campo" required><br>
     		<input type="submit" name="Submit" class="boton" value="Enviar">
		</form>	
	</section>
</body>
</html>