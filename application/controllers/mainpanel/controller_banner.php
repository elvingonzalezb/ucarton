<?php 
	class Controller_banner extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion");
			$this->load->model("mainpanel/model_banners");
        	$this->load->library('my_upload');

		}
		public function index()
		{
	       	$data['current_section'] = 'banners';
	        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $data['modal'] = $this->load->view('mainpanel/banners/modal_banners', true);
	        $data['cuerpo']="banners/index_view";

	        $data["banners"] = $this->model_banners->getListaBanners();

	        $this->load->view("mainpanel/includes/template", $data);
	 

		}
		public function edit($id)
		{
			$this->validacion->validacion_login();
			// general
			$data["current_section"] = 'banners';
			$data["lista_menu"] = $this->load->view("mainpanel/includes/menu", $data, true);
			$data["cuerpo"]= "banners/edit_view";

			$banner = $this->model_banners->getBanners($id);
			$data["banner"]=$banner;
			$this->load->view("mainpanel/includes/template", $data);
		}
		public function actualizar()
		{
	        $this->validacion->validacion_login();
	        // EDITAR BANNER
	        $banner_id 				= $this->input->post('banner_id');
	        $banner_titulo 			= $this->input->post('banner_titulo');
	        $banner_sumilla 		= $this->input->post("banner_sumilla");
	        $banner_orden 			= $this->input->post('banner_orden');
	        $banner_enlace 			= $this->input->post('banner_enlace');
	        $banner_texto_enlace 	= $this->input->post('banner_texto_enlace');	        
	        $banner_estado 			= $this->input->post('banner_estado');
	        $banner_imagen_now 		= $this->input->post('banner_imagen_now');

	        $data = array(
	            'banner_titulo'    		=> $banner_titulo,
	            'banner_sumilla'   		=> $banner_sumilla,           
	            'banner_enlace'    		=> $banner_enlace,
	            'banner_texto_enlace'   => $banner_texto_enlace,
	            'banner_orden'     		=> $banner_orden, 
	            'banner_estado'    		=> $banner_estado
	        );
	        
	        $this->my_upload->upload($_FILES["banner_imagen"]);
	        if ( $this->my_upload->uploaded == true  )
	        {
	            $this->my_upload->allowed          = array('image/*');
	            $this->my_upload->image_resize     = true;
	            $this->my_upload->image_ratio_crop = true;
	            $this->my_upload->image_x          = 1920;
	            $this->my_upload->image_y          = 600;

	            $this->my_upload->process('./files/banners/');
	            if ( $this->my_upload->processed == true ) {
	                $data['banner_imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean(); 
	                @unlink('./files/banners/'.$banner_imagen_now);
	                
	            } else {
	                $error = $this->my_upload->error;
	            }
	        }       
	        
	        if(isset($error)){
	            $this->session->set_userdata("error",$error);             
	        }else{
	            $result=$this->model_banners->updateBanner($banner_id, $data);
	            if($result==true){
	                $this->session->set_userdata("success",'Se procesó correctamente la información');
	            }else{
	                $error='Ocurrió un error al procesar su información';
	                $this->session->set_userdata("error",$error);            
	            }            
	        }
	        redirect('mainpanel/banners/edit/'.$banner_id);
	    }

	    public function nuevo() {
	        $this->validacion->validacion_login();
	        // GENERAL *********************************************************
	        $data['current_section'] = 'banners';
	        $data['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $data['cuerpo']="banners/nuevo_view";
	        // ***************************************************************** 
	        $ulti=$this->model_banners->ultBanner();
	        $data['ultimo']=$ulti['banner_orden'] + 1;
	        $this->load->view("mainpanel/includes/template", $data);        
	    }

	    public function grabar()
	    {
	        $this->validacion->validacion_login();
	        // GRABAR BANNER
	        $banner_titulo 			= $this->input->post("banner_titulo");
	        $banner_sumilla 		= $this->input->post("banner_sumilla");
	        $banner_enlace 			= $this->input->post('banner_enlace');
	        $banner_texto_enlace 	= $this->input->post('banner_texto_enlace');
	        $banner_orden 			= $this->input->post('banner_orden');
	        $banner_estado 			= $this->input->post('banner_estado');

	        $data = array(
	            'banner_titulo' 		=>$banner_titulo,
	            'banner_sumilla' 		=>$banner_sumilla,
	            'banner_enlace'    		=>$banner_enlace,
	            'banner_texto_enlace'	=>$banner_texto_enlace,
	            'banner_orden'     		=>$banner_orden, 
	            'banner_estado'    		=>$banner_estado
	        );
	        
	        $this->my_upload->upload($_FILES["banner_imagen"]);
	        if ( $this->my_upload->uploaded == true  )
	        {
	            $this->my_upload->allowed          = array('image/*');
	            $this->my_upload->image_resize     = true;
	            $this->my_upload->image_ratio_crop = true;
	            $this->my_upload->image_x          = 1920;
	            $this->my_upload->image_y          = 600;

	            $this->my_upload->process('./files/banners/');
	            if ( $this->my_upload->processed == true )
	            {
	                $data['banner_imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	                $result = $this->model_banners->grabarBanner($data);
	                if($result==true){
	                    $this->session->set_userdata("success",'Se procesó correctamente la información');
	                    redirect('mainpanel/banners');
	                }else{
	                    $error='Ocurrió un error al procesar su información ';
	                    $this->session->set_userdata("error",$error);            
	                    redirect('mainpanel/banners/nuevo');
	                }                    
	            }else{
	                $error = $this->my_upload->error;
	                $this->session->set_userdata("error",$error);                
	                redirect('mainpanel/banners/nuevo');
	            }
	        }
	        else
	        {
	            $error = $this->my_upload->error;
	            $this->session->set_userdata("error",$error);
	            redirect('mainpanel/banners/nuevo');
	        }
	    }

	    public function delete($id) {
	        $this->validacion->validacion_login();
	        $banner = $this->model_banners->getBanners($id);
	        $imagen=$banner->imagen;
	        @unlink('files/banners/'.$imagen);
	        $result=$this->model_banners->deleteBanner($id);
	        if($result == true){
	            $this->session->set_userdata("success","Su información se proceso con exito");
	            redirect('mainpanel/banners');
	        }else{
	            $this->session->set_userdata("error","Ocurrio un problema al procesar su informacion");            
	            redirect('mainpanel/banners');        
	        }
	    }

	}
?>