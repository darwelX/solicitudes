<?php
interface Operaciones {
	public function insert();
	public function update();
	public function delete();
	public function find($id);
	public function findBy($condicion);
	
}

?>