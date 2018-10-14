<?php
class Controller_suscribete extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('validacion');
        $this->load->model('mainpanel/Model_suscribete');
        $this->load->library('my_upload');
    }
    
    public function index() {
        $this->validacion->validacion_login();
    }
    
    public function recibidos() {
        $this->validacion->validacion_login();

        $data['current_section'] = 'suscribete';
        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $data['cuerpo']="suscribete/index_view";
        
        // LISTA DE suscribete
        $suscribete = $this->Model_suscribete->getListaRecibidos();
        $data["suscribete"] = $suscribete;
        $this->load->view("mainpanel/includes/template", $data);


    }
    
  
    
    
    public function detalle_recibido($id_suscribete) {
        $this->validacion->validacion_login();
        // GENERAL
        $data['current_section'] = 'suscribete';
        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $data['cuerpo']="suscribete/detalle_recibido";
        
        // DETALLE DE suscribete
        $dat['estado']='Leido';
        $this->Model_suscribete->leidosuscribete($id_suscribete,$dat);

        $mensaje= $this->Model_suscribete->getMsgRecibido($id_suscribete);
        $data['messagee'] = $mensaje;
        $this->load->view("mainpanel/includes/template", $data);
    }    
    
      

    public function delete($id_registro) {
        $this->validacion->validacion_login();

        $this->Model_suscribete->deletesuscribete($id_registro);
        
        redirect('mainpanel/suscribete/recibidos');
    }
    


}
?>
