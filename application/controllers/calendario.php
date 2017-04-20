<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendario extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('parser');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->load->model('index','index');
		$datos= array(
			'menu' => $this->index->getMenu(),
			'fechas' => $this->index->getFechasCalendario(),
		);

        $this->parser->parse('calendar',$datos);
		
	}

	public function getFile(){
		if(!empty($_GET)){
			/*
			ob_clean();
			$data = file_get_contents(base_url().'docs/jornada/'.$GET['path']);
			$name = "elementos";
			force_download($name, $data);
			*/
			$pathFileName = 'docs/jornada/'.$_GET['path'];
			$fileName =	substr($_GET['path'],0,(strlen($_GET['path'])-strlen(strrchr($_GET['path'],"."))));
			$file_extension_with_dot = strtolower(substr(strrchr($_GET['path'],"."),0));
			$file_extension_without_dot = strtolower(substr(strrchr($_GET['path'],"."),1));
			switch( $file_extension_without_dot )
			{
			  case "pdf": $ctype="application/pdf"; break;
			  case "exe": $ctype="application/octet-stream"; break;
			  case "zip": $ctype="application/zip"; break;
			  case "doc": $ctype="application/msword"; break;
			  case "xls": $ctype="application/vnd.ms-excel"; break;
			  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
			  case "gif": $ctype="image/gif"; break;
			  case "png": $ctype="image/png"; break;
			  case "jpeg":
			  case "jpg": $ctype="image/jpg"; break;
			  default: $ctype="application/force-download";
			}
			
			if (headers_sent()) throw new Exception('Headers sent.');
			while (ob_get_level() && ob_end_clean());
			if (ob_get_level()) throw new Exception('Buffering is still active.');

			header("Pragma: public"); // required
			header("Expires: 0");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header("Cache-Control: private",false); // required for certain browsers 
			header("Content-Type: $ctype");
			// change, added quotes to allow spaces in filenames, by Rajkumar Singh
			header("Content-Disposition: attachment; filename=\"".$fileName.".".$file_extension_with_dot."\";");
			header("Content-Transfer-Encoding: binary");
			header("Content-Length: ".filesize($pathFileName));
			readfile(base_url()."$pathFileName");
			exit();
		}
		
	}
}