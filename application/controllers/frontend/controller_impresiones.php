<?php
    class Controller_impresiones extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
                $this->load->model("frontend/Model_impresiones");
                $this->load->model("frontend/Model_categorias_impresion");
                $this->load->model('frontend/Model_index');
                $this->load->library("pagination");
                $this->load->library('my_phpmailer');    
                $this->load->helper('captcha');
        }

        function index()
        {
            $dataPrincipal=array();
            $config['base_url']  = base_url().'impresiones/';
            $config['total_rows'] = $this->Model_categorias_impresion->numcategoriasxCat(0);
            $config['per_page'] = 9;
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
            $dataPrincipal["title"]         = $texto_web->title;
            $dataPrincipal["description"]   = $texto_web->description;
            $dataPrincipal["texto_web"]     = $texto_web;
            $dataPrincipal["cuerpo"]        = 'categorias_impresion_view';
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
            $dataPrincipal["categoria"] = $this->Model_categorias_impresion->getListarxCat($config['per_page'], 0);
            $dataPrincipal["paginacion"] = $this->pagination->create_links();
            /**************************PIE DE PAGINA*************************************/
           //menu categoria
            $dataPrincipal["categorias_impresion"] = $this->Model_categorias_impresion->getCategoriasPrincipales();
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
            $dataPrincipal["cuerpo"]        = 'subcategorias_impresion_view';
            $dataPrincipal["subcategorias"] = $this->Model_categorias_impresion->getSubcategorias($padre);
            /**************************PIE DE PAGINA*************************************/
           //menu categoria
            $dataPrincipal["padre"]       = $padre;
            $dataPrincipal["url"]       = $url;
            $dataPrincipal["categorias"] = $this->Model_categorias_impresion->getCategoriasPrincipales(); 

            $dataPrincipal["categoria"] = $this->Model_categorias_impresion->getCategoria($padre); 
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
            $this->load->view("frontend/includes/template", $dataPrincipal);            
        }        

         function impresiones($id_ser_url,$nombre_ser_url)
        {
            //var_dump($dataPrincipal["impresiones"]); return;
            $dataPrincipal=array();
            $dataPrincipal["current"]   = $nombre_ser_url;
            $dataPrincipal["id_categoria"]   = $id_ser_url;

            $config['base_url']  = base_url().'impresiones/'.$id_ser_url.'-'.$nombre_ser_url.'/';
            $config['total_rows'] = $this->Model_categorias_impresion->numprodxcategoria($id_ser_url);
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
            $seccion                        = 'impresiones';
            $texto_web                      = getInfo($seccion);
            $dataPrincipal["seccion"]       = $seccion;
            $dataPrincipal["title"]         = $texto_web->title;
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

            $dataPrincipal["impresiones"] = $this->Model_categorias_impresion->getListarimpresiones($config['per_page'],$id_ser_url);
            $dataPrincipal["paginacion"] = $this->pagination->create_links();
            //$dataPrincipal["recent"] = $this->Model_categorias_impresion->getListarS(); 
    
            $dataPrincipal["categoria"] = $this->Model_categorias_impresion->getCategoria($id_ser_url);
            $dataPrincipal["padre"]       = $id_ser_url;
            $dataPrincipal["url"]       = $nombre_ser_url;
            /**************************SECCIONES Y BANNER DE PAGINA*************************************/
            //menu categoria
            $dataPrincipal["categorias_impresion"] = $this->Model_categorias_impresion->getCategoriasPrincipales();
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);

            /**************************PIE DE PAGINA*************************************/
            $this->load->view("frontend/includes/template", $dataPrincipal);
        }
    
        public function detalle_impresiones($categoria_ser_url, $id_ser_url, $nombre_ser_url)
        {   
            $dataPrincipal=array('');
            $dataPrincipal['current']       = $categoria_ser_url;
            $impresiones = $this->Model_impresiones->getproducto($id_ser_url);
            $dataPrincipal["impresiones"]=$impresiones;
            //print_r($dataPrincipal['current']); return;
            if(!empty($impresiones["title"])){}else{$impresiones["title"]=" ";}         
            if(!empty($impresiones["description"])){}else{$impresiones["description"]=" ";}         
            $seccion                        ="impresiones";
            $texto_web                      = getInfo($seccion);
            $dataPrincipal['seccion']       = $seccion;
            $dataPrincipal['title']         = $impresiones["title"];
            $dataPrincipal['description']   = $impresiones["description"];                        
            $dataPrincipal['texto_web']     = $texto_web;
            $dataPrincipal['cuerpo']        = 'detalle_impresiones_view';
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
            /**************************BANNER  DE PAGINA Y SECCIONES *************************************/
            $dataPrincipal["prod_nuevos"] = $this->Model_impresiones->getimpresionesNuevos(); 
           //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->Model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);
            $this->load->view("frontend/includes/template", $dataPrincipal);
        }
    }
?>