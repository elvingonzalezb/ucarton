<?php 
	class Controller_datos extends CI_Controller 
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library("validacion");
			$this->load->model("mainpanel/Model_misdatos");

		}
		public function index()
		{
			$this->validacion->validacion_login();
			// general
			$data["current_section"] = "mis-datos";
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);
	        $data['modal'] = '';
	        $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="admin_inicio";

	        // editar mis datos
	        $idusuario = $this->session->userdata('id_admin');
	        $usuario = $this->Model_misdatos->getUsuario($idusuario);
	        $data["usuario"] = $usuario;
	        $this->load->view("mainpanel/mis-datos/index_view", $data, true);
	        $data["cuerpo"] = "mis-datos/index_view";
	        $this->load->view("mainpanel/includes/template", $data);

		}
	}
?>