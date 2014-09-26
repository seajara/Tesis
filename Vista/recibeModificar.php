<?php
	include_once ('../Logica/Controlador.php');
	include_once ('../Logica/Persona.php');
	
	
	$rut = $_POST['rut'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$direccion = $_POST['direccion'];
	$ciudad = $_POST['ciudad'];
	
	$instancia = Controlador::getInstancia();
	
	$persona = new Persona();
	
	$persona->setRut($rut);
	$persona->setNombre($nombre);
	$persona->setApellido($apellido);
	$persona->setDireccion($direccion);
	$persona->setCiudad($ciudad);
	
	$instancia->actualizarPersona($persona);
	
	
	
		echo " <script> 
		this.location.href='home.php' </script> ";
	
	
	

?>