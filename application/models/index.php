<?php

class index extends MY_Model {

	public function getMenu(){
		$sql = "SELECT m.texto,m.url
				FROM menu m 
				WHERE inView = 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getImagenesSlider(){
		$sql = "SELECT islider.nombre
				FROM imagen_slider islider 
				WHERE inView = 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getFechasCalendario(){
		$sql = "SELECT c.idFecha,c.titulo,c.inicio,c.fin,c.path
				FROM calendario c
				WHERE inView = 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	} 
}

?>