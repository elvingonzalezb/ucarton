<?php 
    class Model_categorias_impresion extends CI_Model {
        function __construct() {
            parent::__construct();
        }

        public function numcategorias_impresion()
        {
            $this->db->where('estado', 'A');
            $query = $this->db->get("categorias_impresion");
            return $query->num_rows();
        }

        public function numcategoriasxCat($padre)
        {
            $this->db->where('padre', $padre);
            $this->db->where('estado', 'A');
            $query = $this->db->get("categorias_impresion");
            return $query->num_rows();
        }        

        public function numimpresiones()
        {
            $this->db->where('id', 0);
            $query = $this->db->get("fotos");
            return $query->num_rows();
        }

        public function getListar($per_page) {
            $this->db->where('estado', 'A');
            $this->db->order_by("orden", "asc");
            $query = $this->db->get("categorias_impresion", $per_page, $this->uri->segment(2));
            return $query->result_array();
        }

        public function getListarxCat($per_page, $padre) {
            $this->db->where('padre', $padre);
            $this->db->where('estado', 'A');
            $this->db->order_by("orden", "asc");
            $query = $this->db->get("categorias_impresion", $per_page, $this->uri->segment(2));
            return $query->result_array();
        }

        public function getSubcategorias($padre) {
            $this->db->where('padre', $padre);
            $this->db->where('estado', 'A');
            $this->db->order_by("orden", "asc");
            $query = $this->db->get("categorias_impresion");
            return $query->result_array();
        }

        public function getCategorias_impresion()
        {
            $this->db->order_by("orden", "desc");
            $query = $this->db->get("categorias_impresion");
            return $query->result_array();
        }

        public function getCategoria($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get("categorias_impresion");
            return $query->row();
        }

        public function getCategoriasPrincipales()
        {
            $this->db->where('padre', 0);
            $this->db->order_by("orden", "asc");
            $query = $this->db->get("categorias_impresion");
            return $query->result_array();
        }

        public function numprodxcategoria($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get("impresiones");
            return $query->num_rows();
        }

        public function getListarimpresiones($per_page,$id) {
            $this->db->where('id', $id);
            $this->db->order_by("orden", "desc");
            $query = $this->db->get("impresiones", $per_page, $this->uri->segment(3));
            return $query->result_array();
        }
    }
?>