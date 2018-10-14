<?php 
	class Controller_banner_pagina extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion");
			$this->load->model("mainpanel/model_banner_pagina");
        	$this->load->library('my_upload');

		}
		public function index()
		{
			$this->validacion->validacion_login();
	       	$data['current_section'] = 'banners';
	        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $data['cuerpo']="banner_pagina/index_view";

	        $data["banner"] = $this->model_banner_pagina->getListaBanner();

	        $this->load->view("mainpanel/includes/template", $data);
	 

		}
		public function edit($id)
		{	$this->validacion->validacion_login();
			// general
			$data["current_section"] = 'banners';
			$data["lista_menu"] = $this->load->view("mainpanel/includes/menu", $data, true);			
			$data["cuerpo"]= "banner_pagina/edit_view";

			$banner = $this->model_banner_pagina->getBanner($id);
			$data["banner"]=$banner;
			$this->load->view("mainpanel/includes/template", $data);
		}
		public function actualizar()
		{
			$this->validacion->validacion_login();
	        // EDITAR BANNER
	        $id = $this->input->post('id');
	        $imgatng = $this->input->post('imgatng');
	        
	        $this->my_upload->upload($_FILES["banner"]);
	        if ( $this->my_upload->uploaded == true  )
	        {
	            $this->my_upload->allowed          = array('image/*');
	            $this->my_upload->image_resize     = true;
	            $this->my_upload->image_ratio_crop = true;
	            // $this->my_upload->image_x          = 1024;
	            // $this->my_upload->image_y          = 420;
	            $this->my_upload->image_x          = 1920;
	            $this->my_upload->image_y          = 300;

	            $this->my_upload->process('./files/banner_pagina/');
	            if ( $this->my_upload->processed == true ) {
	                $data['imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean(); 
	                @unlink('./files/banner_pagina/'.$imgatng);
	                
	            } else {
	                $error = $this->my_upload->error;
	            }
	        }       
	        
	        if(isset($error)){
	            $this->session->set_userdata("error",$error);             
	        }else{
	            $result=$this->model_banner_pagina->updateBanner($id, $data);
	            if($result==true){
	                $this->session->set_userdata("success",'Se procesó correctamente la información');
	            }else{
	                $error='Ocurrió un error al procesar su información';
	                $this->session->set_userdata("error",$error);            
	            }            
	        }
	        redirect('mainpanel/banner_pagina/edit/'.$id);
	    }

	}
?>