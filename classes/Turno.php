<?php
    class Turno {
    	private $codigo;
    	private $descripcion;
		private $estatus;
		private $squema="programa";
		private $table="turno";
		private $sqlAll="SELECT * FROM ";
		
		public function __construct(){
			$this->sqlAll.=$this->squema;
			$this->sqlAll.=$this->table;
		}
		
		public function getDescripcion(){
			return $this->descripcion;
		}
		
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		
		public function getEstatus(){
			return $this->estatus;	
		}
		
		public function setEstatus($estatus){
			$this->estatus=$estatus;
		}
		
		public function setCodigo($codigo){
			$this->codigo=$codigo;
		}
		
		public function getCodigo(){
			return $this->codigo;
		}
    }
?>