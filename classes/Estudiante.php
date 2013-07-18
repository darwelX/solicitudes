<?php
    class Estudiante {
    	private $cedula;
		private $primer_apellido;
		private $segundo_apellido;
		private $primer_nombre;
		private $segundo_nombre;
		private $telefono_habitacion;
		private $telefono_celular;
		private $telefono_oficina;
		private $correo;
		private $turno;
		public $carrera;
		public $sede;
		
		public function __construct(){
			
		}
		
		public function setTurno($turno){
			$this->turno=$turno;	
		}
		
		public function getTurno(){
			return $this->turno;	
		}
		
		public function getCorreo(){
			return $this->correo;	
		}
		
		public function setCorreo($correo){
			$this->correo=$correo;
		}
		
		public function setTelefonoOficina($telefono){
			$this->telefono_oficina=$telefono;	
		}
		
		public function getTelefonoOficina(){
			return $this->telefono_oficina;	
		}
		
		public function setTelefonoCelular($telefono){
			$this->telefono_celular=$telefono;	
		}
		
		public function getTelefonoCelular(){
			return $this->telefono_celular;
		}
		
		public function setTelefonoHabitacion($telefono){
				$this->telefono_habitacion=$telefono;
		}
		
		public function getTelefonoHabitacion(){
			return $this->telefono_habitacion;	
		}
		
		public function getSegundoApellido(){
			return $this->segundo_apellido;	
		}
		
		public function setSegundoApellido($segundo_apellido){
			$this->segundo_apellido=$segundo_apellido;	
		}
		
		public function setPrimerApellido($primer_apellido){
			$this->primer_apellido=$primer_apellido;	
		}
		
		public function getPrimerApellido(){
			return $this->primer_apellido;	
		}
		
		public function getSegundoNombre(){
			return $this->segundo_nombre;	
		}
		
		public function setSegundoNombre($segundo_nombre){
			$this->segundo_nombre=$segundo_nombre;
		}
		
		public function setPrimerNombre($primer_nombre){
			$this->primer_nombre=$primer_nombre;
		}
		
		public function getPrimerNombre(){
			return $this->primer_nombre;	
		}
		
		public function setCedula($cedula){
			$this->cedula=$cedula;
		}
		
		public function getCedula(){
			return $this->cedula;
		}
    }
?>