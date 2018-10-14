<?php
class Model_servicios extends CI_Model {

    private $tabla="servicios";

    public function __construct()
    {
            parent::__construct();
    }

    public function getLista() {
        $this->db->select('*');       
        $this->db->order_by('orden', 'asc');
        $query =  $this->db->get($this->tabla);
        return $query->result_array();
    }
    
    
    public function get($id) {
        $this->db->where('id_servicio', $id);
        $query =  $this->db->get($this->tabla);
        return $query->row();
    }
    
    public function delete($id) { 
        $this->db->where('id_servicio', $id);
        $resultado=$this->db->delete($this->tabla);
        return $resultado;
    }
    
  
    
    public function update($id, $data) {
        $this->db->where('id_servicio', $id);
        $result=$this->db->update($this->tabla, $data);
        return $result;
    }
    
    public function grabar($data) {
        $resultado = $this->db->insert($this->tabla, $data);
        return $resultado;
    }

    public function ultimo() {
        $this->db->select_max('orden');          
        $query =  $this->db->get($this->tabla);
        return $query->row_array();
    }  

}
?>