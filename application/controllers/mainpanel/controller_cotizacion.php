<?php
class Controller_cotizacion extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('validacion');
        $this->load->model('mainpanel/Model_cotizacion');
        $this->load->library('my_upload');
    }
    
    public function index() {
        $this->validacion->validacion_login();
    }
    
    public function recibidos() {
        $this->validacion->validacion_login();

        $data['current_section'] = 'cotizacion';
        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $data['cuerpo']="cotizacion/index_view";
        
        // LISTA DE cotizacion
        $cotizacion = $this->Model_cotizacion->getListaRecibidos();
        $data["cotizacion"] = $cotizacion;
        $this->load->view("mainpanel/includes/template", $data);


    }
    
  
    
    
    public function detalle_recibido($id_cotizacion) {
        $this->validacion->validacion_login();
        // GENERAL
        $data['current_section'] = 'cotizacion';
        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $data['cuerpo']="cotizacion/detalle_recibido";
        
        // DETALLE DE cotizacion
        $dat['estado']='Revisado';
        $this->Model_cotizacion->leidoCotizacion($id_cotizacion,$dat);

        $cotizacion= $this->Model_cotizacion->getMsgRecibido($id_cotizacion);
        $data['messagee'] = $cotizacion;
        $this->load->view("mainpanel/includes/template", $data);
    }    
    
      

    public function delete($id_registro) {
        $this->validacion->validacion_login();

        $this->Model_cotizacion->deleteCotizacion($id_registro);
        
        redirect('mainpanel/cotizacion/recibidos');
    }
    


}
?>