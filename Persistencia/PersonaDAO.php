<?php
	include_once 'Conexion.php';
	include_once '../Logica/Persona.php';

	class PersonaDAO {
		
		private $conexion;
		
		public function PersonaDAO(){
				$this->conexion= new Conexion();
		}
		
		public function guardarPersonaDAO($persona){
			$link=$this->conexion->obtenerConexion();
			$consulta = "INSERT into persona (rut, nombre, apellido, direccion, ciudad)
				VALUES ('".$persona->getRut()."','".$persona->getNombre()."','".$persona->getApellido()."','".$persona->getDireccion()."','".$persona->getCiudad()."');";
			mysql_query($consulta,$link)or die("<script>alert('no inserto en la bd') </script>");
			mysql_close($link);
		
		}
		
		public function listarPersonasDAO(){
			$link=$this->conexion->obtenerConexion();
			$consulta = "SELECT * FROM persona;";
			$resultado = mysql_query($consulta,$link)or die("<script>alert('no se obtuvieron de la bd')</script>");
			mysql_close($link);
			return $resultado;
		
		
		}
		
		public function listarPersonasPorSeleccionDAO($seleccion, $limit, $offset){
			$link=$this->conexion->obtenerConexion();
			if(!isset($seleccion)){
				
				$vista = "CREATE OR REPLACE VIEW vista AS SELECT * FROM persona LIMIT $offset, $limit;";
				mysql_query($vista, $link);
				$consulta = "SELECT * FROM persona LIMIT $offset, $limit;";
				
			}else{
			
				switch($seleccion){
					case 1:	$consulta = "SELECT * FROM vista ORDER BY nombre ASC;";
					break;
					
					case 2:	$consulta = "SELECT * FROM vista ORDER BY apellido ASC;";
					break;
					
					case 3:	$consulta = "SELECT * FROM vista ORDER BY rut ASC;";
					break;
					
					case 4:	$consulta = "SELECT * FROM vista ORDER BY direccion ASC;";
					break;
					
					case 5:	$consulta = "SELECT * FROM vista ORDER BY ciudad ASC;";
					break;
				
				}
			}
			
			
			
			$resultado = mysql_query($consulta,$link)or die("<script>alert('no se obtuvieron de la bd')</script>");
			mysql_close($link);
			return $resultado;
		
		
		}
		
		public function obtenerPersonaPorRutDAO($rut){
			$link=$this->conexion->obtenerConexion();
			$consulta = "SELECT * FROM persona WHERE rut = '".$rut."' ;";
			$resultado = mysql_query($consulta,$link)or die("<script>alert('no se obtuvieron de la bd')</script>");
			mysql_close($link);
			return $resultado;
		
		}
		
		public function existePersonaDAO($rut){
			$link=$this->conexion->obtenerConexion();
			$consulta = "SELECT * FROM persona WHERE rut = '".$rut."' ;";
			$resultado = mysql_query($consulta,$link)or die("<script>alert('no se obtuvieron de la bd')</script>");
			mysql_close($link);
			$numero_filas = mysql_num_rows($resultado);
			if($numero_filas>0)
				return true;
			return false;
		}
		
		public function existeUsuarioDAO($rut, $password){
			$link=$this->conexion->obtenerConexion();
			$consulta = "SELECT * FROM persona WHERE rut = '".$rut."' AND password = '".$password."' ;";
			$resultado = mysql_query($consulta,$link)or die("<script>alert('no se obtuvieron de la bd')</script>");
			mysql_close($link);
			$numero_filas = mysql_num_rows($resultado);
			if($numero_filas>0)
				return true;
			return false;
		}
		
		public function obtenerUsuarioDAO($rut, $password){
			$link=$this->conexion->obtenerConexion();
			$consulta = "SELECT * FROM persona WHERE rut = '".$rut."' AND password = '".$password."' ;";
			$resultado = mysql_query($consulta,$link)or die("<script>alert('no se obtuvieron de la bd')</script>");
			mysql_close($link);
			return $resultado;
		}
		
		public function actualizarPersonaDAO($persona){
			$link=$this->conexion->obtenerConexion();
			$consulta = "UPDATE  persona SET nombre = '".$persona->getNombre()."' , apellido = '".$persona->getApellido()."', direccion = '".$persona->getDireccion()."', ciudad = '".$persona->getCiudad()."' WHERE rut='".$persona->getRut()."';";
			mysql_query($consulta,$link)or die("<script>alert('no inserto en la bd') </script>");
			mysql_close($link);
		}
		
		public function eliminarPersonaDAO($rut){
			$link=$this->conexion->obtenerConexion();
			$consulta = "DELETE FROM persona WHERE rut='".$rut."';";
			mysql_query($consulta,$link)or die("<script>alert('no eliminó en la bd')</script>");
			mysql_close($link);
		}
		
		
		
		
		
	}
?>