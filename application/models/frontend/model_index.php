<?php
class Model_index extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

    public function getBanners()
    {
        $this->db->where('banner_estado','A');
        $this->db->order_by('banner_orden');
        $query =  $this->db->get('banners');
        return $query->result_array();
    }

    public function getBanner($seccion)
    {
        $this->db->where('seccion', $seccion);
        $query =  $this->db->get('banner_pagina');
        return $query->row();
    } 

    public function getBannerParallax()
    {
        $query =  $this->db->get('banner_parallax');
        return $query->row();
    }    

    public function getBanners_info()
    {
        $this->db->where('estado','A');
        $this->db->order_by('orden');
        $query =  $this->db->get('banner_externos');
        return $query->result_array();            
    }

    public function getCategorias($padre) {
        $this->db->where('estado','A');
        $this->db->where('padre',$padre);            
        $this->db->order_by('orden');
        $query =  $this->db->get('categorias');
        return $query->result_array();
    }

    public function getContenido($id)
    {
        $this->db->where('id', $id);
        $query =  $this->db->get('textos_web');
        return $query->row();
    }   

    public function getarticulosIndex()
    {
        $this->db->order_by('fecha', 'desc');
        $this->db->limit(3);
        $query = $this->db->get("articulos");
        return $query->result_array();
    }

    public function getcategoriasIndex()
    {
        $this->db->where('destacado', 'SI');
        $this->db->order_by('id', 'desc');
        $this->db->limit(4);
        $query = $this->db->get("categorias");
        return $query->result_array();
    }

    public function getcategoriasfooter()
    {
        $this->db->order_by('id', 'desc');
        $this->db->limit(6);
        $query = $this->db->get("categorias");
        return $query->result_array();
    } 

    public function getproductosIndex()
    {
        $productos = array();
        $query = $this->db
                ->select('*')
                ->from('productos')
                ->where('destacado',1)
                ->order_by('id_foto', 'desc')
                ->limit(8)
                ->get()
                ->result_array();
        for ($i=0; $i < count($query); $i++) { 
            $productos[$i] = $query[$i];
            $productos[$i]['url_cat'] = $this->getCategoriaId($query[$i]['id']);
        }
        return $productos;
    } 

    public function getCategoriaId($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get("categorias");
        $ret = $query->row();
        return $ret->url;
    }
}
?>