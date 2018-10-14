<?php
class Controller_servicios extends CI_Controller { 

    private $current_section    ='servicios';
    private $section_catalogo   ='servicios';    

    function __construct() {
        parent::__construct();
        $this->load->library('validacion');
        $this->load->model('mainpanel/Model_servicios');
        $this->load->library('my_upload');
    }
    
    
    public function listado() {
        $this->validacion->validacion_login();
        // GENERAL *********************************************************
        $data['current_section']    = $this->current_section;
        $data['section_catalogo']   = $this->section_catalogo;        
        // $data['lista_sub_menu']     = $this->load->view('mainpanel/includes/submenu_catalogo', $data, true);        

        $menu['lista_menu']         = $this->load->view('mainpanel/includes/menu', $data, true);

        $this->load->view('mainpanel/includes/header_view', $menu, true);
        $this->load->view('mainpanel/includes/footer_view', $data, true); 

        $data['cuerpo']=$this->section_catalogo."/index_view";


        // LISTA serviciosS
        $listado            = $this->Model_servicios->getLista();
        $data["listado"]    = $listado;

        $this->load->view("mainpanel/includes/template", $data);
    }
    
    
    public function edit($id) {
        $this->validacion->validacion_login();
        // GENERAL *********************************************************
        $data['current_section']    = $this->current_section;
        $data['section_catalogo']   = $this->section_catalogo;         
        // $data['lista_sub_menu']     = $this->load->view('mainpanel/includes/submenu_catalogo', $data, true);   
             
        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);

        $this->load->view('mainpanel/includes/header_view', $menu, true);
        $this->load->view('mainpanel/includes/footer_view', $data, true);

        $data['cuerpo']=$this->section_catalogo."/edit_view";

        // EDIT servicios
        $id_servicio       = $id;
        $servicio          = $this->Model_servicios->get($id_servicio);
        $data['servicio']  = $servicio;
        $this->load->view("mainpanel/includes/template", $data);
    }
    
   
    
    public function actualizar() {
        $this->validacion->validacion_login();
        // EDITAR CATEGORIA
        $id_servicio       	= $this->input->post('id_servicio');
        $nombre_servicio    = $this->input->post('nombre');
        $sumilla            = $this->input->post('sumilla');
        $orden              = $this->input->post('orden');
        $url            	= $this->input->post('url');
        $description  		= $this->input->post('description');
        $title              = $this->input->post('title');

        $imgatng            = $this->input->post('imgatng');
        
        $data = array(
            'nombre_servicio'=>$nombre_servicio, 
            'sumilla'=>$sumilla,
            'orden'=>$orden,
            'title'=>$title,
            'description'=>$description,
            'url'=>$url
        );
        
        $this->my_upload->upload($_FILES["foto"]);
        if ( $this->my_upload->uploaded == true  )
        {
            $this->my_upload->allowed          = array('image/*');
            $this->my_upload->image_resize     = true;
            $this->my_upload->image_ratio_crop = true;
            $this->my_upload->image_x          = 900;
            $this->my_upload->image_y          = 600;
            $this->my_upload->process('./files/servicios/');
            if ($this->my_upload->processed == true ) {
                $data['imagen'] = $this->my_upload->file_dst_name;
                $this->my_upload->clean();
                @unlink('./files/servicios/'.$imgatng);
            } else {
                $error = $this->my_upload->error;
                $this->session->set_userdata("error",$error);  
                redirect('mainpanel/servicios/edit/'.$id_servicio); 
            }
        }
        
        if(isset($data['imagen'])) @unlink('./files/servicios/'.$imgatng);

        $result=$this->Model_servicios->update($id_servicio, $data);
        if($result==true){
            $this->session->set_userdata("success",'Se procesó correctamente la información');
        }else{
            $error='Ocurrió un error al procesar su información '.$error;
            $this->session->set_userdata("error",$error);            
        }                       
    
        redirect('mainpanel/servicios/edit/'.$id_servicio);
    }
    
    public function delete($id_servicio) {
        $this->validacion->validacion_login();
        

        //+----  BORRAMOS IMAGEN -------------+
        $servicio      = $this->Model_servicios->get($id_servicio);
        $imagen         = $servicio->imagen;
        @unlink('files/servicios/'.$imagen);
        //+----  BORRAMOS IMAGEN -------------+        
        

        //+------ BORRAMOS CATEGORIA ---------+
        $resultado=$this->Model_servicios->delete($id_servicio); 
        //+------ BORRAMOS CATEGORIA ---------+


        if($resultado==true){
            $this->session->set_userdata("success",'Se procesó correctamente la información');
        }else{
            $error='Ocurrió un error al procesar su información '.$error;
            $this->session->set_userdata("error",$error);
        }

        redirect('mainpanel/servicios/listado');
    }
    
    public function nuevo() {
        $this->validacion->validacion_login();
        // GENERAL *********************************************************
        $data['current_section']    = $this->current_section;
        $data['section_catalogo']   = $this->section_catalogo;      
        // $data['lista_sub_menu']     = $this->load->view('mainpanel/includes/submenu_catalogo', $data, true); 

        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);

        $this->load->view('mainpanel/includes/header_view', $menu, true);
        $this->load->view('mainpanel/includes/footer_view', $data, true);

        $data["cuerpo"]=$this->section_catalogo."/nuevo_view";
        
        // ENVIA NUMERO DE ORDEN CONSECUTIVO
        $ultOrden=$this->Model_servicios->ultimo(0);
        $ultOrden=$ultOrden['orden'];
        $ultOrden++;
        $data['orden']=$ultOrden;
        
        // NUEVO CATEGORIA
        $this->load->view("mainpanel/includes/template", $data);        
    }
    
    public function grabar() {
        $this->validacion->validacion_login();

        //+------- RECEPCIONA VARIABLES --------+
        $nombre_servicio       		= $this->input->post('nombre');
        $sumilla                    = $this->input->post('sumilla');
        $orden                  	= $this->input->post('orden');
        $url                = $this->input->post('url');
        $description        = $this->input->post('description');
        $title              = $this->input->post('title');
        //+------- RECEPCIONA VARIABLES --------+
        
        $data = array(
            'nombre_servicio'=>$nombre_servicio, 
            'sumilla'=>$sumilla,
            'orden'=>$orden,
            'title'=>$title,
            'description'=>$description,
            'url'=>$url
        );
        
        
        $this->my_upload->upload($_FILES["foto"]);
        if ( $this->my_upload->uploaded == true  )
        {
            $this->my_upload->allowed          = array('image/*');
            $this->my_upload->image_resize     = true;
            $this->my_upload->image_ratio_crop = true;
            $this->my_upload->image_x          = 900;
            $this->my_upload->image_y          = 600;
            $this->my_upload->process('./files/servicios/');
            if ( $this->my_upload->processed == true )
            {
                $data['imagen'] = $this->my_upload->file_dst_name;
                $this->my_upload->clean();
                $resultado = $this->Model_servicios->grabar($data);
                if($resultado==true){
                    $this->session->set_userdata("success",'Se procesó correctamente la información');
                    redirect('mainpanel/servicios/listado');
                }else{
                    $error='Ocurrió un error al procesar su información';
                    $this->session->set_userdata("error",$error);
                    redirect('mainpanel/servicios/nuevo');
                }                   
            }
            else
            {
                $error = $this->my_upload->error;
                $this->session->set_userdata("error",$error);       
                redirect('mainpanel/servicios/nuevo');
            }
        }
        else
        {
            $error = $this->my_upload->error;
            $this->session->set_userdata("error",$error);       
            redirect('mainpanel/servicios/nuevo');
        }
    }
    
    
 
}
?>