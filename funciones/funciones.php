<?php
	//session_start();
	function conexion($ip,$usuario,$contrasena,$bd){
		$conexion = new mysqli($ip,$usuario,$contrasena,$bd);
		$conexion->SET_CHARSET("utf8");
		if(mysqli_connect_error()){
		 	echo 'Error de conexión a la base de datos';
		}else{
			// echo "SI";
			return $conexion;
		}
	}
	function consulta($consulta,$conexion){
		// Recibe: un string con el SQL y la conexion
		// Devuelve: un resultset
		// echo "Entrada funcion consulta";
		$resultado = $conexion->query($consulta);
		return $resultado;
	}
	function cantdatos($resconsult){
		// Recibe un resultset
		// Devuelve: nuemero de filas del resultset
		//echo "Entrada funcion cantdatos";
		$respuesta = $resconsult->num_rows;
		return $respuesta;
	}
	function sesion($usuario,$contra){
		$conexion=conexion('192.168.31.3','root','root','autobuses');
		$orden="SELECT usuario FROM usuarios WHERE usuario='".$usuario."'AND contra='".$contra."'";
		$resultado = consulta($orden,$conexion);
		$estamos = cantdatos($resultado);
		$estamos;
		if($estamos==0){
			header("refresh:0;url=index.php");
		}else{
			$_SESSION["usuario"]=$usuario;
			$_SESSION["contrasena"]=$contra;
		}
	}	
	function actualiza($asiento){
		$conexion=conexion('192.168.31.3','root','root','autobuses');
		$orden="SELECT ocupado FROM autobus WHERE asiento=".$asiento;
		$resultado = consulta($orden,$conexion);
		$registro = $resultado->fetch_array();
		if($registro[0]==0){
			$orden="UPDATE autobus SET ocupado=1,usuario='".$_SESSION["usuario"]."',cuando=now() WHERE asiento=".$asiento;
		}
		if($registro[0]==1){ 
			$orden="UPDATE autobus SET ocupado=0,usuario=null,cuando=null WHERE asiento=".$asiento;
		}
		consulta($orden,$conexion);
		$conexion->close();
	}
	function estado(){
		echo "<form name=datos>";
		$conexion=conexion('192.168.31.3','root','root','autobuses');
		$orden="UPDATE autobus SET ocupado=0,usuario=null,cuando=null where now()-cuando>120 AND esta=0";
		consulta($orden,$conexion);
		$resultset=consulta('SELECT asiento,ocupado,usuario FROM autobus',$conexion);
		while($registro = $resultset->fetch_array()){
		if($registro[1]==2){
			echo '<img id=libre src=libre.png>';
		}
		if($registro[1]==0){
			echo "<img id=libre src=libre.png onClick=enviar(".$registro[0].")>";
		}		
		if($registro[1]==1 && $registro[2]==$_SESSION["usuario"]){
			echo "<img id=mio src=mio.png onClick=enviar(".$registro[0].")>";
		}
		if($registro[1]==1 && $registro[2]!=$_SESSION["usuario"]) {
			echo "<img id=ocupadete src=ocupado.png>";
		}
			}
		$conexion->close();
		echo "</form>";
	}
	//require_once("funciones/funciones.php");
?>
