<?php

class Jornada extends MY_Model{

	public function getImagenes(){
		$sql = "SELECT j.descripcion, j.pathImgReduced, j.pathImgOriginal
				FROM jornadas j
				WHERE j.imgInView = 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

}