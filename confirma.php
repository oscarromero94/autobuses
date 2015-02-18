<?php
	session_start();
	require_once("funciones/funciones.php");
	sesion($_POST["usuario"],$_POST["contrasena"]);
	$conexion=conexion('192.168.31.3','root','root','autobuses');
	$orden="UPDATE autobus SET esta=1 WHERE usuario='".$_SESSION["usuario"]."'";
	$resultado = consulta($orden,$conexion);
	if($_SESSION["usuario"]==""){
		echo "no tenemos ningun usuario";
	}
	header("refresh:0;url=usuario.php");
?>