<?php 
    class Model_articulos extends CI_Model {
        function __construct() {
            parent::__construct();
        }
        public function getListar($per_page) {
            $this->db->order_by("fecha", "desc");
            $query = $this->db->get("articulos", $per_page, $this->uri->segment(2));
            return $query->result_array();
        }

        public function getListarS() {
            $this->db->order_by("fecha", "desc");
            $this->db->limit(8);
            $query = $this->db->get("articulos");
            return $query->result_array();
        }

        public function getarticulo($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get("articulos");
            return $query->row_array();
        }

        public function getarticulosIndex()
        {
            $this->db->order_by('fecha', 'desc');
            $this->db->limit(4);
            $query = $this->db->get("articulos");
            return $query->result_array();
        }

        public function getArticulos($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get("articulos");
            return $query->row_array();
        }

        public function numarticulos()
        {
            $query = $this->db->get("articulos");
            return $query->num_rows();
        }

        // public function consulta($sql) {
        //     $query =  $this->db->query($sql);
        //     return $query->result_array();
        // }  
        
        // public function getArticulo($id) {
  //           $this->db->where('id',$id);            
  //           $query =  $this->db->get('novedades');
  //           return $query->row_array();
        // }
    }
?>
