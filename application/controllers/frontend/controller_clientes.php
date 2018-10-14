<?php
    class Controller_clientes extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('frontend/Model_index');
            $this->load->model("frontend/Model_clientes");
            $this->load->model("frontend/Model_servicios");
            $this->load->library("pagination");
        }
        function index()
        {
            $dataPrincipal=array();

            $config['base_url'] = base_url().'clientes/';
            $config['total_rows'] = $this->Model_clientes->numclientes();
            $config['per_page'] = 6;
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
            
            $seccion                        = 'clientes';
            $texto_web                      = getInfo($seccion);
            $dataPrincipal["seccion"]       = $seccion;
            $dataPrincipal["title"]         = $texto_web->title;
            $dataPrincipal["description"]   = $texto_web->description;
            $dataPrincipal["texto_web"]     = $texto_web;
            $dataPrincipal["cuerpo"]        = 'clientes_view';

            $dataPrincipal["clientes"] = $this->Model_clientes->getListar($config['per_page']);
            $dataPrincipal["paginacion"] = $this->pagination->create_links();
            $dataPrincipal["recent"] = $this->Model_servicios->getListarS();
            
            //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);

            $this->load->view("frontend/includes/template", $dataPrincipal);

        }
       
        
    }
?>