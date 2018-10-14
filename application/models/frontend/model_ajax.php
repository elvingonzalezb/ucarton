<?php
class Model_ajax extends CI_Model {
	public function __construct()
	{
		parent::__construct();
              
	}
	
	/*
	 * @Function que extrae la informacion de los cuadros que se muestran debajo del banner
	 */
	
	public function getEmail($email)
	{
		$this->db->where('email',$email);
        $query =  $this->db->get('clientes');
        return $query->row();
	}
        
	
        
}
?>