<?php

class Contacto extends MY_Model{

	public function saveInscription($data){
		/*
		$sql = "INSERT INTO convifest(apellido,nombre,localidad,email,telefono,jornada,anioJornada,comision,participacionJornadaPrevia,anio,fechaInscripcion) values
			(?,?,?,?,?,?,?,?,?,?,?)";*/
		$query = $this->db->insert("convifest",$data);
		$result = $this->db->insert_id();
		return $result;
	}

}