<?php

class Comision extends MY_Model{

	public function getImagenes(){
		$sql = "SELECT a.nombre, a.descripcion, a.pathImgReduced, a.pathImgOriginal
				FROM imagenabout a 
				WHERE imgInView = 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getComisiones(){
		$sql = "SELECT c.nombre, c.nexo, c.coordinadores, c.integrantes, c.pathImagen, c.imgLink, c.imgLink2, c.alias, c.aliaslink2
				FROM comision c 
				WHERE c.inView = 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

}