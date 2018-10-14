<?php
    class Controller_articulos extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
                $this->load->model("frontend/Model_articulos");
                $this->load->model('frontend/Model_index');
                $this->load->library("pagination");
        }
        function index()
        {
            $dataPrincipal=array();

           $config['base_url']  = base_url().'articulos/';
            $config['total_rows'] = $this->Model_articulos->numArticulos();
            $config['per_page'] = 2;
            $config['uri_segment'] = 2;
            $config['num_links'] = 3;
            $config['full_tag_open'] = '<ul class="nav-links pagination page_changer">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = false;
            $config['last_link'] = false;
            $config['first_tag_open'] = '<li class="page-numbers ">';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = '<i class="fa fa-caret-left"></i>';
            $config['prev_tag_open'] = '<li class="prev page-numbers">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-caret-right"></i>';
            $config['next_tag_open'] = '<li class="next page-numbers">';
            $config['next_tag_close'] = '</li >';
            $config['last_tag_open'] = '<li class="page-numbers">';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li ><a class="active transition3s">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li class="page-numbers">';
            $config['num_tag_close'] = '</li>';
/*
            <ul class="pagination page_changer">
            <li><a href="#" class="active transition3s">1</a></li>
            <li><a href="#" class="transition3s">2</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
          </ul>*/

            $this->pagination->initialize($config);

            $seccion                        = 'articulos';
            $texto_web                      = getInfo($seccion);
            $dataPrincipal["seccion"]       = $seccion;
            $dataPrincipal["title"]         = $texto_web->title;
            $dataPrincipal["description"]   = $texto_web->description;
            $dataPrincipal["texto_web"]     = $texto_web;
            $dataPrincipal["cuerpo"]        = 'articulos_view';

            $dataPrincipal["articulos"] = $this->Model_articulos->getListar($config['per_page']);
            $dataPrincipal["paginacion"] = $this->pagination->create_links();
            $dataPrincipal["recent"] = $this->Model_articulos->getListarS(); 
    
            /**************************PIE DE PAGINA*************************************/
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);


            $this->load->view("frontend/includes/template", $dataPrincipal);

        }

        public function detalle_articulos($id_ser_url, $nombre_ser_url)
        {   
            //print_r($id_ser_url); return;
            $dataPrincipal=array('');

            $articulos = $this->Model_articulos->getArticulos($id_ser_url);
            $dataPrincipal["articulos"]=$articulos;

            $seccion                        ="articulos";
            $texto_web                      = getInfo($seccion);
            $dataPrincipal['seccion']       = $seccion;
            $dataPrincipal['title']         = $articulos["title"];         
            $dataPrincipal['description']   = $articulos["description"];                        
            $dataPrincipal['texto_web']     = $texto_web;
            $dataPrincipal['cuerpo']        = 'detalle_articulos_view';

            $dataPrincipal["recent"] = $this->Model_articulos->getListarS(); 
    
            /**************************PIE DE PAGINA*************************************/
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
            
            
            $this->load->view("frontend/includes/template", $dataPrincipal);



        }
    }
?>