<?php
class Model_cotizacion extends CI_Model {
    public function __construct()
    {
            parent::__construct();
    }

    
    public function getListaRecibidos() {
        $this->db->order_by('fecha_envio','desc');        
        $query =  $this->db->get('cotizacion');
        return $query->result_array();
    }    
    
    public function getMsgRecibido($id_cotizacion) {
        $this->db->where('id', $id_cotizacion);
        $query =  $this->db->get('cotizacion');
        return $query->row();
    }     
    
    public function getMsgMostrado($id_cotizacion) {
        $this->db->where('id', $id_cotizacion);
        $query =  $this->db->get('cotizacion');
        return $query->row();
    }      
    
    public function leidoCotizacion($id_cotizacion, $data) {
        $this->db->where('id', $id_cotizacion);
        $this->db->update('cotizacion', $data);
    }   
    


    public function deleteCotizacion($id_cotizacion) {
        // Eliminamos esta cotizacion
        $this->db->where('id', $id_cotizacion);
        $this->db->delete('cotizacion');
    }   
    
}
?>
