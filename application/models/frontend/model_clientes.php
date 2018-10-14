<?php 
    class Model_clientes extends CI_Model {
        function __construct() {
            parent::__construct();
        }
        public function getListar($per_page) {
            $this->db->order_by("orden", "desc");
            $query = $this->db->get("clientes", $per_page, $this->uri->segment(2));
            return $query->result_array();
        }

        public function getListarS() {
            $this->db->order_by("orden", "desc");
            $this->db->limit(8);
            $query = $this->db->get("clientes");
            return $query->result_array();
        }

        public function getclientes($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get("clientes");
            return $query->row_array();
        }

        public function getclientesIndex()
        {
            $this->db->order_by('orden', 'desc');
            $this->db->limit(4);
            $query = $this->db->get("clientes");
            return $query->result_array();
        }

        public function numclientes()
        {
            $query = $this->db->get("clientes");
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
