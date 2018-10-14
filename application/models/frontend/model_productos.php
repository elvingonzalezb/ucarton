<?php 
    class Model_productos extends CI_Model {
        function __construct() {
            parent::__construct();
        }
        //detalle producto
        public function getproducto($id)
        {
            $this->db->where('id_foto', $id);
            $query = $this->db->get("productos");
            return $query->row_array();
        }
        public function getProductosNuevos()
        {
            $this->db->order_by('id_foto', 'desc');
            $this->db->limit(4);
            $query = $this->db->get("productos");
            return $query->result_array();
        }
      /*
       public function getListar($per_page) {
            $this->db->order_by("id_foto", "desc");
            $query = $this->db->get("productos", $per_page, $this->uri->segment(2));
            return $query->result_array();
        }

        public function getListarS() {
            $this->db->order_by("orden", "desc");
            $this->db->limit(8);
            $query = $this->db->get("productos");
            return $query->result_array();
        }

        public function getarticulo($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get("productos");
            return $query->row_array();
        }

        

        public function getCategorias()
        {
            $this->db->order_by("orden", "desc");
            //$this->db->limit(8);
            $query = $this->db->get("categorias");
            return $query->result_array();
        }

        public function numproductos()
        {
            $query = $this->db->get("productos");
            return $query->num_rows();
        }*/

    }
?>
