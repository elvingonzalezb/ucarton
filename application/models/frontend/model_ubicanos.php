<?php
class Model_ubicanos extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
        
        public function getMapa($id) {
            $this->db->where('id_sede',$id);
            $query =  $this->db->get('sedes');
            return $query->row_array();
        }   
         
        
}
?>