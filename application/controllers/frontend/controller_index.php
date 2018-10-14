<?php 
	class Controller_index extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct(); 
               $this->load->model('frontend/model_index');
               $this->load->model('frontend/model_servicios');
               $this->load->model('frontend/model_clientes');
               $this->load->model('frontend/model_articulos');
		}

		public function index()
		{
			$dataPrincipal=array();
			$seccion                   		= "index";
			$texto_web                 		= getInfo($seccion);
			$dataPrincipal["seccion"]  		= $seccion;
			$dataPrincipal["title"]    		= $texto_web->title;
			$dataPrincipal["description"] = $texto_web->description;
			$dataPrincipal["texto_web"]  	= $texto_web;
			$dataPrincipal["cuerpo"] 		  = 'index_view';
			//banner y secciones	
            $dataPrincipal['articulosindex']     	= $this->model_index->getarticulosIndex();
           	$dataPrincipal['productos']     	= $this->model_index->getproductosIndex();
           	//$dataPrincipal['categoriasindex']     	= $this->model_index->getcategoriasIndex();
            $dataPrincipal['banners']     	= $this->model_index->getBanners();           
            $dataPrincipal['banners']     	= $this->load->view('frontend/includes/view_banner',$dataPrincipal, true);    
            //Footer//
     		$this->load->view("frontend/includes/template", $dataPrincipal);
		}
	}
?>