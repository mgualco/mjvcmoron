<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comisiones extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('parser');
		$this->load->model('comision','comision');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('jornada','jornadas');
		$this->load->model('index','index');
		$this->load->model('comision','comision');
		$datos= array(
			//'imagenes' => $this->comision->getImagenes(),
			'menu' => $this->index->getMenu(),
			//'jornadas' => $this->jornadas->getImagenes(),
			'comisiones' => $this->comision->getComisiones(),
		);
		//var_dump($datos);exit;
		if(empty($datos['menu'])){
            $datos['menu'] = false;
            $this->load->view('comisiones');
        }
        $this->parser->parse('comisiones',$datos);
		
	}
}