
<?php
  class Controller_noticias extends CI_Controller{
    public function __construct(){
      parent::__construct();

    }
    public function index(){
      $dataPrincipal = array();
      $dataPrincipal['cuerpo']    ='noticias_view';
      $dataPrincipal['banners']   =$this->load->view('frontend/includes/view_banner_noticias');

      $this->load->view('frontend/includes/template',$dataPrincipal);
    }

  }
?>