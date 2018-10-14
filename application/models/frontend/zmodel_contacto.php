<?php 
	class Model_contacto extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		function envioMensaje($datos) {
			$resultado = $this->db->insert("mensaje", $datos);
			return $resultado;
		}
		
	    public function getSede($id) {
	        $this->db->where('id_sede',$id);            
	        $query =  $this->db->get('sedes');
	        return $query->row_array();
	    }  

		public function saveSusc($datos)
		{
			$resultado = $this->db->insert('suscriptores', $datos);
			return $resultado;
		}	

		public function getListar() {
			$this->db->where("destacado",1);
			$this->db->order_by("orden");
			$query = $this->db->get("articulos");
			return $query->result_array();	
		}


	}
?>