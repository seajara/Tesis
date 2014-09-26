<?php
	include_once '../Persistencia/PersonaDAO.php';
	
	class Controlador{
		private static $miInstancia = NULL;
		
		private $personaDAO;
		
		private function Controlador(){
			$this->personaDAO = new PersonaDAO();
		
		}
		
		public static function  getInstancia(){
			if (self::$miInstancia == NULL) {
			  self::$miInstancia = new Controlador();
		   }
		   return self::$miInstancia;
		}
		
		public function guardarPersona($persona){
			$this->personaDAO->guardarPersonaDAO($persona);
		
		}
		
		public function listarPersonas(){
			return $this->personaDAO->listarPersonasDAO();
		}
		
		public function listarPersonasPorSeleccion($seleccion, $limit, $offset){
			return $this->personaDAO->listarPersonasPorSeleccionDAO($seleccion, $limit, $offset);
		
		}
		
		public function obtenerPersonaPorRut($rut){
			return $this->personaDAO->obtenerPersonaPorRutDAO($rut);
		}
		
		public function existePersona($rut){
			return $this->personaDAO->existePersonaDAO($rut);
		}
		
		public function actualizarPersona($persona){
			$this->personaDAO->actualizarPersonaDAO($persona);
		}
		
		public function eliminarPersona($rut){
			$this->personaDAO->eliminarPersonaDAO($rut);
		}
		
		public function existeUsuario($rut, $password){
			return $this->personaDAO->existeUsuarioDAO($rut, $password);
		
		}
		
		public function obtenerUsuario($rut, $password){
			return $this->personaDAO->obtenerUsuarioDAO($rut, $password);
		}
	
	}

?>