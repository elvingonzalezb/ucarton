<?php
	class Controller_album extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
            $this->load->model('frontend/model_index');
	        $this->load->model("frontend/Model_album");
	        $this->load->model("frontend/model_fotos");
	        $this->load->model('frontend/model_servicios');
	        $this->load->model('frontend/model_articulos');
			$this->load->library("pagination");
	    }
		function index()
		{
			$dataPrincipal=array();

			$config['base_url']	= base_url().'album/';
			$config['total_rows'] = $this->Model_album->numalbum();
			$config['per_page'] = 8;
            $config['uri_segment'] = 2;
            $config['num_links'] = 3;
            $config['full_tag_open'] = '<ul class="nav-links">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = false;
            $config['last_link'] = false;
            $config['first_tag_open'] = '<li class="page-numbers">';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = '<i class="fa fa-caret-left"></i>';
            $config['prev_tag_open'] = '<li class="prev page-numbers">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-caret-right"></i>';
            $config['next_tag_open'] = '<li class="next page-numbers">';
            $config['next_tag_close'] = '</li >';
            $config['last_tag_open'] = '<li class="page-numbers">';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="page-numbers current">';
            $config['cur_tag_close'] = '</li>';
            $config['num_tag_open'] = '<li class="page-numbers">';
            $config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			
			$seccion               			= 'album';
			$texto_web             			= getInfo($seccion);
			$dataPrincipal["seccion"] 		= $seccion;
			$dataPrincipal["title"] 		= $texto_web->title;
			$dataPrincipal["description"] 	= $texto_web->description;
			$dataPrincipal["texto"] 		= $texto_web->texto;
			$dataPrincipal["texto_web"] 	= $texto_web;
			$dataPrincipal["cuerpo"] 		= 'album_view';

   			$dataPrincipal["album"] = $this->Model_album->getListar($config['per_page']);
   			$dataPrincipal["paginacion"] = $this->pagination->create_links();
    
			
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->model_index->getBanner($seccion); 
           	$dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);

			$this->load->view("frontend/includes/template", $dataPrincipal);

		}
		public function detalle_album($id_ser_url, $nombre_ser_url)
		{	
			$dataPrincipal=array('');

			$album = $this->Model_album->getalbum($id_ser_url);
			$dataPrincipal["album"]=$album;

			$seccion                   		="album";
	        $texto_web                      = getInfo($seccion);
	        $dataPrincipal['seccion']       = $seccion;
	        $dataPrincipal['title']         = $album["title"];         
	        $dataPrincipal['description']   = $album["description"];                        
	        $dataPrincipal['texto_web']     = $texto_web;
	        $dataPrincipal['cuerpo']        = 'detalle_album_view';

	        //Galeria
            $dataPrincipal["fotos"] = $this->model_fotos->getLista($id_ser_url);			

                    
            //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->model_index->getBanner($seccion); 
           	$dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);

	        $this->load->view("frontend/includes/template", $dataPrincipal);

		}
		
	}
?>