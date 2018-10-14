<?php
class Model_mensajes extends CI_Model {
    public function __construct()
    {
            parent::__construct();
    }

    
    public function getListaRecibidos() {
        $this->db->order_by('fecha_envio','desc');        
        $query =  $this->db->get('mensaje');
        return $query->result_array();
    }    
    
    public function getMsgRecibido($id_mensaje) {
        $this->db->where('id', $id_mensaje);
        $query =  $this->db->get('mensaje');
        return $query->row();
    }     
    
    public function getMsgMostrado($id_mensaje) {
        $this->db->where('id', $id_mensaje);
        $query =  $this->db->get('mensaje');
        return $query->row();
    }      
    
    public function leidoMensaje($id_mensaje, $data) {
        $this->db->where('id', $id_mensaje);
        $this->db->update('mensaje', $data);
    }   
    


    public function deleteMensaje($id_mensaje) {
        // Eliminamos esta mensaje
        $this->db->where('id', $id_mensaje);
        $this->db->delete('mensaje');
    }   
    
}
?>
