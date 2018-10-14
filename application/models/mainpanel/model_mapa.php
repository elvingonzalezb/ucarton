<?php
class Model_mapa extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function getListaSedes() {
        $this->db->order_by('orden');
        $query =  $this->db->get('sedes');
        return $query->result();
    }
    
    public function getSede($id) {
        $this->db->where('id_sede', $id);
        $query =  $this->db->get('sedes');
        return $query->row_array();
    }
	
    public function updateSede($id, $data) {
        $this->db->where('id_sede', $id);
        $result=$this->db->update('sedes', $data);
        return $result;
    }
	
    public function ultCentro() {
        $this->db->select_max('orden');
        $query =  $this->db->get('centros');
        return $query->row_array();
    }      

    public function grabarCentro($data) {
        $resultado = $this->db->insert('centros', $data);
        return $resultado;
    }

    public function deleteCentro($id_equipo) {
        $this->db->where('id_centro', $id_equipo);
        $result=$this->db->delete('centros');
        return $result;
    }    
}
?>