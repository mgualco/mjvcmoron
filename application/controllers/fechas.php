<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fechas extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('parser');
	}

	public function index()
	{
		$this->load->model('index','index');
		$datos= array(
			'menu' => $this->index->getMenu(),
		);

        $this->parser->parse('fechas_importantes',$datos);
		
	}
}