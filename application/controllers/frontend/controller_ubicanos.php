<?php
class Controller_ubicanos extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('frontend/model_index');
                $this->load->model('frontend/model_ubicanos');
                $this->load->model('frontend/model_index');
                $this->load->model("frontend/Model_categorias");
	}
	function index()
	{
            // ******************************GENERAL
            $seccion                        ='ubicanos';
            $dataPrincipal=array();
            $texto_web                      = getInfo($seccion);             
            $dataPrincipal['seccion']       = $seccion;
            $dataPrincipal['title']         = $texto_web->title;            
            $dataPrincipal['description']   = $texto_web->description;           
            $dataPrincipal['texto_web']     = $texto_web;                       
            $dataPrincipal['cuerpo']        = 'view_ubicanos';            
            // **************************************

            // CATEGORIAS ****************
                  $dataPrincipal['categorias'] = $this->model_index->getCategorias();   
                  $dataPrincipal['view_izquierdo']    = $this->load->view('frontend/includes/view_izquierda',$dataPrincipal,true);                                        
            // CATEGORIAS ****************

            // DATOS DEL MAPA -----------+
                $dataPrincipal['mapa'] = $this->model_ubicanos->getMapa(2);   
            // DATOS DEL MAPA -----------+                  
                $dataPrincipal["categorias"] = $this->Model_categorias->getListaCategoria();
                $dataPrincipal["categorias_footer"] = $this->Model_categorias->getListaCategoriaR();
           
            $this->load->view("frontend/includes/template", $dataPrincipal);
	}

}
?>