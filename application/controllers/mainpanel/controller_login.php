<?php
class Controller_login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
                $this->load->library('validacion');
                $this->load->model('mainpanel/model_login');
                $this->load->helper('captcha');                
	}
	public function index()
	{        
            $this->validacion->validacion_login();
            // GENERAL *********************************************************
            $data['current_section'] = 'inicio';
            $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
            $this->load->view('mainpanel/includes/header_view', $menu, true);
            $data['modal'] = '';
            $this->load->view('mainpanel/includes/footer_view', $data, true); 
            $data['cuerpo']="admin_inicio";
            // *****************************************************************
            
            $this->load->view("mainpanel/includes/template", $data);
	}
        
        public function login(){      
            $vals = array(
                'img_path'      => './assets/mainpanel/charisma/captcha/',
                'img_url'     => 'http://www.misticadigital.com/py_ucartonera/assets/mainpanel/charisma/captcha/',
                'font_path'     => './assets/frontend/fonts/MyriadPro-Bold.ttf',
                'img_width'     => '130',
                'img_height'    => 40
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
    
            $this->load->view("mainpanel/login_view", $dataPrincipal);
        }
        
        public function validar() {

            // PROCESAR LOGIN
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->model_login->valida_usuario($username, $password);
            $result=explode("###",$result);
            $pr=$result[0];

            $codigo_captcha = $this->input->post('codigo');

            if($this->session->userdata('word') == $codigo_captcha)
            {            
                switch ($pr){
                    case 'ok':
                        $this->session->set_userdata('usuadmMarkarina', true);
                        $this->session->set_userdata('nombre_admin', $result[1]);
                        $this->session->set_userdata('id_admin', $result[2]);
                        $this->session->set_userdata('nivel', $result[4]);
                        break;
                    case 'estado':
                        $this->session->set_userdata('error', 'Usuario Inactivo');                    
                        break;
                    case 'password':
                        $this->session->set_userdata('error', 'Password Incorrecto');                    
                        break;
                    case 'usuario':
                        $this->session->set_userdata('error', 'Usuario Incorrecto');                    
                        break;                
                }
            }
            else
            {
                $str='El codigo de la imagen ingresado es erroneo';
                $this->session->set_userdata("captchaError",$str);
            } 
            //echo $this->session->flashdata('error');
            redirect('mainpanel');
        }
        
        public function logout() {
            $this->session->unset_userdata('usuadmMarkarina');
            $this->session->unset_userdata('nombre_admin');
            $this->session->unset_userdata('id_admin');
            $this->session->unset_userdata('nivel');
            $url= base_url()."mainpanel";
            redirect($url);
        }
}
?>