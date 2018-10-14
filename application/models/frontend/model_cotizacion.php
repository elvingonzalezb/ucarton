<?php
class Model_cotizacion extends CI_Model {
	public function __construct()
	{
		parent::__construct();
              
	}
	
	/*
	 * @Function que extrae la informacion de los cuadros que se muestran debajo del banner
	 */
	
    public function enviarOrden($datos)
    {
    	$resultado = $this->db->insert('ordenes', $datos);
        return $resultado;
    }

    public function getOrden($id)
    {
        $this->db->select('*');
        $this->db->where('id_usuario', $id);
        $this->db->order_by('fecha_ingreso', 'desc');
        $this->db->limit(1);
        $query =  $this->db->get('ordenes');
        return $query->row();
    }
    public function getInformacion($id)
   	{
        $this->db->select('*');
        $this->db->where('id', $id);
        $query =  $this->db->get('clientes');
        return $query->row();
    }

    public function enviarDetalleOrden($datos)
    {
    	$resultado = $this->db->insert('detalle_orden', $datos);
        return $resultado;
    }
        
	
        
}
?>