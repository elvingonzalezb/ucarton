<?php 
	class Controller_subcategorias_impresion extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion");
			$this->load->model("mainpanel/model_subcategorias_impresion");
			$this->load->model("mainpanel/model_impresiones");
			$this->load->library('my_upload');
		}

		public function listar($id)
		{
			$autor = $this->session->userdata('nombre_admin');
			$nivel = $this->session->userdata('nivel');

	       	$data['current_section'] = 'categorias_impresion';
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);
	        $data['modal'] = $this->load->view('mainpanel/banners/modal_banners', true);
      		$this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="subcategorias_impresion/index_view";
	        $data['id_categoria'] = $id;

	        $data["subcategorias"] = $this->model_subcategorias_impresion->getLista($id);   
	        $this->load->view("mainpanel/includes/template", $data);
		}

		public function nuevo()
		{
			$this->validacion->validacion_login();
			//**********************************
			$data["current_section"]  = 'categorias_impresion';
			$data["lista_menu"]  = $this->load->view("mainpanel/includes/menu", $data, true);
			$data["cuerpo"] = "subcategorias_impresion/nuevo_view";
			// ************************************
        	$data["categorias"] = $this->model_subcategorias_impresion->getLista(0);
			$this->load->view("mainpanel/includes/template", $data);
		}

		public function grabar()
		{
			$this->validacion->validacion_login();
			// grabar los datos
			$data['padre']				= $this->input->post('padre');
			$data["titulo"]				= $this->input->post("nombre");
			$data["orden"]         		= $this->input->post("orden");
			$data["estado"]        		= $this->input->post("estado");
			
			$data["url"]				= $this->input->post("url");
			$data["title"]				= $this->input->post("title");
			$data["description"]		= $this->input->post("description");
		
			$this->my_upload->upload($_FILES["novedades"]);
			if($this->my_upload->uploaded == true)
			{
	            $this->my_upload->allowed          = array('image/*');
	            $this->my_upload->image_resize     = true;
	            $this->my_upload->image_ratio_crop = true;
	            $this->my_upload->image_x          = 900;
	            $this->my_upload->image_y          = 600;

	            $this->my_upload->process('./files/categorias_impresion/');
	            if($this->my_upload->processed == true)
	            {
	            	$data["imagen"] = $this->my_upload->file_dst_name;
	            	$this->my_upload->clean();

	            	$resultado = $this->model_subcategorias_impresion->grabarcategorias($data);
	            	if($resultado==true)
	            	{
	            		$this->session->set_userdata("success", "Se proceso correctamente la información");
						redirect("mainpanel/subcategorias_impresion/listar/".$data['padre']);
	            	}
	            	else
	            	{
	            		$error="Ocurrio un error al procesar la información";
	            		$this->session->set_userdata("error", $error);
	            		redirect("mainpanel/subcategorias_impresion/nuevo");
	            	}
	            }else
	            {
	            	$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/subcategorias_impresion/nuevo");
	            }
			}
			else
			{
		       		$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/subcategorias_impresion/nuevo");
	     	}
		}

		public function edit($id)
		{
	        $this->validacion->validacion_login();
	        // GENERAL *********************************************************
	        $data['current_section'] = 'categorias_impresion';
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);
	        $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="subcategorias_impresion/edit_view";
	        $data["categorias"] = $this->model_subcategorias_impresion->getLista(0);
	        $data['subcategoria'] = $this->model_subcategorias_impresion->getcategorias($id);
	        $this->load->view("mainpanel/includes/template", $data);
	   	}

	   	public function actualizar()
	   	{
	        $this->validacion->validacion_login();
	        // EDITAR CATEGORIA
	        $data = array();
			$data['padre']			= $this->input->post('padre');
			$data['id']				= $this->input->post('id');
			$data["titulo"]			= $this->input->post("nombre");
			$data["orden"] 			= $this->input->post("orden");
			$data["estado"]        	= $this->input->post("estado"); 

			$data["url"]				= $this->input->post("url");
			$data["title"]			= $this->input->post("title");
			$data["description"]	= $this->input->post("description");    
	        $id_novedad				= $this->input->post('id');         
	        $this->my_upload->upload($_FILES["imgnovedad"]);
	        if ( $this->my_upload->uploaded == true  )
	        {
	            $this->my_upload->allowed          = array('image/*');
	            $this->my_upload->image_resize     = true;
	            $this->my_upload->image_ratio_crop = true;
	            $this->my_upload->image_x          = 900;
	            $this->my_upload->image_y          = 600;

	            $this->my_upload->process('./files/categorias_impresion/');
	            if ($this->my_upload->processed == true ) 
	            {
	                $data['imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	            }
	            else
	            {
	                $error = $this->my_upload->error;
	                $this->session->set_userdata("error",'FOTO: '.$error);  
	                redirect('mainpanel/subcategorias_impresion/edit/'.$id_novedad); 
	            }
	        }
	        $result=$this->model_subcategorias_impresion->updatecategorias($id_novedad, $data);
	        if($result==true)
	        {
	            $this->session->set_userdata("success",'Se procesó correctamente la información');
	        }
	        else
	        {
	            $error='Ocurrió un error al procesar su información '.$error;
	            $this->session->set_userdata("error",$error);            
	        }                              
	        redirect('mainpanel/subcategorias_impresion/edit/'.$id_novedad);
   		}
   		
   		public function borrar($id)
   		{
   			$this->validacion->validacion_login();

   			$secciones = $this->model_subcategorias_impresion->getcategorias($id);
   			$imagen = $secciones->imagen;
   			$padre = $secciones->padre;
   			@unlink("files/categorias/".$imagen);

	        $productos 	= $this->model_impresiones->getLista($id);
	        if($productos){
		        foreach ($productos as $key => $value2) {
		        	$foto = $value2["imagen"];
		        	@unlink("files/impresiones/".$foto);
		        	$this->model_impresiones->delete($value2["id_foto"]);
		        }
	    	}else{}
   			$result = $this->model_subcategorias_impresion->deletecategorias($id);
   			
   			if($result==true)
   			{
   				$this->session->set_userdata("success", "Su información se procesó correctamente");
   				redirect("mainpanel/subcategorias_impresion/listar/".$padre);
   			}
   			else
   			{
   				$this->session->set_userdata("error", "Ocurrió un error al procesar su información");
   				redirect("mainpanel/subcategorias_impresion/listar/".$padre);
   			}
   		}
	}
?>