<?php 
	class Controller_ordenes extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion");
			$this->load->model("mainpanel/Model_ordenes");
			$this->load->library('my_upload');
 			$this->load->library('my_phpmailer');
		}

		public function listar()
		{
	       	$data['current_section'] = 'ordenes';
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);
      		$this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="ordenes/index_view";

	        $ordenes = $this->Model_ordenes->getListaOrdenes();
	        $data["ordenes"] = $ordenes;
	      
	        $this->load->view("mainpanel/includes/template", $data);
	 

		}

		public function detalle($id)
		{
			$this->validacion->validacion_login();
			$data["current_section"] = 'ordenes';
			$data["lista_menu"]  = $this->load->view("mainpanel/includes/menu", $data, true);
			$data["cuerpo"] = "ordenes/detalle_view";
			$orden = $this->Model_ordenes->getOrden($id);
			$data["orden"] = $orden;
			$detalles = $this->Model_ordenes->getDetalleOrden($id);
			$data["detalles"] = $detalles;
			$this->load->view("mainpanel/includes/template", $data);
		}


		public function cotizada($id)
		{
			$this->validacion->validacion_login();
			$data["current_section"] = 'ordenes';
			$data["lista_menu"]  = $this->load->view("mainpanel/includes/menu", $data, true);
			$data["cuerpo"] = "ordenes/cotizada_view";
			$orden = $this->Model_ordenes->getOrden($id);
			$data["orden"] = $orden;
			$detalles = $this->Model_ordenes->getDetalleOrden($id);
			$data["detalles"] = $detalles;
			$this->load->view("mainpanel/includes/template", $data);
		}

		public function cotizar($id)
		{
			$this->validacion->validacion_login();
			$data["current_section"] = 'ordenes';
			$data["lista_menu"]  = $this->load->view("mainpanel/includes/menu", $data, true);
			$data["cuerpo"] = "ordenes/cotizar_view";
			$detalles = $this->Model_ordenes->getDetalleOrden($id);
			$data["detalles"] = $detalles;
			$this->load->view("mainpanel/includes/template", $data);
		}
   		
		/*public function enviar_cotizacion()
		{
			$this->validacion->validacion_login();
	       	$data['current_section'] 	= 'ordenes';
			$data["id_orden"] 			= $this->input->post('id_orden');
			$data["num_items"] 			= $this->input->post('num_items');
			$data["asunto"] 			= $this->input->post('asunto');
			$data["texto_correo"] 		= $this->input->post('texto');
			$data["pie"] 				= $this->input->post('pie');
			
			$ordenes = $this->Model_ordenes->getOrden($this->input->post('id_orden'));
			$data["ordenes"] = $ordenes;

			$dia = date('j');
            $mes = date('n');
            $agno = date('Y');
            $meses = array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
            $fecha_cotizacion = 'Lima '.$dia.' de '.$meses[$mes].' del '.$agno;		
			
			$stylos_cabecera = 'style="background:#2657a3; color:#fff; font-weight:700; font-size:12px;"';
			$stylos_celda = 'style="background:#eee; color:#000; font-weight:500; border:1px solid #2657a3; font-size:12px;"';
			
			$car = '<html>';
			$car .= '<body>';
			$car .= '<table width="100%" cellspacing="0" cellpadding="0" style="background:#eee;" align="center">';
			$car .= '<tr>';
			$car .= '<td width="100%" align="center" height="10"></td>';
			$car .= '</tr>';
			$car .= '<tr>';
			$car .= '<td width="100%" align="center">';
			$car .= '<table width="760" cellspacing="0" align="center" style="background:#fff;">';
			$car .= '<tr>';
				$car .= '<td width="30" colspan="3" height="90"><img src="'.BASE_URL.'/assets/imagenes/cabecera-cotizacion.jpg"></td>';
			$car .= '</tr>';

			$car .= '<tr>';
				$car .= '<td colspan="3" height="10"></td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
				$car .= '<td width="30" height="20"></td>';
				$car .= '<td width="700" align="left" valign="middle">'.$ordenes->fecha_cotizacion.'</td>';
				$car .= '<td width="30"></td>';
			$car .= '</tr>';

			$car .= '<tr>';
				$car .= '<td colspan="3" height="10"></td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
				$car .= '<td height="20"></td>';
				$car .= '<td align="left" valign="middle">Srs.: '.$ordenes->razon_social.'</td>';
				$car .= '<td></td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
				$car .= '<td colspan="3" height="10"></td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
				$car .= '<td height="10"></td>';
				$car .= '<td>'.$ordenes->email_cliente.'</td>';
				$car .= '<td></td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
				$car .= '<td colspan="3" height="10"></td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
				$car .= '<td></td>';
				$car .= '<td>';
				$car .= '<table width="700" cellspacing="1" cellpadding="0" align="center">';
				$car .= '<tr>';
					$car .= '<td '.$stylos_cabecera.' height="25" width="5%" align="center" valign="middle">N</td>';
					$car .= '<td '.$stylos_cabecera.' width="15%" align="center" valign="middle">Foto</td>';
					$car .= '<td '.$stylos_cabecera.' width="20%" align="center" valign="middle">Producto</td>';
					$car .= '<td '.$stylos_cabecera.' width="10%" align="center" valign="middle">Cantidad</td>';
					$car .= '<td '.$stylos_cabecera.' width="10%" align="center" valign="middle">Pre. Unit.</td>';
					$car .= '<td '.$stylos_cabecera.' width="10%" align="center" valign="middle">Subtotal</td>';
				$car .= '</tr>';
				
				$total = 0;
				for($i=0; $i<$num_items; $i++)
				{
					$id_producto 			= $this->input->post('id_producto_'.$i);
					$id_detalle 			= $this->input->post('id_detalle_'.$i);
					$cantidad 				= $this->input->post('cantidad_'.$i);				
					$imagen 				= $this->input->post('foto_'.$i);									
					$nombre_producto 		= $this->input->post('nombre_'.$i);
					$datap['precio_unit'] 	= $this->input->post('precio_unit_'.$i);
					$datap['subtotal'] 		= $this->input->post('subtotal_'.$i);
					$total += $subtotal;

					$foto = $_POST['foto_'.$i];
					$pic = '<img src="files/productos/'.$image.'"  name="foto" width="50" height="50" class="campo"/>'; 
					$car .='<tr>';
						$car .='<td '.$stylos_celda.' align="center">'.($i + 1).'</td>';
						$car .='<td '.$stylos_celda.' align="center">'.$pic.'</td>';
						$car .='<td '.$stylos_celda.' align="left">'.$nombre_producto.'</td>';
						$car .='<td '.$stylos_celda.' align="center">'.$cantidad.'</td>';
						$car .='<td '.$stylos_celda.' align="center">S/ '.$precio_unit.'</td>';
						$car .='<td '.$stylos_celda.' align="center">S/ '.$subtotal.'</td>';
					$car .='</tr>';
					
					$this->Model_ordenes->updateDetallaOrden($id_detalle, $datap);

				}
				$total = number_format($total, 2, '.', ',');
				$car .= '<tr>';
					$car .= '<td '.$stylos_cabecera.' height="25" colspan="3" align="center" valign="middle">&nbsp;</td>';
					$car .= '<td '.$stylos_cabecera.' colspan="3" align="center" valign="middle" style="color:#f00; font-weight:700;"></td>';
					$car .= '<td '.$stylos_cabecera.' align="center" valign="middle">TOTAL</td>';
					$car .= '<td '.$stylos_cabecera.' align="center" valign="middle">S/ '.$total.'</td>';
				$car .= '</tr>';
				$car .='</table>';
				$car .= '</td>';
				$car .= '<td></td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
				$car .= '<td colspan="3" height="10"></td>';
			$car .= '</tr>';

			$car .= '<tr>';
				$car .= '<td height="20"></td>';
				$car .= '<td align="left">'.$pie.'</td>';
				$car .= '<td></td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
				$car .= '<td colspan="3" height="20"></td>';
			$car .= '</tr>';

			$car .= '<tr>';
				$car .= '<td height="50"></td>';
				$car .= '<td align="left">';
				$car .= '<strong>CATALOGO ONLINE 2015 : </strong><a href="http://issuu.com/hpmimportsrl/docs/cat__logo_hpm_import_srl_-_2015" target="_blank">CLICK AQUI</a><br>';
				$car .= 'Att.<br>';
				$car .= '<strong>H&PM IMPORT SRL</strong><br>';
				$car .= 'Jr. Puno 631 Int. 3002- Lima<br>';
				$car .= 'TELEFONO: (01) 426 1222 // (94)635-5587 / (98)46-199758<br>';
				$car .= 'Visitenos en <a href="http://www.hpmimport.com" target="_blank">www.hpmimport.com</a> o en <a href="https://www.facebook.com/hpmimportsrl" target="_blank">https://www.facebook.com/hpmimportsrl</a>';
				$car .= '</td>';
				$car .= '<td></td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
				$car .= '<td colspan="3" height="20"></td>';
			$car .= '</tr>';			

			$car .='</table>';
			$car .= '</td>';
			$car .= '</tr>';
			
			$car .= '<tr>';
			$car .= '<td align="center" height="10"></td>';
			$car .= '</tr>';
			$car .='</table>';
			$car .= '</body>';
			$car .= '</html>';
			
			$correo_notificaciones = get_config('correo_notificaciones');
			$correo_destino = $data["texto_correo"];

			$mail = new PHPMailer();
			$mail->From = get_config('correo_cabecera');
			$mail->FromName = "HPM Import";			
			$mail->AddAddress($correo_destino);
			//$mail->AddAddress($correo_notificaciones);
			//$mail->AddBCC("l14307@gmail.com");
			$mail->Subject = $data["asunto"];	
			$mail->Body = $car;
			$mail->IsHTML(true);
			$mail->Send(); 
			
			//echo $car;
			//die();


			$datao["estado"] 			= 'Cotizada';
			$datao["total"]				= $total;
			$datao["fecha_cotizacion"]	= now();

			$this->Model_ordenes->updateEstadoOrden($data["id_orden"], $datao);

			redirect("mainpanel/clientes/listar");
		}*/

   		public function revisado($id)
   		{
   			$data["estado"] = "Revisado";
   			$this->validacion->validacion_login();
   		    $this->Model_ordenes->revisarOrden($id, $data);
			redirect("mainpanel/ordenes/listar");
   		}

   		public function borrar($id)
   		{
   			$this->validacion->validacion_login();
   			$secciones= $this->Model_ordenes->getCliente($id);
   			$result = $this->Model_ordenes->deleteCliente($id);
			redirect("mainpanel/ordenes/listar");
   		}


	}
?>