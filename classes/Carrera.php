<?php
class Carrera {
	
	private $schema="programa";
	private $table="programas";
	private $id;
	private $nombre;
	private $status;
	
	public function setStatus($status){
		$this->status=$status;	
	}
	
	public function getStatus(){
		return $this->status;
	}
	
	public function setNombre($nombre){
		$this->nombre=$nombre;	
	}
	
	public function getNombre(){
		return $this->nombre;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		$this->id=$id;
	}
}
?>