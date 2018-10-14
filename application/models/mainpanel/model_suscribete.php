<?php
class Model_suscribete
 extends CI_Model {
    public function __construct()
    {
            parent::__construct();
    }

    
    public function getListaRecibidos() {
        $this->db->order_by('fecha_envio','desc');        
        $query =  $this->db->get('suscribete');
        return $query->result_array();
    }    
    
    public function getMsgRecibido($id_suscribete
        ) {
        $this->db->where('id', $id_suscribete);
        $query =  $this->db->get('suscribete');
        return $query->row();
    }     
    
    public function getMsgMostrado($id_suscribete) {
        $this->db->where('id', $id_suscribete);
        $query =  $this->db->get('suscribete');
        return $query->row();
    }      
    
    public function leidosuscribete($id_suscribete , $data) {
        $this->db->where('id', $id_suscribete);
        $this->db->update('suscribete ', $data);
    }   
    


    public function deletesuscribete ($id_suscribete ) {
        // Eliminamos esta suscribete
        
        $this->db->where('id', $id_suscribete );
        $this->db->delete('suscribete');
    }   
    
}
?>
