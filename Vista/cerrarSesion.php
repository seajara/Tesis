<?php
	session_start();
	if(!isset($_SESSION['nombre'])){
		header("Location: ../index.php");
		 
	}else{
		session_unset();
		session_destroy();
		
		header("Location: ../index.php");
	}
	


?>