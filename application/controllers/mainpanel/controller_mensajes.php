<?php
class Controller_mensajes extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('validacion');
        $this->load->model('mainpanel/Model_mensajes');
        $this->load->library('my_upload');
    }
    
    public function index() {
        $this->validacion->validacion_login();
    }
    
    public function recibidos() {
        $this->validacion->validacion_login();

        $data['current_section'] = 'correo';
        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $data['cuerpo']="mensajes/index_view";
        
        // LISTA DE MENSAJES
        $mensajes = $this->Model_mensajes->getListaRecibidos();
        $data["mensajes"] = $mensajes;
        $this->load->view("mainpanel/includes/template", $data);


    }
    
  
    
    
    public function detalle_recibido($id_mensaje) {
        $this->validacion->validacion_login();
        // GENERAL
        $data['current_section'] = 'correo';
        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $data['cuerpo']="mensajes/detalle_recibido";
        
        // DETALLE DE MENSAJE
        $dat['estado']='Leido';
        $this->Model_mensajes->leidoMensaje($id_mensaje,$dat);

        $mensaje= $this->Model_mensajes->getMsgRecibido($id_mensaje);
        $data['messagee'] = $mensaje;
        $this->load->view("mainpanel/includes/template", $data);
    }    
    
      

    public function delete($id_registro) {
        $this->validacion->validacion_login();

        $this->Model_mensajes->deleteMensaje($id_registro);
        
        redirect('mainpanel/mensajes/recibidos');
    }
    


}
?>
