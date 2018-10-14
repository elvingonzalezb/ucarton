<?php
class Model_login extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	/*
	 * @Function que extrae la informacion de los cuadros que se muestran debajo del banner
	 */
        
        function valid_user($email, $clave)
        {
          $this->db->where('email', $email);
          $this->db->where('clave', $clave);
         
          $query = $this->db->get('clientes');
         
           if($query->num_rows() >0){

             return TRUE;
          
            }else{
              
                return FALSE;
            }
        }

        function valid_user_ajax($email){
                  
            $this->db->where('email', $email);
            $query = $this->db->get('clientes');
                
                 if($query->num_rows() >0){
                      
                     echo $query->num_rows();
                    
                     }
          }

        function get_user($email)
        {
          $this->db->select('*');
          $this->db->where('email', $email);
          $query = $this->db->get('clientes');
          return $query->row();
        }

}
?>