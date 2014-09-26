<?php
	class Persona{
		private $rut;
		private $nombre;
		private $apellido;
		private $direccion;
		private $ciudad;
		
		function __construct() {
        
		}
		
		public function getRut(){
			return $this->rut;
		}
		
		public function getNombre(){
			return $this->nombre;
		}
		
		public function getApellido(){
			return $this->apellido;
		}
		
		public function getDireccion(){
			return $this->direccion;
		}
		
		public function getCiudad(){
			return $this->ciudad;
		}
		
		public function setRut($rut){
			$this->rut = $rut;
		}
		
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		
		public function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}
	
	}


?>