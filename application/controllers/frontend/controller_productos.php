<?php
    class Controller_productos extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
                $this->load->model("frontend/Model_productos");
                $this->load->model("frontend/Model_categorias");
                $this->load->model('frontend/Model_index');
                $this->load->library("pagination");
                $this->load->library('my_phpmailer');    
                $this->load->helper('captcha');
        }

        function index()
        {
            $dataPrincipal=array();
            $config['base_url']  = base_url().'productos/';
            $config['total_rows'] = $this->Model_categorias->numcategoriasxCat(0);
            $config['per_page'] = 6;
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

            $this->pagination->initialize($config);
            $seccion                        = 'categorias';
            $texto_web                      = getInfo($seccion);
            $dataPrincipal["seccion"]       = $seccion;
            $dataPrincipal["title"]         = $texto_web->title;
            $dataPrincipal["description"]   = $texto_web->description;
            $dataPrincipal["texto_web"]     = $texto_web;
            $dataPrincipal["cuerpo"]        = 'categorias_view';
            $dataPrincipal["categoria"] = $this->Model_categorias->getListarxCat($config['per_page'], 0);
            $dataPrincipal["paginacion"] = $this->pagination->create_links();
            //$dataPrincipal["recent"] = $this->Model_categorias->getListarS(); 
            /**************************PIE DE PAGINA*************************************/
           //menu categoria
            $dataPrincipal["categorias"] = $this->Model_categorias->getCategoriasPrincipales(); 
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
            $this->load->view("frontend/includes/template", $dataPrincipal);
        }

        function subcategorias($padre, $url)
        {
            $seccion                        = 'categorias';
            $texto_web                      = getInfo($seccion);
            $dataPrincipal["seccion"]       = $seccion;
            $dataPrincipal["title"]         = $texto_web->title;
            $dataPrincipal["description"]   = $texto_web->description;
            $dataPrincipal["texto_web"]     = $texto_web;
            $dataPrincipal["cuerpo"]        = 'subcategorias_view';
            $dataPrincipal["subcategorias"] = $this->Model_categorias->getSubcategorias($padre);
            /**************************PIE DE PAGINA*************************************/
           //menu categoria
            $dataPrincipal["padre"]       = $padre;
            $dataPrincipal["url"]       = $url;
            $dataPrincipal["categorias"] = $this->Model_categorias->getCategoriasPrincipales(); 

            $dataPrincipal["categoria"] = $this->Model_categorias->getCategoria($padre); 
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
            $this->load->view("frontend/includes/template", $dataPrincipal);            
        }

         function productos($id_ser_url,$nombre_ser_url)
        {
            //var_dump($dataPrincipal["productos"]); return;
            $dataPrincipal=array();
            $dataPrincipal["current"]   = $nombre_ser_url;
            $dataPrincipal["id_categoria"]   = $id_ser_url;

            $config['base_url']  = base_url().'productos/'.$id_ser_url.'-'.$nombre_ser_url.'/';
            $config['total_rows'] = $this->Model_categorias->numprodxcategoria($id_ser_url);
            $config['per_page'] = 6;
            $config['uri_segment'] = 3;
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

            $this->pagination->initialize($config);
            $seccion                        = 'productos';
            $texto_web                      = getInfo($seccion);
            $dataPrincipal["seccion"]       = $seccion;
            $dataPrincipal["title"]         = $texto_web->title;
            $dataPrincipal["description"]   = $texto_web->description;
            $dataPrincipal["texto_web"]     = $texto_web;
            $dataPrincipal["cuerpo"]        = 'productos_view';

            $dataPrincipal["productos"] = $this->Model_categorias->getListarProductos($config['per_page'],$id_ser_url);
            $dataPrincipal["paginacion"] = $this->pagination->create_links();
            //$dataPrincipal["recent"] = $this->Model_categorias->getListarS(); 
    
            $dataPrincipal["categoria"] = $this->Model_categorias->getCategoria($id_ser_url);
            $dataPrincipal["padre"]       = $id_ser_url;
            $dataPrincipal["url"]       = $nombre_ser_url;
            /**************************SECCIONES Y BANNER DE PAGINA*************************************/
            //menu categoria
            $dataPrincipal["categorias"] = $this->Model_categorias->getCategoriasPrincipales(); 
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
            /**************************PIE DE PAGINA*************************************/
            $this->load->view("frontend/includes/template", $dataPrincipal);
        }
       

        public function detalle_productos($categoria_ser_url, $id_ser_url, $nombre_ser_url)
        {   
            $dataPrincipal=array('');
            $dataPrincipal['current']       = $categoria_ser_url;

            $productos = $this->Model_productos->getproducto($id_ser_url);
            $dataPrincipal["productos"]=$productos;
            //print_r($dataPrincipal['current']); return;

            if(!empty($productos["title"])){}else{$productos["title"]=" ";}         
            if(!empty($productos["description"])){}else{$productos["description"]=" ";}         
            $seccion                        ="productos";
            $texto_web                      = getInfo($seccion);
            $dataPrincipal['seccion']       = $seccion;
            $dataPrincipal['title']         = $productos["title"];
            $dataPrincipal['description']   = $productos["description"];                        
            $dataPrincipal['texto_web']     = $texto_web;
            $dataPrincipal['cuerpo']        = 'detalle_productos_view';
            /**************************BANNER  DE PAGINA Y SECCIONES *************************************/
            $dataPrincipal["prod_nuevos"] = $this->Model_productos->getProductosNuevos(); 
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);         
            $this->load->view("frontend/includes/template", $dataPrincipal);
        }

         function impresiones()
        {
            $dataPrincipal=array();

            $config['base_url']  = base_url().'impresiones/';
            $config['total_rows'] = $this->Model_categorias->numimpresiones();
            $config['per_page'] = 8;
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

            $this->pagination->initialize($config);

            $seccion                        = 'impresiones';
            $texto_web                      = getInfo($seccion);
            $dataPrincipal["seccion"]       = $seccion;
            $dataPrincipal["title"]         = $texto_web->titulo;
            $dataPrincipal["description"]   = $texto_web->description;
            $dataPrincipal["texto_web"]     = $texto_web;
            $dataPrincipal["cuerpo"]        = 'impresiones_view';
            //******************TEXTO DE GALERIA*************************
            $seccion2                        = 'album';
            $texto_web2                      = getInfo($seccion2);
            $dataPrincipal["title2"]         = $texto_web2->title;
            $dataPrincipal["description2"]   = $texto_web2->description;
            $dataPrincipal["texto_web2"]     = $texto_web2;
            //******************TEXTO DE GALERIA*************************
            //******************TEXTO DE COTIZACION*************************
            $seccion3                        = 'pedidos';
            $texto_web3                      = getInfo($seccion3);
            $dataPrincipal["texto_web3"]     = $texto_web3;
            //******************TEXTO DE COTIZACION*************************
            //******************captcha*************************
                    $vals = array(
                        'img_path' => './assets/frontend/captcha/',
                        //'img_url' => 'http://localhost/industrialvyg/assets/frontend/captcha/',
                        //'img_url' => 'http://localhost:8080/pnp/assets/frontend/captcha/',
                        'img_url' => 'http://www.paginasadministrables.info/py_industrialvyg/assets/frontend/captcha/',
                        'font_path' => './assets/frontend/fonts/MyriadPro-Bold.ttf',
                        'img_width' => '130',
                        'img_height' => 40
                       );
                    $cap = create_captcha($vals);
                    $data2 = array(
                       'captcha_time' => $cap['time'],
                       'ip_address' => $this->input->ip_address(),
                       'word' => $cap['word']
                       );
                    $this->session->set_userdata($data2);
                    // store image html code in a variable
                    $dataPrincipal['cap_img']= $cap['image'];
                    $dataPrincipal['codigo_secreto']= $cap['word'];
                    
                   // store the captcha word in a session
                    $this->session->set_userdata('word', $cap['word']);
            //******************fin captcha*********************

            $dataPrincipal["categoria"] = $this->Model_categorias->getListarimpresiones($config['per_page']);
            $dataPrincipal["paginacion"] = $this->pagination->create_links();

            //$dataPrincipal["recent"] = $this->Model_categorias->getListarS(); 
    
            /**************************PIE DE PAGINA*************************************/
           //menu categoria
            //$dataPrincipal["categorias"] = $this->Model_categorias->getcategorias(); 
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
            $this->load->view("frontend/includes/template", $dataPrincipal);
        }
    
    }
?>