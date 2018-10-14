<?php 
    class Model_impresiones extends CI_Model {
        function __construct() {
            parent::__construct();
        }
        //detalle producto
        public function getproducto($id)
        {
            $this->db->where('id_foto', $id);
            $query = $this->db->get("impresiones");
            return $query->row_array();
        }

        public function getimpresionesNuevos()
        {
            $this->db->order_by('id_foto', 'desc');
            $this->db->limit(4);
            $query = $this->db->get("impresiones");
            return $query->result_array();
        }
    }
?>