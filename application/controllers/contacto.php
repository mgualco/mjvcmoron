<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends MY_Controller {

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
		$this->load->model('index','index');
			$datos= array(
				'menu' => $this->index->getMenu(),
			);
		if(empty($_POST)){
			if(empty($datos['menu'])){
	            $datos['menu'] = false;
	            $this->load->view('index');
	        }
			$this->parser->parse('contacto',$datos);
		}else{

			if(!empty($_POST)){
				
				$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
				if(!empty($telefono)){
					$telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT);	
				}
				$asunto = "Consulta";
				$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
				$consulta = $_POST['mensaje'];
				$rn = "\r\n";
				//mail de notificacion al usuario
				try{

					//mail al dojo con la consulta del usuario
						/*
						$leyenda = 'Hemos recibido su consulta y le estaremos respondiendo a la brevedad.';
						$mail->From = 'mail@aikidoshantiprema.com.ar';
						$mail->FromName = 'Dojo Shantiprema';	
						$mail->AddAddress($email,"Dojo Shantiprema");
						$mail->Subject = "Contacto de la web Shantiprema";
						$mensaje = file_get_contents('emailTemplateUsuario.html');
						$busqueda = array("mensaje");
						$reemplazos = str_replace($busqueda, $leyenda, $mensaje);
						$body  = $reemplazos;
						$mail->isHTML(true);
						$mail->MsgHTML($body);
						$mail->CharSet="utf-8";
						$res = $mail->send();
					*/
						$para = 'mjg_099@ymail.com';
						$titulo = 'Mail de contacto';
						$mensaje = "
							<html>
								<head>
								  <title>".$asunto."</title>
								</head>
								<body>
								  <p>".$consulta."</p><br/><br/>
								  <p>Correo de contacto".$email."</p>
								</body>
							</html>
						";
						$cabeceras = 'From: Mail web mjvcmoron  <no-reply@mjvcmoron.com.ar>' . $rn;
						$cabeceras .= 'MIME-Version: 1.0' . "\r\n";
						$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$res = mail($para, $titulo, $mensaje, $cabeceras);
						//$res = true;
						if($res == true){
							$dato = array(
								'mensajeExito' => 'Consulta enviada exitosamente!',
								'menu' => $this->index->getMenu(),
							);
							$this->parser->parse('contacto',$dato);
						}else{
							$dato = array(
								'mensajeFallido' => 'Su consulta no pudo ser procesada. Intentelo nuevamente en unos instantes.',
								'menu' => $this->index->getMenu(),
							);
							$this->parser->parse('contacto',$dato);
						}
						/*
						$mail->From = $email;
						$mail->FromName = $nombre;	
						$mail->AddAddress($casillaTest,'');
						$mail->Subject = $asunto;
						$busqueda = array("mensaje");
						$template  = file_get_contents('<?php echo base_url()?>mail/emailTemplate.html');
						$reemplazos = str_replace($busqueda, $consulta, $template);
						$body  = $reemplazos;
						$mail->isHTML(true);
						$mail->MsgHTML($body);
						$mail->CharSet="utf-8";
						$res = $mail->send();
						*/
					}catch(Exception $ex){
						header('Location: ../genericErrorPage.php');
						//echo "Error en el envio de correo".$mail->ErrorInfo;
					}
				}
		}
	}
}