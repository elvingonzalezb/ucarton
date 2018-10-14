<?php
class Model_usuarios extends CI_Model {

    private $tabla="usuarios";

    public function __construct()
    {
            parent::__construct();
    }

    public function getLista() {
    	$this->db->where("nivel != ", "general");      
        $this->db->order_by('id', 'asc');
        $query =  $this->db->get($this->tabla);
        return $query->result_array();
    }
    
    public function get($id) {
        $this->db->where('id', $id);
        $query =  $this->db->get($this->tabla);
        return $query->row();
    }
    
    public function delete($id) {
        $this->db->where('id', $id);
        $resultado=$this->db->delete($this->tabla);
        return $resultado;
    }
   
    public function update($id, $data) {
        $this->db->where('id', $id);
        $result=$this->db->update($this->tabla, $data);
        return $result;
    }
    
    public function grabar($data) {
        $resultado = $this->db->insert($this->tabla, $data);
        return $resultado;
    }
}
?>