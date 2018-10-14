<?php
class Controller_fotos extends CI_Controller {

    private $current_section    ='galeria';
    private $section_catalogo   ='fotos';    

    function __construct() {
        parent::__construct();
        $this->load->library('validacion');
        $this->load->model('mainpanel/Model_fotos');
       // $this->load->model('mainpanel/model_rsocial');        
        $this->load->library('my_upload');
    }
    
    
    public function listado($id) {
        $this->validacion->validacion_login();

        $data['current_section']    = $this->current_section;
        $data['section_catalogo']   = $this->section_catalogo;        

	    $menu['lista_menu']         = $this->load->view('mainpanel/includes/menu', $data, true); //Menu
        $this->load->view('mainpanel/includes/header_view', $menu, true);//Header
	    	$data['cuerpo']=$this->section_catalogo."/index_view";//Contenido
       	$this->load->view('mainpanel/includes/footer_view', $data, true);//Footer

        $listado            = $this->Model_fotos->getLista($id);
        $data["listado"]    = $listado;

        $data["id"]     = $id;

        $this->load->view("mainpanel/includes/template", $data);
    }

    public function nuevo($id) {
        $this->validacion->validacion_login();

        $data['current_section']    = $this->current_section;
        $data['section_catalogo']   = $this->section_catalogo;

	    $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);//Menu
       	$this->load->view('mainpanel/includes/header_view', $menu, true);//Header
	        $data["cuerpo"]=$this->section_catalogo."/nuevo_view";//Contenido
        $this->load->view('mainpanel/includes/footer_view', $data, true);//Footer

        // ENVIA NUMERO DE ORDEN CONSECUTIVO
        $ultOrden=$this->Model_fotos->ultimo($id);
        $ultOrden=$ultOrden['orden'];
        $ultOrden++;
        $data['orden'] = $ultOrden;
       	
       	$data['id'] = $id; 

        // NUEVO CATEGORIA
        $this->load->view("mainpanel/includes/template", $data);        
    }
    
    public function grabar() 
    {
        $this->validacion->validacion_login();

        //+------- RECEPCIONA VARIABLES --------+
        $id 		= $this->input->post('id');
        $orden 		= $this->input->post('orden');

        //+------- RECEPCIONA VARIABLES --------+

        $data = array(
            'id'      =>  $id,
            'orden'             =>  $orden
        );

        $this->my_upload->upload($_FILES["foto"]);
        if ( $this->my_upload->uploaded == true  )
        {
            $this->my_upload->allowed          = array('image/*');
            $this->my_upload->image_resize     = true;
            $this->my_upload->image_ratio_crop = true;
            $this->my_upload->image_x          = 800;
            $this->my_upload->image_y          = 800;
            $this->my_upload->process('./files/fotos/');
            $data['imagen'] = $this->my_upload->file_dst_name;
            $this->my_upload->clean(); 
        }
        else
        {
            $error = $this->my_upload->error;
            $this->session->set_userdata("error",$error);       
            redirect('mainpanel/fotos/nuevo/'.$id);
        }

        $ultimo_id = $this->Model_fotos->grabar($data);
        if($ultimo_id==true)
        {
            $this->session->set_userdata("success",'Se procesó correctamente la información');
            redirect('mainpanel/fotos/listado/'.$id);
        }  
        else
        {
            $error='Ocurrió un error al procesar su información';
            $this->session->set_userdata("error",$error);
            redirect('mainpanel/fotos/nuevo/'.$id);
        }  
    }
	
    public function edit($id_foto) {
        $this->validacion->validacion_login();
        // GENERAL *********************************************************
        $data['current_section']    = $this->current_section;
        $data['section_catalogo']   = $this->section_catalogo;   
        // $data['lista_sub_menu']     = $this->load->view('mainpanel/includes/submenu_catalogo', $data, true);   
             
        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);

        $this->load->view('mainpanel/includes/header_view', $menu, true);
        $this->load->view('mainpanel/includes/footer_view', $data, true);

        $data['cuerpo']=$this->section_catalogo."/edit_view";

        //+------ DATOS DEL foto --------+
        $foto           = $this->Model_fotos->get($id_foto);
        $data['foto']   = $foto;

        $this->load->view("mainpanel/includes/template", $data);
    }   
    
    public function actualizar()
    {
        $this->validacion->validacion_login();
        // EDITAR CATEGORIA
        $id_foto            = $this->input->post('id_foto');
        $orden              = $this->input->post('orden');
        $imgatng            = $this->input->post('imgatng');
       
        $data = array(
            'orden'             =>  $orden
        );
        
        $this->my_upload->upload($_FILES["foto"]);
        if ( $this->my_upload->uploaded == true  )
        {
            $this->my_upload->allowed          = array('image/*');
            $this->my_upload->image_resize     = true;
            $this->my_upload->image_ratio_crop = true;
            $this->my_upload->image_x          = 800;
            $this->my_upload->image_y          = 800;
            $this->my_upload->process('./files/fotos/');
            $data['imagen'] = $this->my_upload->file_dst_name;
            $this->my_upload->clean();
            $this->Model_fotos->updateFoto($data["imagen"], $imgatng, $id_foto);

        }

        if(isset($data['imagen'])) @unlink('./files/fotos/'.$imgatng);

        $result=$this->Model_fotos->update($id_foto, $data);
         
        if($result==true){
            $this->session->set_userdata("success",'Se procesó correctamente la información');
        }else{
            $error='Ocurrió un error al procesar su información '.$error;
            $this->session->set_userdata("error",$error);            
        }                       
    
        redirect('mainpanel/fotos/edit/'.$id_foto);
    }
    
    public function borrar($id_foto) {
        $this->validacion->validacion_login();        

        //+----  BORRAMOS IMAGEN -------------+
        $foto      = $this->Model_fotos->get($id_foto);
	    $imagen    = $foto->imagen;
        $id        = $foto->id;
        @unlink('files/fotos/'.$imagen);

        //+------ BORRAMOS foto ---------+
        $resultado=$this->Model_fotos->delete($id_foto); 
        //+------ BORRAMOS foto ---------+

        if($resultado==true)
        {
            $this->session->set_userdata("success",'Se procesó correctamente la información');
        }
        else
        {
            $error='Ocurrió un error al procesar su información '.$error;
            $this->session->set_userdata("error",$error);
        }
        redirect('mainpanel/fotos/listado/'.$id);
    }
    

    
 
}
?>