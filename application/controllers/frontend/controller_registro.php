<?php
class Controller_registro extends CI_Controller {
	function __construct()
	{
		parent::__construct();
            $this->load->library('my_phpmailer');
            $this->load->model("frontend/Model_index");
            $this->load->model("frontend/Model_login");
            $this->load->model("frontend/Model_categorias");
		    $this->load->model("frontend/Model_registro");
            $this->load->model("frontend/Model_categorias");

	}
	function index()
	{
            $seccion                        = 'registro';
            $texto_web                      = getInfo($seccion);
            $dataPrincipal["seccion"]       = $seccion;
            $dataPrincipal["title"]         = $texto_web->title;
            $dataPrincipal["description"]   = $texto_web->description;
            $dataPrincipal["texto_web"]     = $texto_web;
            $dataPrincipal["lista"]         = $this->Model_somos->getLista();
            $dataPrincipal["categorias"]    = $this->Model_categorias->getListaCategoria();

            $dataPrincipal["cuerpo"]        = 'registro_view';
            $this->load->view('frontend/includes/template', $dataPrincipal);
	}
	
	function grabar() 
    {          
        $data['nombres'] = $this->input->post('nombresRegistro2');
        $data['apellidos'] = $this->input->post('apellidosRegistro2');
        $data['razon_social'] = $this->input->post('razonSocialRegistro2');
        $data['telefono'] = $this->input->post('telefonoRegistro2');
        $data['direccion'] = $this->input->post('direccionRegistro2');
        $data['email'] = $this->input->post('emailRegistro2');
        $data['clave'] = $this->input->post('claveRegistro2');
        $data['origen'] = $this->input->post('origen');
        $data['fecha_registro'] = date('Y-m-d H:i:s');
        $data['estado'] = "Activo";
        $data['registrante'] = "web";
        $data['tipo'] = "empresa";

        $timestamp = time();
        $data['timestamp'] = $timestamp;

        $data['codigo'] = 'URS-'.date('YmdHis');

        //$this->recaptcha->recaptcha_check_answer();
        $codigo_captcha = $this->input->post('codigo');
        if($this->session->userdata('word')== $codigo_captcha){//valida captcha

            $existeEmail = $this->Model_registro->existeEmail($data["email"]);

            if($existeEmail==1){
                $this->session->set_userdata("emailexiste", "El correo ingresado ya se encuentra registrado");
                $data_user = $array = array('nombres'=> $data['nombres'], 'apellidos'=> $data['apellidos'], 'telefono'=> $data['telefono'], 'direccion'=> $data['direccion'], 'email_registro'=> $data['email'], 'clave'=> $data['clave'], 'origen'=> $data['origen'] );
                $this->session->set_userdata($data_user);
                redirect('login');
            }
            else{
                $query = $this->Model_registro->insertRegistro($data);
                $this->session->unset_userdata('nombres');
                $this->session->unset_userdata('apellidos');
                //$this->session->unset_userdata('razon_social');
                $this->session->unset_userdata('telefono');
                $this->session->unset_userdata('direccion');
                $this->session->unset_userdata('email_registro');
                $this->session->unset_userdata('clave');
                $this->session->unset_userdata('origen');

                $email = $data['email'];
                 $dataCliente = $this->Model_login->get_user($email);
                 $id = $dataCliente->id;
                 $nombres = $dataCliente->nombres;
                 $razon_social = $dataCliente->razon_social;
                 $codigo = $dataCliente->codigo;
                 $telefono = $dataCliente->telefono;

                 $data_user = $array = array('email'=> $email, 'logued_in' => TRUE, 'id' => $id, 'razon_social' => $razon_social,'nombres' => $nombres, 'codigo' => $codigo, 'telefono' => $telefono );
                
            // asignamos dos datos a la sesión --> (username y logued_in)                                    
                $this->session->set_userdata($data_user);

                
                $dataPrincipal['email'] = $email; 
                redirect('cotizacion/detalle');
                 
            }

            if($query == true)
            {
                $correo_notificaciones = explode(",", getConfig("correo_notificaciones"));
                // ENVIO  DE MAIL DE VERIFICACION CON EL PHP MAILER
                $mail = new PHPMailer();
                $mail->From = $correo_notificaciones[0];
                $mail->FromName = "Dgala Events";
                for($i=0; $i<count($correo_notificaciones); $i++)
                {
                    $currentMail = trim($correo_notificaciones[$i]);
                    $mail->AddAddress($currentMail);
                }
                $mail->AddAddress($data["email"]);
                //$mail->AddBCC($correo_notificaciones);angel_tauro27@hotmail.com
                $mail->Subject = "Registro en Dgala";
                $fecha_hora=date("d-m-Y H:i:s");
                
                $msg ='Se realizo un nuevo registro en el website de Dgala, a continuacion los datos:<br /><br />';
                $msg .= '<table width="700" cellpadding="0" cellspacing="1" border="0" style="border:1px solid #000;" >';
                $msg .= '<tr>';
                    $msg .= '<td colspan="2" height="125"><img src="'.base_url().'/assets/frontend/images/cabecera_email.jpg" /></td>';
                $msg .= '</tr>';
                
                $msg .= '<tr>';
                    $msg .= '<td colspan="2" align="center" valign="middle" height="40" style="background:#333; color:#fff; font-size:22px;">Registro de Cliente</td>';
                $msg .= '</tr>';
                
                $msg .= '<tr>';
                    $msg .= '<td height="30" width="30%" align="left" valign="middle" style="padding-left:20px;border:#6699CC solid 1px;background:#EEEEEE; color:#000; font-weight:bold;">CODIGO DE USUARIO</td>';
                    $msg .= '<td width="70%" align="left" valign="middle"  style="border:#6699CC solid 1px;padding-left:20px;">'.$data['codigo'].'</td>';
                $msg .= '</tr>';
                        
                $msg .= '<tr>';
                    $msg .= '<td height="30" width="30%" align="left" valign="middle" style="padding-left:20px;border:#6699CC solid 1px;background:#EEEEEE; color:#000; font-weight:bold;">NOMBRES</td>';
                    $msg .= '<td width="70%" align="left" valign="middle"  style="border:#6699CC solid 1px; padding-left:20px;">'.$data['nombres'].'</td>';
                $msg .= '</tr>';

                $msg .= '<tr>';
                    $msg .= '<td height="30" width="30%" align="left" valign="middle" style="padding-left:20px;border:#6699CC solid 1px;background:#EEEEEE; color:#000; font-weight:bold;">APELLIDOS</td>';
                    $msg .= '<td width="70%" align="left" valign="middle"  style="border:#6699CC solid 1px; padding-left:20px;">'.$data['apellidos'].'</td>';
                $msg .= '</tr>';

                $msg .= '<tr>';
                    $msg .= '<td height="30" width="30%" align="left" valign="middle" style="padding-left:20px;border:#6699CC solid 1px;background:#EEEEEE; color:#000; font-weight:bold;">EMPRESA</td>';
                    $msg .= '<td width="70%" align="left" valign="middle"  style="border:#6699CC solid 1px; padding-left:20px;">'.$data['razon_social'].'</td>';
                $msg .= '</tr>';

                $msg .= '<tr>';
                    $msg .= '<td height="30" align="left" valign="middle" style="padding-left:20px;border:#6699CC solid 1px;background:#EEEEEE; color:#000; font-weight:bold;">TELEFONO</td>';
                    $msg .= '<td align="left" valign="middle" style="border:#6699CC solid 1px; padding-left:20px;">'.$data['telefono'].'</td>';
                $msg .= '</tr>';
                        
                $msg .= '<tr>';
                    $msg .= '<td height="30" width="30%" align="left" valign="middle" style="padding-left:20px;border:#6699CC solid 1px;background:#EEEEEE; color:#000; font-weight:bold;">DIRECCION</td>';
                    $msg .= '<td width="70%" align="left" valign="middle"  style="border:#6699CC solid 1px; padding-left:20px;">'.$data['direccion'].'</td>';
                $msg .= '</tr>';

                $msg .= '<tr>';
                    $msg .= '<td height="30" width="30%" align="left" valign="middle" style="padding-left:20px;border:#6699CC solid 1px;background:#EEEEEE; color:#000; font-weight:bold;">EMAIL</td>';
                    $msg .= '<td width="70%" align="left" valign="middle" style="border:#6699CC solid 1px; padding-left:20px;">'.$data['email'].'</td>';
                $msg .= '</tr>';

                $msg .= '<tr>';
                    $msg .= '<td height="30" width="30%" align="left" valign="middle" style="padding-left:20px;border:#6699CC solid 1px;background:#EEEEEE; color:#000; font-weight:bold;">COMO SE ENTERO</td>';
                    $msg .= '<td width="70%" align="left" valign="middle" style="border:#6699CC solid 1px; padding-left:20px;">'.$data['origen'].'</td>';
                $msg .= '</tr>';
                
                $msg .= '<tr>';
                    $msg .= '<td height="30" width="30%" align="left" valign="middle" style="padding-left:20px;border:#6699CC solid 1px;background:#EEEEEE; color:#000; font-weight:bold;">FECHA Y HORA</td>';
                    $msg .= '<td width="70%" align="left" valign="middle" style="border:#6699CC solid 1px; padding-left:20px;">'.$fecha_hora.'</td>';
                $msg .= '</tr>';
                
                $msg .= '</table>'; 
                $msg .= 'Att.<br>';
                $msg .= '<strong>Dgala Events</strong><br>';
                $msg .= 'Direccion: '.getConfig("direccion_empresa").'<br>';
                $msg .= 'TELEFONO: '.getConfig("telefono_footer").'<br>';
                $mail->Body = $msg;
                $mail->IsHTML(true);
                @$mail->Send();
                // FIN DE ENVIO CON EL PHP MAILER
                $this->session->set_userdata("success", "Su registro fue exitoso!");                 
                redirect('login');
            }
        }//Verificando Captcha        
        else
        {
            if(!$this->session->userdata('word')== $codigo_captcha)
            {
                $this->session->set_flashdata('error','Ingreso el codigo erroneamente');
                $data_user = $array = array('nombres'=> $data['nombres'], 'apellidos'=> $data['apellidos'], 'razon_social'=> $data['razon_social'], 'telefono'=> $data['telefono'], 'direccion'=> $data['direccion'], 'email_registro'=> $data['email'], 'clave'=> $data['clave'], 'origen'=> $data['origen'] );
                $this->session->set_userdata($data_user);                }
            else
            {
                $this->session->set_flashdata('error','El codigo es incorrecto');
            }
                redirect('login'); 
        }                           
	}

    function verificarEmail()
    {
        $email = $_POST["email"];
        $bandera = $this->Model_registro->existeEmail($email);

        $json['result'] = $bandera;

        echo json_encode($json);
    }
}
?>