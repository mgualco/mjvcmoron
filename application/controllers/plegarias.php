<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include();
class Plegarias extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('parser');
		$this->load->model('index','index');
		$this->load->model('plegaria','plegaria');
	}

	public function index()
	{
		$this->load->model('index','index');
		$datos= array(
			'menu' => $this->index->getMenu(),
			'plegarias' => $this->plegaria->getPlegarias(),
		);
        $this->parser->parse('plegarias',$datos);
	}

	public function cargaPlegaria(){
		if(!empty($_POST)){
			parse_str($_POST['dataString']);
			$data = array(
				'de' => $nombreDe,
				'para' => $nombrePara,
				'motivo' => $motivo,
				'fechaDesde' => date('Y-m-d'),
				'fechaHasta' => $this->plegaria->getFechaCierre()[0]['fechaCierre'],
			);
			$fb = new Facebook\Facebook;
			$helper = $fb->getRedirectLoginHelper();

			if($this->plegaria->cargaPlegaria($data)){
				header('Content-Type: application/json');
				echo json_encode(true);
			}else{
				header('Content-Type: application/json');
				echo json_encode(false);
			}
		}else{
			$datos= array(
				'menu' => $this->index->getMenu(),
			);
			$this->parser->parse('formCargaPlegaria',$datos);
		}
		
	}

	public function listarPlegarias(){
		$listaPLegarias = array(
			'menu' => $this->index->getMenu(),
			'plegarias' => $this->plegaria->getPlegarias(), 
		);
		$this->parser->parse('listadoPlegarias',$listaPLegarias);
	}

}