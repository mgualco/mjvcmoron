<?php

class Plegaria extends MY_Model{

	public function getPlegarias(){
		$sql = "SELECT p.de, p.para, p.motivo, p.fechaDesde, p.fechaHasta
				FROM plegaria p 
				WHERE '".date('Y-m-d')."' <= p.fechaHasta";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function getFechaCierre(){
		$sql = "SELECT fp.fechaCierre
				FROM fechasplegarias fp 
				WHERE fp.vigente = 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	public function cargaPlegaria($datos){
		$this->db->insert('plegaria',$datos);
		$estado = $this->db->insert_id();
		return $estado;
	}

}