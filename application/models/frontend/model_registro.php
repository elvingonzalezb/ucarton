<?php
class Model_registro extends CI_Model {
	public function __construct()
	{
		parent::__construct();
              
	}
	
    public function insertRegistro($datos)
    {
    	$resultado = $this->db->insert('clientes', $datos);
        return $resultado;
    }

    public function getEmailCliente($email)
    {
        $this->db->where('email',$email);
        $consulta = $this->db->get('clientes');
        if($consulta->num_rows() == 1)
        {
            $row = $consulta->row();
            return $row->email;
        }
    }

    public function existeEmail($email){
        $this->db->where('email', $email);
        $query = $this->db->get('clientes');
        if($query->num_rows() > 0)
        {
            return 1;
        }
    }
        
        
}
?>