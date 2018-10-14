<?php

  class Controller_contacto extends CI_Controller{

    public function __construct(){

      parent::__construct();

      $this->load->model("frontend/Model_contacto");

      $this->load->model("frontend/model_index");

      $this->load->model("frontend/model_ubicanos");

      $this->load->library('my_phpmailer');    

      $this->load->helper('captcha');

    }

    public function index(){

      $dataPrincipal = array();

      

      $seccion = "contacto";

      $texto_web                      = getInfo($seccion);

      $dataPrincipal["seccion"]       = $seccion;

      $dataPrincipal["title"]         = $texto_web->title;

      $dataPrincipal["description"]   = $texto_web->description;

      $dataPrincipal["texto_web"]     = $texto_web;

      $dataPrincipal['cuerpo']    ='contacto_view';



      $vals = array(

                'img_path' => './assets/frontend/captcha/',

                'img_url' => 'http://localhost/industrialvyg/assets/frontend/captcha/',

                //'img_url' => 'http://localhost:8080/pnp/assets/frontend/captcha/',

                //'img_url' => 'http://www.paginasadministrables.info/py_industrialvyg/assets/frontend/captcha/',

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



      //Banner por Pagina y Informacion

            /*$dataPrincipal['banner_pagina']     = $this->model_index->getBanner($seccion); 

            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);*/

      //mapa

        $dataPrincipal["mapa"] = $this->model_ubicanos->getMapa(2);



      $this->load->view('frontend/includes/template',$dataPrincipal);

    }

  public function send()

  {

      $datos=array();

          $datos["nombre"]   = $this->input->post("fname");

          $datos["apellido"]   = $this->input->post("lname");

          $datos["correo"]   = $this->input->post("email");

          $datos["telefono"]   = $this->input->post("phone");

          $datos["asunto"]   = $this->input->post("asunto");

          $datos["mensaje"]  = $this->input->post("message");

          $datos["estado"]   = 'No leido';

          $hoy = gmdate("Y/m/d H:i:s", time()-18000);

          $datos["fecha_envio"] = $hoy;



            $codigo_captcha = $this->input->post('codigo');



            if($this->session->userdata('word')== $codigo_captcha)

            {



          $resultado = $this->Model_contacto->envioMensaje($datos);

          if($resultado==1)

          {

            $correo_notificaciones = explode(",", getConfig("correo_notificaciones"));

            // envio de mail de notificacion on el php mailer

                $mail = new PHPMailer();

                  $mail->From         = $datos["correo"];  //direccion de quien envia el correo

                  $mail->FromName     = $datos["nombre"];  //Nombre de quien envia

                  for($i=0; $i<count($correo_notificaciones); $i++)

                    {

                        $currentMail = trim($correo_notificaciones[$i]);

                        $mail->AddAddress($currentMail);

                    }

                  //$mail->AddReplyTo($correo, $destinatario);

                  $mail->Subject = $datos["asunto"]." - Mensaje desde el formulario de contacto";

                  $msg = "Se ha enviado el siguiente mensaje desde el formulario del contacto.<br>\n";

                  $msg .= "===============================================================<br>\n";

                  $msg .= " DATOS DEL REMITENTE <br>\n";

                  $msg .= "===============================================================<br>\n";

                  $msg .= "<b>FECHA: </b>".$hoy."<br />\n";            

                  $msg .= "<b>NOMBRE  : </b>".$datos["nombre"]."<br />\n"; 

                  $msg .= "<b>APELLIDOS  : </b>".$datos["apellido"]."<br />\n"; 

                  $msg .= "<b>TELEFONO  : </b>".$datos["telefono"]."<br />\n";   

                  $msg .= "<b>EMAIL   : </b>".$datos["correo"]."<br />\n";               

                  $msg .= "===============================================================<br />\n";

                  $msg .= "<b>MENSAJE</b> <br>\n";

                  $msg .= "===============================================================<br />\n";  

                  $msg .= $datos["mensaje"]."<br />\n";

                  $msg .= "===============================================================<br />\n";

                    $msg .= 'Att.<br>';

                    $msg .= '<strong>RA&RO</strong><br>';

                    $msg .= 'Direccion: '.getConfig("direccion_empresa").'<br>';

                    $msg .= 'TELEFONO: '.getConfig("telefono_footer").'<br>';



                  $mail->Body = $msg;

                  $mail->IsHTML(true);

                  @$mail->Send();



                  $this->session->set_userdata("success", "Mensaje enviado, nos pondremos en contacto con usted gracias!");



          }else

          {

            $this->session->set_userdata("error", "Error al procesar la información, intentelo de nuevo.");

          }



                    $this->session->unset_userdata('nombre_contacto');

                    $this->session->unset_userdata('apellido_contacto');

                    $this->session->unset_userdata('telefono_contacto');

                    $this->session->unset_userdata('correo_contacto');

                    $this->session->unset_userdata('asunto_contacto');

                    $this->session->unset_userdata('mensaje_contacto');

              redirect('contacto');

            }

            else

            {

                $str='El codigo de la imagen ingresado es erroneo';

                $data_contacto = $array = array('nombre_contacto'=> $datos['nombre'],'apellido_contacto'=> $datos['apellido'],'telefono_contacto'=> $datos['telefono'], 'correo_contacto'=> $datos['correo'], 'asunto_contacto'=> $datos['asunto'], 'mensaje_contacto'=> $datos['mensaje'] );

                $this->session->set_userdata($data_contacto);

                $this->session->set_userdata("captchaError",$str);

                redirect('contacto');

            }

  }



  }

?>