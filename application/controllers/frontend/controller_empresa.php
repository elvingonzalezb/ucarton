<?php 
  class Controller_empresa extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct(); 
               $this->load->model('frontend/model_index');              
    }
    public function index()
    {
      $dataPrincipal=array();
      $seccion                      = "empresa";
      $texto_web                    = getInfo($seccion);
      $dataPrincipal["seccion"]     = $seccion;
      $dataPrincipal["title"]       = $texto_web->title;
      $dataPrincipal["description"] = $texto_web->description;
      $dataPrincipal["texto_web"]   = $texto_web;
      $dataPrincipal["cuerpo"]      = 'empresa_view';

      //Banner por Pagina y Informacion
            $dataPrincipal['banner_pagina']     = $this->model_index->getBanner($seccion); 
            $dataPrincipal['banner_pagina']     = $this->load->view('frontend/includes/view_banner_pagina',$dataPrincipal, true);

        $this->load->view("frontend/includes/template", $dataPrincipal);
    }
  } 
?>