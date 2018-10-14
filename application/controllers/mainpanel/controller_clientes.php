<?php 
	class Controller_clientes extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->library("validacion");
			$this->load->model("mainpanel/Model_clientes");
			$this->load->library('my_upload');


		}

		public function listar()
		{
	       	$data['current_section'] = 'clientes';
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);
      		$this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="clientes/index_view";

	        $clientes = $this->Model_clientes->getListaClientes();
	        $data["clientes"] = $clientes;
	      
	        $this->load->view("mainpanel/includes/template", $data);
	 

		}
		/*public function nuevo()
		{
			$this->validacion->validacion_login();
			//**********************************
			$data["current_section"]  = 'clientes';
			$data["lista_menu"]  = $this->load->view("mainpanel/includes/menu", $data, true);
			$data["cuerpo"] = "clientes/nuevo_view";
			// ************************************
			$ulti = $this->Model_clientes->ultimo_cliente();
			$data["ultimo"] = $ulti["orden"] +1;
			$this->load->view("mainpanel/includes/template", $data);
		}*/

		public function detalle($id)
		{
			$this->validacion->validacion_login();
			$data["current_section"] = 'clientes';
			$data["lista_menu"]  = $this->load->view("mainpanel/includes/menu", $data, true);
			$data["cuerpo"] = "clientes/detalle_view";
			$cliente = $this->Model_clientes->getCliente($id);
			$data["cliente"] = $cliente;
			$this->load->view("mainpanel/includes/template", $data);
		}


		/*public function grabar()
		{
			$this->validacion->validacion_login();
			// grabar los datos
			$data["titulo"]			= $this->input->post("nombre");
			$data["url"]			= $this->input->post("url");
			$data["descripcion"]	= $this->input->post("descripcion");
			$data["destacado"] 		= $this->input->post("destacado");
			$data["orden"] 			= $this->input->post("orden");
			$data["estado"]        	= $this->input->post("estado");
			$data["fecha"] 			= dmY_2_Ymd($this->input->post("fecha"));
			$data["title"] 			= $this->input->post("title");
			$data["description"] 	= $this->input->post("description");


			redirect("mainpanel/clientes/nuevo");
	
		}*/



		public function edit($id)
		{

        $this->validacion->validacion_login();
        // GENERAL *********************************************************
        $data['current_section'] = 'clientes';
        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
        $this->load->view('mainpanel/includes/header_view', $menu, true);
        $this->load->view('mainpanel/includes/footer_view', $data, true); 
        $data['cuerpo']="clientes/edit_view";
        // *****************************************************************
        // 
        // EDIT BANNER
        $cliente = $this->Model_clientes->getCliente($id);
        $data['cliente'] = $cliente;
        $this->load->view("mainpanel/includes/template", $data);
   		}

   		public function actualizar()
   		{
        	$this->validacion->validacion_login();
        	// EDITAR Clientes

        	$data['nombres'] 		= $this->input->post('nombres');
        	$data['apellidos'] 		= $this->input->post('apellidos');
        	$data['razon_social']	= $this->input->post('razon_social');
        	$data['telefono']		= $this->input->post('telefono');
        	$data['email']			= $this->input->post('email');
        	$data['clave']			= $this->input->post('clave');
        	$data['tipo']			= $this->input->post('tipo');
        	$data['estado']			= $this->input->post('estado');

	        $id_cliente = $this->input->post('id');

		    $resultado = $this->Model_clientes->updateCliente($id_cliente, $data);

		    if($resultado == true)
		    {
		        $this->session->set_userdata("success", "Se proceso corretamente la información");
		    }
		    else
		    {
		        $error="Ocurrió un problema al procesar su información".$error;
		        $this->session->set_userdata("error", $error);
		    }
	        
        	redirect('mainpanel/clientes/edit/'.$id_cliente);
  
   		}

   		
   		public function borrar($id)
   		{
   			$this->validacion->validacion_login();
   			$secciones= $this->Model_clientes->getCliente($id);
   			$result = $this->Model_clientes->deleteCliente($id);
			redirect("mainpanel/clientes/listar");
   		}


	}
?>