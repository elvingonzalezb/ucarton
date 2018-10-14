<?php
class Model_fotos extends CI_Model {

    public function __construct()
    {
            parent::__construct();
    }

    public function getLista($id) {
        $this->db->select('*');
        $this->db->where('id', $id); 
        $this->db->order_by('orden');       
        $query =  $this->db->get('fotos');
        return $query->result_array();
    }

    public function sql($sql) {
        $query =  $this->db->query($sql);
        
    } 
}
?>