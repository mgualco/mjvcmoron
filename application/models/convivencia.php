<?php

class Convivencia extends MY_Model{

	public function guardarInscripcion($datos){
		try{
			$this->db->insert('convivencia',$datos);
			return $this->db->insert_id();
		}catch(Exception $ex){
			//devolver señal acorde
			return false;
		}
		
	}

}