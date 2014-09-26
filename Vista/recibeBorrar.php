<?php
	include_once ('../Logica/Controlador.php');
	include_once ('../Logica/Persona.php');
	
	
	$rut = $_GET['rut'];
	
	$instancia = Controlador::getInstancia();
	$instancia->eliminarPersona($rut);
	
	
	
	
	
	
	echo " <script> 
    this.location.href='home.php' </script> ";

?>