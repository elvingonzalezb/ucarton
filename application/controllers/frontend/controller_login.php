<?php
class Controller_login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
            $this->load->library(array('session','form_validation'));
            $this->load->helper('form');
            $this->load->library('my_phpmailer');
            $this->load->model('frontend/Model_login');
	        $this->load->model("frontend/Model_index");
            $this->load->model("frontend/Model_categorias");
            $this->load->library('my_phpmailer');    
            $this->load->helper('captcha');
    }
	
    function index()
        {  

                    //captcha
                    $vals = array(
                        'img_path' => './assets/frontend/captcha/',
                        //'img_url' => 'http://localhost/industrialvyg/assets/frontend/captcha/',
                        //'img_url' => 'http://www.paginasadministrables.info/py_industrialvyg/assets/frontend/captcha/',
                        'img_url' => 'http://industrialvyg.local/assets/frontend/captcha/',
                        //'img_url' => 'http://www.estebansolano.com/industrialvyg/assets/frontend/captcha/',
                        'font_path' => './assets/frontend/fonts/MyriadPro-Bold.ttf',
                        'img_width' => '130',
                        'img_height' => 40
                       );

                    $cap = create_captcha($vals);
                    $data2 = array(
                       'captcha_time' => $cap['time'],
                       'ip_address' => $this->input->ip_address(),
                       'word' => $cap['word']
                       );
                    $this->session->set_userdata($data2);
                    // store image html code in a variable
                    $dataPrincipal['cap_img']= $cap['image'];
                    $dataPrincipal['codigo_secreto']= $cap['word'];
                    // store the captcha word in a session
                    $this->session->set_userdata('word', $cap['word']);
                    //fin captcha



        // reglas de validación
           $this->form_validation->set_rules('email', 'email', 'callback__valid_login');
           $this->form_validation->set_rules('clave', 'clave');//'|md5|required');
         
            $this->form_validation->set_message('required', 'el campo %s es requerido');
            $this->form_validation->set_message('_valid_login', 'El usuario o contraseña son incorrectos');
         
            $this -> form_validation -> set_error_delimiters('<ul><li>', '</li></ul>');
       
            if ($this->form_validation->run() == FALSE)
            {
                $seccion                        = 'pedidos';
                $texto_web                      = getInfo($seccion);
                $dataPrincipal["seccion"]       = $seccion;
                $dataPrincipal["title"]         = $texto_web->title;
                $dataPrincipal["description"]   = $texto_web->description;
                $dataPrincipal["texto_web"]     = $texto_web;
                //$dataPrincipal["categorias"] = $this->Model_categorias->getListaCategoria();
                $dataPrincipal["cuerpo"]        = 'login_view';
                //banner pagina y secciones
                $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
                $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
                //$dataPrincipal['categoriaindex']        = $this->Model_categorias->getListaCategoriaR();

                $this->load->view('frontend/includes/template', $dataPrincipal);
            }
            else{
                            
                 $email = $this->input->post('email');
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
      }


       function _valid_login($email,$clave)
        {
            $email = $this->input->post('email');
            $clave = $this->input->post('clave');
            return $this->Model_login->valid_user($email,$clave);
        }

        function valid_login_ajax()
        {
            //verificamos si la petición es via ajax
        if($this->input->is_ajax_request()){

                 if($this->input->post('email')!==''){
                    $email = $this->input->post('email');
                    
                $this->Model_login->valid_user_ajax($email);  

                }
        }else{
                redirect('login');
        }

        } // fin del método valid_login_ajax
          
        function logout()
        {
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('logued_in');
                $this->session->unset_userdata('nombres');
                $this->session->unset_userdata('razon_social');
                $this->session->unset_userdata('razon_social');
                $this->session->unset_userdata('telefono');
                $this->session->unset_userdata('codigo');
                 
                 redirect('login');    
        }

        function recuperar()
        {
                $seccion                        = 'login';
                $texto_web                      = getInfo($seccion);
                $dataPrincipal["seccion"]       = $seccion;
                $dataPrincipal["title"]         = $texto_web->title;
                $dataPrincipal["description"]   = $texto_web->description;
                $dataPrincipal["texto_web"]     = $texto_web;
                $dataPrincipal["categorias"]    = $this->Model_categorias->getListaCategoria();
                $dataPrincipal["categorias_footer"] = $this->Model_categorias->getListaCategoriaR();
                $dataPrincipal["cuerpo"]        = 'recuperar_clave_view';
                $this->load->view('frontend/includes/template', $dataPrincipal);
        }

        function recuperarClave()
        {
            $email = $this->input->post('emailRecup');
            
            $cliente = $this->Model_login->get_user($email);

            $hallados = count($cliente);

            if($hallados==0)
            {
                $resultado = 0;
            }
            else
            {
                $correo_notificaciones = explode(",", getConfig("correo_notificaciones"));
                $resultado = 1;
                $razon_social = $cliente->razon_social;
                $password = $cliente->clave;
                // CORREO PARA LA USUARIO
                $mail = new PHPMailer();
                $mail->From = $correo_notificaciones[0];
                $mail->FromName = "Dgala Events";
                $mail->AddAddress($email);
                $mail->Subject = "Recuperacion de Contraseña"; 
                $msg = "Estimado <b>".$razon_social.":</b><br>\n";
                $msg .= "Tal como lo solicito le enviamos la clave de acceso de cliente a nuestro sitio web:<br>\n";
                $msg .= "===============================================================<br>\n";
                $msg .= "<b>CLAVE: </b>".$password."<br />\n";
                $msg .= "===============================================================<br>\n";
                $msg .= 'Att.<br>';
                $msg .= '<strong>Dgala Events</strong><br>';
                $msg .= 'Direccion: '.getConfig("direccion_empresa").'<br>';
                $msg .= 'TELEFONO: '.getConfig("telefono_footer").'<br>';
                $mail->Body = $msg;
                $mail->IsHTML(true);
                @$mail->Send();
            }
            redirect('login');
            }
}
?>