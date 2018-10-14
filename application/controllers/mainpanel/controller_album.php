<?php 
	class Controller_album extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion");
			$this->load->model("mainpanel/model_album");
			$this->load->model("mainpanel/model_fotos");
			//$this->load->model("mainpanel/model_comentarios_album");
			$this->load->library('my_upload');
		}

		public function listar()
		{
			$autor = $this->session->userdata('nombre_admin');
			$nivel = $this->session->userdata('nivel');

	       	$data['current_section'] = 'album';
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);
	        $data['modal'] = $this->load->view('mainpanel/banners/modal_banners', true);
      		$this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="album/index_view";

	        if($nivel=="general"){
	        	$album = $this->model_album->getListaAlbum();
	        }else{$album = $this->model_album->getListaAlbumAutor($autor);}

	        $data["album"] = $album;
	      
	        $this->load->view("mainpanel/includes/template", $data);
		}

		public function nuevo()
		{
			$this->validacion->validacion_login();
			//**********************************
			$data["current_section"]  = 'album';
			$data["lista_menu"]  = $this->load->view("mainpanel/includes/menu", $data, true);
			$data["cuerpo"] = "album/nuevo_view";
			// ************************************
			$ulti = $this->model_album->ultimo_Album();
			$data["ultimo"] = $ulti["orden"] +1;
			$this->load->view("mainpanel/includes/template", $data);
		}

		public function grabar()
		{
			$this->validacion->validacion_login();
			// grabar los datos
			$data["titulo"]				= $this->input->post("nombre");
			$data["descripcion_corta"]  = $this->input->post("descripcion_corta");
			$data["descripcion"]   		= $this->input->post("descripcion");
			$data["destacado"] 	   		= $this->input->post("destacado");
			$data["orden"]         		= $this->input->post("orden");
			$data["estado"]        		= $this->input->post("estado");
			
			$data["url"]				= $this->input->post("url");
			$data["title"]				= $this->input->post("title");
			$data["description"]		= $this->input->post("description");
			$data["autor"]				= $this->session->userdata('nombre_admin');
		
			$this->my_upload->upload($_FILES["novedades"]);
			if($this->my_upload->uploaded == true)
			{
	            $this->my_upload->allowed          = array('image/*');
	            $this->my_upload->image_resize     = true;
	            $this->my_upload->image_ratio_crop = true;
	            // $this->my_upload->image_x          = 201;
	            // $this->my_upload->image_y          = 150;
	            $this->my_upload->image_x          = 900;
	            $this->my_upload->image_y          = 600;

	            $this->my_upload->process('./files/album/');
	            if($this->my_upload->processed == true)
	            {
	            	$data["imagen"] = $this->my_upload->file_dst_name;
	            	$this->my_upload->clean();

	            	$resultado = $this->model_album->grabarAlbum($data);
	            	if($resultado==true)
	            	{
	            		$this->session->set_userdata("success", "Se proceso correctamente la información");
						redirect("mainpanel/album/listar");
	            	}
	            	else
	            	{
	            		$error="Ocurrio un error al procesar la información";
	            		$this->session->set_userdata("error", $error);
	            		redirect("mainpanel/album/nuevo");
	            	}
	            }else
	            {
	            	$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/album/nuevo");
	            }
			}
			else
			{
		       		$error= $this->my_upload->error;
	            	$this->session->set_userdata("error", 'IMAGEN:'.$error);
	            	redirect("mainpanel/album/nuevo");
	     	}
		}

		public function edit($id)
		{

	        $this->validacion->validacion_login();
	        // GENERAL *********************************************************
	        $data['current_section'] = 'album';
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);

	        $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="album/edit_view";
	        // *****************************************************************
	        // 
	        // EDIT BANNER
	        $album = $this->model_album->getAlbum($id);
	        $data['album'] = $album;
	        $this->load->view("mainpanel/includes/template", $data);
	   		}

	   		public function actualizar()
	   		{
	        $this->validacion->validacion_login();
	        // EDITAR Clientes
	        $data = array();

				$data["titulo"]			= $this->input->post("nombre");
				$data["descripcion_corta"]    = $this->input->post("descripcion_corta");
				$data["descripcion"]    = $this->input->post("descripcion");
				$data["destacado"] 		= $this->input->post("destacado");
				$data["orden"] 			= $this->input->post("orden");
				$data["estado"]        	= $this->input->post("estado"); 
				
				$data["url"]				= $this->input->post("url");
				$data["title"]			= $this->input->post("title");
				$data["description"]	= $this->input->post("description");


		        $imgatng        		= $this->input->post('imgatng');        
		        $id_novedad				= $this->input->post('id');         

	        $this->my_upload->upload($_FILES["imgnovedad"]);
	        if ( $this->my_upload->uploaded == true  )
	        {
	            $this->my_upload->allowed          = array('image/*');
	            $this->my_upload->image_resize     = true;
	            $this->my_upload->image_ratio_crop = true;
	            // $this->my_upload->image_x          = 201;
	            // $this->my_upload->image_y          = 150;
	            $this->my_upload->image_x          = 900;
	            $this->my_upload->image_y          = 600;

	            $this->my_upload->process('./files/album/');
	            if ($this->my_upload->processed == true ) {
	                $data['imagen'] = $this->my_upload->file_dst_name;
	                $this->my_upload->clean();
	            } else {
	                $error = $this->my_upload->error;
	                $this->session->set_userdata("error",'FOTO: '.$error);  
	                redirect('mainpanel/album/edit/'.$id_novedad); 
	            }
	        }      

	        if(isset($data['imagen'])) @unlink('./files/album/'.$imgatng);
	        $result=$this->model_album->updateAlbum($id_novedad, $data);
	        if($result==true){
	            $this->session->set_userdata("success",'Se procesó correctamente la información');
	        }else{
	            $error='Ocurrió un error al procesar su información '.$error;
	            $this->session->set_userdata("error",$error);            
	        }                       
	        
	        redirect('mainpanel/album/edit/'.$id_novedad);
  
   		}
   		
   		public function borrar($id)
   		{
   			$this->validacion->validacion_login();

   			$secciones= $this->model_album->getAlbum($id);
   			$imagen = $secciones->imagen;
   			@unlink("files/album/".$imagen);

   			//$comentarios 	= $this->model_comentarios_album->getListaRecibidos($id);
	        //foreach ($comentarios as $key => $value) {
	        //	$result2 = $this->model_comentarios_album->deleteComentario($value["comentario_id"]);
	       // }

	        $fotos 	= $this->model_fotos->getLista($id);
	        if($fotos){
	        foreach ($fotos as $key => $value2) {
	        	$foto = $value2["imagen"];
	        	@unlink("files/fotos/".$foto);
	        	$this->model_fotos->delete($value2["id_foto"]);
	        }
	    	}else{}

   			$result = $this->model_album->deleteAlbum($id);
   			
   			if($result==true)
   			{
   				$this->session->set_userdata("success", "Su información se procesó correctamente");
   				redirect("mainpanel/album/listar");
   			}
   			else
   			{
   				$this->session->set_userdata("error", "Ocurrió un error al procesar su información");
   				redirect("mainpanel/album/listar");
   			}
   		}


	}
?>
