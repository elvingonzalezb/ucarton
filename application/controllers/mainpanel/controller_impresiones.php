<?php
class Controller_impresiones extends CI_Controller {
    private $current_section    ='categorias_impresion';
    private $section_catalogo   ='impresiones';    

    function __construct() {
        parent::__construct();
        $this->load->library('validacion');
        $this->load->model('mainpanel/Model_impresiones');
        $this->load->model('mainpanel/Model_categorias_impresion');        
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

        $listado            = $this->Model_impresiones->getLista($id);
        $data["listado"]    = $listado;

        $data["id"]     = $id;
        $this->load->view("mainpanel/includes/template", $data);
    }

    public function listar($padre=false) {
        $this->validacion->validacion_login();

        $data['current_section']    = $this->current_section;

        //+---  SUB MENU -------------+        
        $data['section_catalogo']   = $this->section_catalogo;        
        // $data['lista_sub_menu']     = $this->load->view('mainpanel/includes/submenu_catalogo', $data, true);        
        //+---  SUB MENU -------------+        

        //+---  MENU -----------------+
        $menu['lista_menu']         = $this->load->view('mainpanel/includes/menu', $data, true);
        $this->load->view('mainpanel/includes/header_view', $menu, true);
        //+---  MENU -----------------+
        // $data['modal'] = $this->load->view('mainpanel/banners/modal_banners', true);
     
        $this->load->view('mainpanel/includes/footer_view', $data, true); 
        $data['cuerpo']=$this->section_catalogo."/nuevoProducto_view";
        //+------ LISTA DE CATEGORIAS --------+
        $categorias    = $this->Model_categorias_impresion->getLista(0);
        $data["categorias"]    = $categorias;        
        //+------ LISTA DE CATEGORIAS --------+
   
        if($padre<>false){
            //+------ LISTA DE SUBCATEGORIAS --------+
            $categoria              = $this->Model_categoria->get($padre); 
            $data["idcat"]          = $categoria->padre;         
            $data["subcategorias"]  = $this->Model_categoria->getLista($data["idcat"]);
            //+------ LISTA DE SUBCATEGORIAS --------+ 

            //+----- LISTA impresiones ---------+
            $listado            = $this->Model_impresiones->getLista($padre);
            $data["listado"]    = $listado;
            //+----- LISTA impresiones ---------+

             $data["padre"]     = $padre;
        }
       
        $this->load->view("mainpanel/includes/template", $data);
    }

    public function nuevo() {
        $this->validacion->validacion_login();
        $data['current_section']    = $this->current_section;
        $data['section_catalogo']   = $this->section_catalogo;
	    $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);//Menu
       	$this->load->view('mainpanel/includes/header_view', $menu, true);//Header
	    $data["cuerpo"]=$this->section_catalogo."/nuevo_view";//Contenido
        $this->load->view('mainpanel/includes/footer_view', $data, true);//Footer
        //+------ LISTA DE CATEGORIAS --------+
        $categorias    = $this->Model_categorias_impresion->getLista(0);
        $data["categorias"]    = $categorias;
        // NUEVO CATEGORIA
        $this->load->view("mainpanel/includes/template", $data);        
    }

    public function nueva() {
        $this->validacion->validacion_login();
        // GENERAL *********************************************************
        $data['current_section']    = $this->current_section;
        $data['section_catalogo']   = $this->section_catalogo;      
        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $this->load->view('mainpanel/includes/header_view', $menu, true);
        $this->load->view('mainpanel/includes/footer_view', $data, true);
        $data["cuerpo"]=$this->section_catalogo."/nuevo_view";  
        //+------ LISTA DE CATEGORIAS --------+
        $categorias    = $this->Model_categorias_impresion->getLista(0);
        $data["categorias"]    = $categorias;        
        //+------ LISTA DE CATEGORIAS --------+
        // ENVIA NUMERO DE ORDEN CONSECUTIVO
        // $ultOrden=$this->Model_impresiones->ultimo(0);
        // $ultOrden=$ultOrden['orden'];
        // $ultOrden++;
        // $data['orden']=$ultOrden;
        // NUEVO CATEGORIA
        $this->load->view("mainpanel/includes/template", $data);        
    }

    public function grabar() 
    {
        $this->validacion->validacion_login();
        //+------- RECEPCIONA VARIABLES --------+
        $orden 		= $this->input->post('orden');
        $titulo      = $this->input->post('nombre');
        $url      = $this->input->post('url');
        $descripcion      = $this->input->post('descripcion');
        $title      = $this->input->post('title');
        $description      = $this->input->post('description');
        //+------- RECEPCIONA VARIABLES --------+
        $data = array();
        $categoria = $this->input->post("categoria"); 
        $subcategoria = $this->input->post("subcategoria");
        if($subcategoria=="0")
        {
            $padre = $categoria;
        }
        else
        {
            $padre = $subcategoria;
        }
        $data['id'] = $padre;        
        $data["titulo"]             = $this->input->post("nombre");  
        $data["url"]                = $this->input->post("url");          
        $data["descripcion"]        = $this->input->post("descripcion");           
        $data["orden"]              = $this->input->post("orden");
        $data["title"]              = $this->input->post("title");
        $data["description"]        = $this->input->post("description");
        $this->my_upload->upload($_FILES["foto"]);
        if ( $this->my_upload->uploaded == true  )
        {
            $this->my_upload->allowed          = array('image/*');
            $this->my_upload->image_resize     = true;
            $this->my_upload->image_ratio_crop = true;
            $this->my_upload->image_x          = 800;
            $this->my_upload->image_y          = 800;
            $this->my_upload->process('./files/impresiones/');
            $data['imagen'] = $this->my_upload->file_dst_name;
            $this->my_upload->clean(); 
        }
        else
        {
            $error = $this->my_upload->error;
            $this->session->set_userdata("error",$error);       
            redirect('mainpanel/impresiones/nuevo/'.$id);
        }
        $ultimo_id = $this->Model_impresiones->grabar($data);
        if($ultimo_id==true)
        {
            $this->session->set_userdata("success",'Se procesó correctamente la información');
            redirect('mainpanel/impresiones/listado/'.$padre);
        }  
        else
        {
            $error='Ocurrió un error al procesar su información';
            $this->session->set_userdata("error",$error);
            redirect('mainpanel/impresiones/nuevo');
        }  
    }
	
    public function edit($id_foto) {
        $this->validacion->validacion_login();
        // GENERAL *********************************************************
        $data['current_section']    = $this->current_section;
        $data['section_catalogo']   = $this->section_catalogo;
        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $this->load->view('mainpanel/includes/header_view', $menu, true);
        $this->load->view('mainpanel/includes/footer_view', $data, true);
        $data['cuerpo']=$this->section_catalogo."/edit_view";
        //+------ DATOS DEL foto --------+
        $foto           = $this->Model_impresiones->get($id_foto);
        $data['foto']   = $foto;
        $padre = $foto->id;
        $categoria = $this->Model_impresiones->getCategoria($padre);
        //var_dump($categoria); die();
        if($categoria->padre==0)
        {
            // El producto pertenece a una categoria principal
            $data["categoria"] = $padre; 
            $data["subcategoria"] = 0; 
            $subcategorias = '';
        }
        else
        {
            // El producto pertenece a una subcategoria
            $data["categoria"] = $categoria->padre; 
            $data["subcategoria"] = $padre;
            $subcategorias = $this->Model_categorias_impresion->getLista($categoria->padre);
        }

        $categorias = $this->Model_categorias_impresion->getLista(0);
        $data["categorias"]    = $categorias; 
        $data["subcategorias"] = $subcategorias;         
        $this->load->view("mainpanel/includes/template", $data);
    }   
  
    public function actualizar()
    {
        $this->validacion->validacion_login();
        // EDITAR CATEGORIA
        $data = array();
        $categoria = $this->input->post("categoria"); 
        $subcategoria = $this->input->post("subcategoria");
        if($subcategoria=="0")
        {
            $padre = $categoria;
        }
        else
        {
            $padre = $subcategoria;
        }
        $data['id'] = $padre;        
        $id_foto            = $this->input->post('id_foto');

        $data["titulo"]             = $this->input->post("nombre");            
        $data["descripcion"]        = $this->input->post("descripcion");           
        $data["orden"]              = $this->input->post("orden");
        $data["url"]                = $this->input->post("url");
        $data["title"]              = $this->input->post("title");
        $data["description"]        = $this->input->post("description");
        
        $this->my_upload->upload($_FILES["foto"]);
        if ( $this->my_upload->uploaded == true  )
        {
            $this->my_upload->allowed          = array('image/*');
            $this->my_upload->image_resize     = true;
            $this->my_upload->image_ratio_crop = true;
            $this->my_upload->image_x          = 800;
            $this->my_upload->image_y          = 800;
            $this->my_upload->process('./files/impresiones/');
            $data['imagen'] = $this->my_upload->file_dst_name;
            $this->my_upload->clean();
            $this->Model_impresiones->updateFoto($data["imagen"], $imgatng, $id_foto);
        }
        $result=$this->Model_impresiones->update($id_foto, $data);
       
        if($result==true){
            $this->session->set_userdata("success",'Se procesó correctamente la información');
        }else{
            $error='Ocurrió un error al procesar su información '.$error;
            $this->session->set_userdata("error",$error);            
        }
        redirect('mainpanel/impresiones/edit/'.$id_foto);
    }
    
    public function borrar($id_foto) {
        $this->validacion->validacion_login();        
        //+----  BORRAMOS IMAGEN -------------+
        $foto      = $this->Model_impresiones->get($id_foto);
	    $imagen    = $foto->imagen;
        $id        = $foto->id;
        @unlink('files/impresiones/'.$imagen);
        //+------ BORRAMOS foto ---------+
        $resultado=$this->Model_impresiones->delete($id_foto); 
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
        redirect('mainpanel/impresiones/listado/'.$id);
    }
}
?>