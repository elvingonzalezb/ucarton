<?php
	class Controller_cotizacion extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
	     	  	$this->load->model("frontend/Model_productos");
	     	  	$this->load->model("frontend/Model_index");
	     	  	$this->load->model("frontend/Model_cotizacion");
				$this->load->model("frontend/Model_categorias");
				$this->load->library('my_phpmailer');
          	    					
	    }
		function index()
		{

		}

		public function detalle()
		{	

			$seccion                   		= "pedidos";
			$texto_web                 		= getInfo($seccion);
			$dataPrincipal["seccion"] 		= $seccion;
			$dataPrincipal["title"]    		= $texto_web->title;
			$dataPrincipal["description"] 	= $texto_web->description;
			$dataPrincipal["cuerpo"] 		= 'detalle_cotizacion_view';
			
			//Banner por Pagina e Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
			
     		$this->load->view("frontend/includes/template", $dataPrincipal);	

		}

		public function completar()
		{

			$seccion                   		= "pedidos";
			$texto_web                 		= getInfo($seccion);
			$dataPrincipal["seccion"] 		= $seccion;
			$dataPrincipal["title"]    		= $texto_web->title;
			$dataPrincipal["description"] 	= $texto_web->description;
			//$dataPrincipal["categorias"]  	= $this->Model_categorias->getListaCategoria();
			
			$dataPrincipal["cuerpo"] 		= 'completar_cotizacion_view';
			//Banner por Pagina e Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
			
     		$this->load->view("frontend/includes/template", $dataPrincipal);	

		}
		public function enviar()
		{
			if($this-> session->userdata('email'))
			{
				//+++++++++++lenado de datos+++++++++++++++++++++++++++
				$informacion= array();
	            $carrito 			= $this-> session->userdata('carrito_industrial');
	            //var_dump($carrito); return;
				$id 			= $this-> session->userdata('id');
				$informacion= $this->Model_cotizacion->getInformacion($id);

				$nombres		=	$informacion->nombres;
				$apellidos 		=	$informacion->apellidos;
				$direccion 		=	$informacion->direccion;
				$email 			= 	$informacion->email;
				$telefono 		= 	$informacion->telefono;	
				$razon_social 	= $this-> session->userdata('nombres');
				$codigo 		= $this-> session->userdata('codigo');

				$numero_or 		= $id."".date('YmdHis');

				$data["id_usuario"]		= $id;
				$data["timestamp"]		= time();	
				$data["numero_orden"]	= $numero_or;
				$data["razon_social"]	= $razon_social;
				$data["codigo_cliente"]	= $codigo;
				$data["telefono"]		= $telefono;
				$data["email_cliente"]	= $email;
				

				$data["nombre_cliente"]		= $nombres;				
				$data["direccion"] 			= $direccion;
				$data["mensaje_cliente"] 	= $this->input->post('mensaje');
				$data["fecha_ingreso"]	= date("Y-m-d H:i:s");
				$fecha	= date("d-m-Y H:i:s");
				
				/*$temp= date_create($fecha_ingreso);
                $echa= date_format($temp, 'd-m-Y');*/
				$data["fecha_registro"]	= date("Y-m-d H:i:s");
				$data["estado"]			= "No Revisado";
				$data["origen"]			= "cliente";
				//+++++++++++fin de datos+++++++++++++++++++++++++++

				// GRABAR ORDEN				
				$query = $this->Model_cotizacion->enviarOrden($data);
				//print_r($data); return;

	            if($query==TRUE)
				{    
					foreach($carrito as $k => $v)
					{	//+++++++++++llenado de carrito+++++++++++++++++++++++++++
						$datos["id_producto"] 	= $v['id_producto'];
						$datos["cantidad"] 		= $v['cantidad'];
						$datos["nombre"] 		= $v['nombre'];
						$datos["imagen"]  	 	= $v['imagen'];
						$datos["precio_unitario"]  	 	= $v['precio'];
						$precio=$v['precio'];
						$cant=$v['cantidad'];
						$datos["subtotal"]  	 	= $precio*$cant;

						$id_orden = $this->Model_cotizacion->getOrden($id);
						$datos["id_orden"]		= $id_orden->id_orden;
						$numero_orden			= $id_orden->numero_orden;
						//graba detalle de orden
						$this->Model_cotizacion->enviarDetalleOrden($datos);			
						//+++++++++++fin de llenado de carrito+++++++++++++++++++++++++++	
					}			
					//css para carro
					//creamos el carrito
		            $car ="<tr style='margin: 0;padding: 0;'>";
		                $car .="<th width='5%' style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'>N</td>";
		                $car .="<th width='15%' style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'>Producto</td>";
		                $car .="<th width='40%' style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'>Descripción</td>";
		                $car .="<th width='10%' style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'>Cantidad</td>";
		                $car .="<th width='10%' style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'></td>";
		                $car .="<th width='20%' style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'></td>";
		            $car .='</tr>';
					$carrito = $this-> session->userdata('carrito_industrial');
					$cont=0;
					foreach($carrito as $k => $v)
					{
						$cont +=1;
						$id_producto 	= $v['id_producto'];
						$cantidad 		= $v['cantidad'];
						$nombre 		= $v['nombre'];
						$imagen  	 	= $v['imagen'];	


						$la_imagen = base_url().'files/productos/'.$imagen;
						
						$car .='<tr>';
							$car .='<td align="center">'.$cont.'</td>';
							$car .='<td align="center"><img src="'.$la_imagen.'" height="100"></td>';
							$car .='<td align="center">'.$nombre.'</td>';
							$car .='<td align="center">'.$cantidad.'</td>';
						$car .='</tr>';
					}
					$car .= "<tr>";
		                $car .= "<td style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'></td>";
		                $car .= "<td style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'></td>";
		                $car .= "<td style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'></td>";
		                $car .= "<td style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'></td>";
		                $car .= "<td style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'></td>";
		                $car .= "<td style='padding: 6px 0px;background: #000000;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;' align='center'> </td>";
		            $car .= "</tr>";
					//$car .='</table>';
					//print_r($cantidad); return;
					//****************  FIN DE CREACION DE CARRITO ****************
					$correo_notificaciones = explode(",", getConfig("correo_notificaciones"));

					$mail = new PHPMailer();
					$mail->From = $correo_notificaciones[0];
					$mail->FromName = "INDUSTIAL V&G";			
					for($i=0; $i<count($correo_notificaciones); $i++)
					{
					$currentMail = trim($correo_notificaciones[$i]);
						$mail->AddAddress($currentMail);
					}

					$mail->Subject =  "Solicitud de Pedido por ".$nombres; 
					
					$msg = "
		            <!DOCTYPE html>
		            <html lang='es'>
		            <head>
		                <meta charset='utf-8'>
		            </head>
		            <body>
			            <table cellpadding='0' cellspacing='0' style='width: 800px;background: #FFF;border: 1px solid #00923D;border-radius: 4px;padding: 0;margin: 0;'>
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='margin: 0;padding: 10px 0px;'><img src='".base_url()."assets/frontend/images/banner.jpg'></th>
			                </tr>
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='padding: 6px 0px;background: #00923D;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'>Detalle de Cotización</th>
			                </tr>
			                <tr style='margin: 0;padding: 0;'>
			                    <td colspan='6' style='margin: 0;padding: 15px 15px;font-family: arial;font-size: 13px;'>Se ha realizado una Cotización en nuestro sitio web</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='padding: 6px 0px;background: #00923D;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'>Información del cliente</th>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #BFA060;color: #FFF;'>Nombre: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$nombres."</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #00923D;color: #FFF;'>Apellido: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$apellidos."</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #BFA060;color: #FFF;'>Teléfono: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$telefono."</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #00923D;color: #FFF;'>Email: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$email."</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #BFA060;color: #FFF;'>Fecha de compra: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$fecha."</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #00923D;color: #FFF;'>Mensaje: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$data["mensaje_cliente"]."</td>
			                </tr>";
			            $msg .= $car;
			            $msg .= "
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='padding: 6px 15px;background: #00923D;color: #FFF;font-family: arial;font-size: 13px;font-weight: 700;text-align: justify;'>Atte. Administración de INDUSTRIAL V&G.</th>
			                </tr>
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='padding: 6px 15px;background: #00923D;color: #FFF;font-family: arial;font-size: 13px;font-weight: 700;text-align: justify;'>".base_url()."</th>
			                </tr>
			            </table>
		            </body>
		            </html>";
						
					$mail->Body = $msg;
					$mail->IsHTML(true);
					@$mail->Send(); 
					
					//************* COPIA PARA EL CLIENTE *******************
					$mail = new PHPMailer();
					$mail->From = $correo_notificaciones[0];
					$mail->FromName = "INDUSTRIAL V&G ";			
					$mail->AddAddress($email);
					$mail->Subject = "Su solicitud de Pedido en INDUSTRIAL V&G"; 

					$msg = "
		            <!DOCTYPE html>
		            <html lang='es'>
		            <head>
		                <meta charset='utf-8'>
		            </head>
		            <body>
			            <table cellpadding='0' cellspacing='0' style='width: 800px;background: #FFF;border: 1px solid #00923D;border-radius: 4px;padding: 0;margin: 0;'>
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='margin: 0;padding: 10px 0px;'><img src='".base_url()."assets/frontend/images/logo.png'></th>
			                </tr>
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='padding: 6px 0px;background: #00923D;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'>Detalle de Compra</th>
			                </tr>
			                <tr style='margin: 0;padding: 0;'>
			                    <td colspan='6' style='margin: 0;padding: 15px 15px;font-family: arial;font-size: 13px;'>Estimado(a) ".$nombres.". Su compra ha sido efectuada con éxito.</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='padding: 6px 0px;background: #00923D;color: #FFF;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700;'>Información del cliente</th>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #BFA060;color: #FFF;'>Nombre: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$nombres."</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #00923D;color: #FFF;'>Razon Social: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$razon_social."</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #BFA060;color: #FFF;'>Teléfono: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$telefono."</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #00923D;color: #FFF;'>Email: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$email."</td>
			                </tr>
			                <tr style='margin: 0;padding: 0;' >
			                    <td colspan='2' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;text-transform: uppercase;font-weight: 700; ;background: #BFA060;color: #FFF;'>Fecha de compra: </td>
			                    <td colspan='4' style='margin: 0;padding: 5px 15px;font-family: arial;font-size: 13px;'>".$fecha."</td>
			                </tr>";
			            $msg .= $car;
			            $msg .= "
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='padding: 6px 15px;background: #00923D;color: #FFF;font-family: arial;font-size: 13px;font-weight: 700;text-align: justify;'>Atte. Administración de INDUSTRIAL V&G.</th>
			                </tr>
			                <tr style='margin: 0;padding: 0;'>
			                    <th colspan='6' style='padding: 6px 15px;background: #00923D;color: #FFF;font-family: arial;font-size: 13px;font-weight: 700;text-align: justify;'>".base_url()."</th>
			                </tr>
			            </table>
		            </body>
		            </html>";
					//$msg .= "<br>===============================================================<br />\n";		
					$mail->Body = $msg;
					$mail->IsHTML(true);
					@$mail->Send(); 
								   
					$this->session->unset_userdata('carrito_industrial');
					
					redirect('cotizacion/enviado');
				}
				else
				{
					echo "Error";
				}	
			}		
		}


		public function enviado(){

			$seccion                   		= "pedidos";
			$texto_web                 		= getInfo($seccion);
			$dataPrincipal["seccion"] 		= $seccion;
			$dataPrincipal["title"]    		= $texto_web->title;
			$dataPrincipal["description"] 	= $texto_web->description;
			$dataPrincipal["cuerpo"] 		= 'enviado_view';
			//Banner por Pagina e Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
			

			$id = $this->session->userdata('id');
			$numero_pedido = $this->Model_cotizacion->getOrden($id);
			$dataPrincipal["numero_pedido"] = $numero_pedido->numero_orden;
			
     		$this->load->view("frontend/includes/template", $dataPrincipal);			
		}
	}
?>