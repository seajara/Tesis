<?php
	
	include_once('../Logica/Controlador.php');
	
	$rut = $_POST['rut'];
	$password =$_POST['password'];
	
	$instancia = Controlador::getInstancia();
	
	if($instancia->existeUsuario($rut, $password)){
		$persona = $instancia->obtenerUsuario($rut, $password);
		session_start();
		while($fila = mysql_fetch_array($persona)){
			$_SESSION['nombre'] = $fila['nombre'];
			$_SESSION['rut'] = $fila['rut'];
			
		}
		echo " <script> this.location.href='home.php' </script> ";
	}else{
		echo " <script> this.location.href='index.php?codigo=1' </script> ";
	}


?>