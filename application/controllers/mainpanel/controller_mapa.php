<?php
class Controller_mapa extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('validacion');
        $this->load->model('mainpanel/Model_mapa');
        $this->load->library('my_upload');
    }
 
    
    public function listado() {
        $this->validacion->validacion_login();
        // GENERAL *********************************************************
        $data['current_section'] = 'mensajes';
        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $data['cuerpo']="sedes/index_view";
        $data["sedes"] = $this->Model_mapa->getListaSedes();
        $this->load->view("mainpanel/includes/template", $data);
    }
     
    public function editar($id_map) {
        $this->validacion->validacion_login();
        $data["mapa"] = $this->Model_mapa->getSede($id_map);
        $data["id"] = $id_map;
        // GENERAL *********************************************************
        $data['current_section'] = 'mapa';
        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $this->load->view('mainpanel/includes/header_view', $menu, true);
        $this->load->view('mainpanel/includes/footer_view', $data, true); 
        $data['cuerpo']="sedes/edit_view";
        // EDIT SEDE
        $this->load->view("mainpanel/includes/template", $data);
    }
 
    public function actualizar() {
        $this->validacion->validacion_login();
        // EDITAR Equipo
        $data = array();
        $id    = $this->input->post('id');
        $data['longitud_centro']   = $this->input->post('longitud_centro');
        $data['latitud_centro']     = $this->input->post('latitud_centro');
        $data['longitud_punto']    = $this->input->post('longitud_punto');
        $data['latitud_punto']     = $this->input->post('latitud_punto');
        $data['zoom']              = $this->input->post('zoom');
        $data['tipomapa']          = $this->input->post('tipomapa'); 
        $data['texto_globo']   = $this->input->post('direccion');
        $data['titulo_globo']   = $this->input->post('titulo');
        $id_sede= $this->input->post('id_sede');         
        $result=$this->Model_mapa->updateSede($id_sede, $data);
        if($result==true)
        {
            $this->session->set_userdata("success",'Se procesó correctamente la información');
        }
        else
        {
            $error='Ocurrió un error al procesar su información '.$error;
            $this->session->set_userdata("error",$error);            
        } 
        redirect("mainpanel/ubicanos/editar/".$id);
    }
    
    public function delete($id_centro) {
        $this->validacion->validacion_login();     
        $resultado=$this->Model_mapa->deleteCentro($id_centro);
        if($resultado==true){
            $this->session->set_userdata("success",'Se procesó correctamente la información');
        }else{
            $error='Ocurrió un error al procesar su información '.$error;
            $this->session->set_userdata("error",$error);
        }         
        redirect('mainpanel/centros/listado');
    }
 
    public function nuevo() {
        $this->validacion->validacion_login();
        // GENERAL *********************************************************

        $data["mapa"]=array(
            'latitud_centro'=>'-12.091076802974671',
            'longitud_centro'=>'-77.0225715637207',
            'zoom'=>'16',
            'tipomapa'=>'roadmap',
            'latitud_punto'=>'-12.09084600469928',
            'longitud_punto'=>'-77.02290415763855'
            );
        $data['current_section'] = 'centros';
        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $this->load->view('mainpanel/includes/header_view', $menu, true);
        $data['modal'] = $this->load->view('mainpanel/banners/modal_banner', true);
        $this->load->view('mainpanel/includes/footer_view', $data, true);
        $data["cuerpo"]="centros/nuevo_view";      
        // NUEVA EQUIPO
        $ultCentro=$this->Model_mapa->ultCentro();
        $data['orden']=$ultCentro['orden'] + 1;
        $this->load->view("mainpanel/includes/template", $data);        
    }
   
    public function grabar() {
        $this->validacion->validacion_login();
        // GRABAR EQUIPO
        $data = array();
        $data['nombre']         = $this->input->post('nombre');
        $data['direccion']      = $this->input->post('direccion');
        $data['orden']          = $this->input->post('orden'); 
        $data['estado']         = $this->input->post('estado');
        $data['telefono']       = $this->input->post('telefono');

        $data['latitud_centro']    = $this->input->post('latitud_centro');
        $data['longitud_centro']   = $this->input->post('longitud_centro');
        $data['latitud_punto']     = $this->input->post('latitud_punto');
        $data['longitud_punto']    = $this->input->post('longitud_punto');
        $data['zoom']              = $this->input->post('zoom');
        $data['tipomapa']          = $this->input->post('tipomapa');          


        $resultado = $this->Model_mapa->grabarCentro($data);
        if($resultado==true){
            $this->session->set_userdata("success",'Se procesó correctamente la información');
            redirect('mainpanel/centros/listado');
        }else{
            $error='Ocurrió un error al procesar su información';
           $this->session->set_userdata("error",$error);
            redirect('mainpanel/centros/nuevo');
        }           
    }
}
?>