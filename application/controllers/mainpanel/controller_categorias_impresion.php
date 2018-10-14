<?php 
	class Controller_categorias_impresion extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion");
			$this->load->model("mainpanel/model_categorias_impresion");
			$this->load->model("mainpanel/model_productos");
			//$this->load->model("mainpanel/model_comentarios_categorias_impresion");
			$this->load->library('my_upload');
		}

		public function listar()
		{
			$autor = $this->session->userdata('nombre_admin');
			$nivel = $this->session->userdata('nivel');

	       	$data['current_section'] = 'categorias_impresion';
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);
	        $data['modal'] = $this->load->view('mainpanel/banners/modal_banners', true);
      		$this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="categorias_impresion/index_view";

	        $categorias_impresion = $this->model_categorias_impresion->getListacategorias_impresion(0);
	        $data["categorias_impresion"] = $categorias_impresion;
	        $this->load->view("mainpanel/includes/template", $data);
		}

		public function nuevo()
		{
			$this->validacion->validacion_login();
			//**********************************
			$data["current_section"]  = 'categorias_impresion';
			$data["lista_menu"]  = $this->load->view("mainpanel/includes/menu", $data, true);
			$data["cuerpo"] = "categorias_impresion/nuevo_view";
			// ************************************
			$ulti = $this->model_categorias_impresion->ultimo_categorias_impresion();
			$data["ultimo"] = $ulti["orden"] +1;
			$this->load->view("mainpanel/includes/template", $data);
		}

		public function grabar()
		{
			$this->validacion->validacion_login();
			// grabar los datos
			$data["tiene_subcats"]			= $this->input->post("tiene_subcats");
			$data["titulo"]				= $this->input->post("nombre");
			$data["destacado"] 	   		= $this->input->post("destacado");
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

	            	$resultado = $this->model_categorias_impresion->grabarcategorias_impresion($data);
	            	if($resultado==true)
	            	{
	            		$this->session->set_userdata("success", "Se proceso correctamente la información");
						redirect("mainpanel/categorias_impresion/listar");
	            	}
	            	else
	            	{
	            		$error="Ocurrio un error al procesar la información";
	            		$this->session->set_userdata("error", $error);
	            		redirect("mainpanel/categorias_impresion/nuevo");
	            	}
	            }
	            else
	            {
	            	$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/categorias_impresion/nuevo");
	            }
			}
			else
			{
		       		$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/categorias_impresion/nuevo");
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
	        $data['cuerpo']="categorias_impresion/edit_view";
	        $categorias_impresion = $this->model_categorias_impresion->getcategorias_impresion($id);
	        $data['categorias_impresion'] = $categorias_impresion;
	        $this->load->view("mainpanel/includes/template", $data);
	   	}

	   	public function actualizar()
	   	{
	        $this->validacion->validacion_login();
	        // EDITAR Clientes
	        $data = array();
	        $data["tiene_subcats"]			= $this->input->post("tiene_subcats");
			$data["titulo"]			= $this->input->post("nombre");
			$data["destacado"] 		= $this->input->post("destacado");
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
	            if ($this->my_upload->processed == true ) {
	                $data['imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	            } else {
	                $error = $this->my_upload->error;
	                $this->session->set_userdata("error",'FOTO: '.$error);  
	                redirect('mainpanel/categorias_impresion/edit/'.$id_novedad); 
	            }
	        }
	        $result=$this->model_categorias_impresion->updatecategorias_impresion($id_novedad, $data);
	        if($result==true){
	            $this->session->set_userdata("success",'Se procesó correctamente la información');
	        }else{
	            $error='Ocurrió un error al procesar su información '.$error;
	            $this->session->set_userdata("error",$error);            
	        }
	        redirect('mainpanel/categorias_impresion/edit/'.$id_novedad);
   		}
   		
   		public function borrar($id)
   		{
   			$this->validacion->validacion_login();

   			$secciones= $this->model_categorias_impresion->getcategorias_impresion($id);
   			$imagen = $secciones->imagen;
   			@unlink("files/categorias_impresion/".$imagen);

	        $productos 	= $this->model_productos->getLista($id);
	        if($productos){
	        foreach ($productos as $key => $value2) {
	        	$foto = $value2["imagen"];
	        	@unlink("files/productos/".$foto);
	        	$this->model_productos->delete($value2["id_foto"]);
	        }
	    	}else{}
	    	// BORRAMOS SUBCATEGORIAS
	    	$result = $this->model_categorias_impresion->deletesubcategorias($id);
	    	// BORRAMOS LA CATEGORIA
   			$result = $this->model_categorias_impresion->deletecategorias_impresion($id);
   			
   			if($result==true)
   			{
   				$this->session->set_userdata("success", "Su información se procesó correctamente");
   				redirect("mainpanel/categorias_impresion/listar");
   			}
   			else
   			{
   				$this->session->set_userdata("error", "Ocurrió un error al procesar su información");
   				redirect("mainpanel/categorias_impresion/listar");
   			}
   		}

	}
?>