<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jornadas extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('parser'); 
		$this->load->model('jornada','jornadas');
		$this->load->model('index','index');
	}

	public function index()
	{
		$datos = array(
            'jornadas' => $this->jornadas->getImagenes(),
            'menu' => $this->index->getMenu(),
        );
        if(empty($datos['jornadas'])){
            $datos['jornadas'] = false;
            $this->load->view('jornadas');
        }
        $this->parser->parse('jornadas',$datos);
	}

	public function cargaFicha(){
		$datos = array(
            'menu' => $this->index->getMenu(),
        );
        //$this->parser->parse('formFichaMedica',$datos);
        $this->parser->parse('formInscripcionConvivencia',$datos);
	}
}
