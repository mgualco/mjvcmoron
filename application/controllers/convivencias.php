<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convivencias extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('parser');
		$this->load->model('convivencia','convivencia');
	}

	public function procesarInscripcion(){
		$this->load->model('index','index');
		$datos= array(
			'menu' => $this->index->getMenu(),
		);
		if(!empty($_POST)){
			$apyn = filter_var($_POST['apyn'], FILTER_SANITIZE_STRING);
			$jornadista = $_POST['jornadista'];
			if(!empty($_POST['jornada'])){
				$jornada = filter_var($_POST['jornada'], FILTER_SANITIZE_NUMBER_INT);	
			}else{
				$jornada = 0;
			}
			if(!empty($_POST['lugar'])){
				$lugar = filter_var($_POST['lugar'], FILTER_SANITIZE_STRING);	
			}else{
				$lugar = NULL;
			}
			if(!empty($_POST['comentarios'])){
				$comentarios = filter_var($_POST['comentarios'], FILTER_SANITIZE_STRING);	
			}else{
				$comentarios = NULL;
			}
			$telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT);
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			$inscripcion = array(
				'apyn' => $apyn,
				'jornadista' => $jornadista,
				'lugar' => $lugar,
				'jornada' => $jornada,
				'telefono' => $telefono,
				'email' => $email,
				'comentarios' => $comentarios,
			);
			
			$inscripcion = $this->convivencia->guardarInscripcion($inscripcion);
			if($inscripcion){
				//cargar vista con mensaje de exito
				$this->parser->parse('cargaExitosa',$datos);
			}else{
				$this->parser->parse('cargaErronea',$datos);
			}
			
		}
	}
}
