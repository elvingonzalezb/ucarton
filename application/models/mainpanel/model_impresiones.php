<?php
class Model_impresiones extends CI_Model {
    public function __construct()
    {
            parent::__construct();
    }

    public function getLista($id) {
        $this->db->select('*');
        $this->db->where('id', $id); 
        $this->db->order_by('orden');       
        $query =  $this->db->get('impresiones');
        return $query->result_array();
    }
        
    public function get($id) {
        $this->db->where('id_foto', $id);
        $query =  $this->db->get('impresiones');
        return $query->row();
    }

    public function getCategoria($id) {
        $this->db->where('id', $id);
        $query =  $this->db->get('categorias_impresion');
        return $query->row();
    }
	
    public function delete($id) {
        $this->db->where('id_foto', $id);
        $resultado=$this->db->delete('impresiones');
        return $resultado;
    }
	
    public function updateFoto($nuevo, $antg, $idprod) {
        $data=array('imagen'=>$nuevo);
        $this->db->where('imagen', $antg);        
        $this->db->where('id_foto', $idprod);
        $result=$this->db->update('impresiones',$data);
        return $result;
    }  
	
    public function update($id, $data) {
        $this->db->where('id_foto', $id);
        $result=$this->db->update('impresiones', $data);
        return $result;
    }  
	
    public function grabar($data) {
        $resultado = $this->db->insert('impresiones', $data);
        $ultimo_id = $this->db->insert_id();    
        return $ultimo_id;
    }  

    public function ultimo($id) {
        $this->db->select_max('orden');
        $this->db->where('id', $id);          
        $query =  $this->db->get('impresiones');
        return $query->row_array();
    }  

    public function sql($sql) {
        $query =  $this->db->query($sql);  
    } 

}
?>