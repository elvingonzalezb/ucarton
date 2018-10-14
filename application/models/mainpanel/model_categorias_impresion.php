<?php 
	class Model_categorias_impresion extends CI_Model
	{
		private $tabla="categorias_impresion";

		function __construct() 
		{
			parent::__construct();
		}

		public function getLista($padre) {
	        $this->db->select('*');
	        $this->db->where('padre', $padre);        
	        $this->db->order_by('orden');
	        $query =  $this->db->get($this->tabla);
	        return $query->result_array();
    	}

		public function getListacategorias_impresion($padre) 
		{
			$this->db->where('padre', $padre); 
			$this->db->order_by('orden');
			$query = $this->db->get('categorias_impresion');
			return $query->result();
		}

		public function grabarcategorias_impresion($data)
		{
			$resultado = $this->db->insert("categorias_impresion", $data);
			return $resultado;
		}

		public function ultimo_categorias_impresion() 
		{
			$this->db->select_max("orden");
			$query=$this->db->get("categorias_impresion");
			return $query->row_array();	
		}

		public function getcategorias_impresion($id)
		{
			$this->db->where("id", $id);
			$query=$this->db->get("categorias_impresion");
			return $query->row();
		}

		public function updatecategorias_impresion($id, $data) 
		{
			$this->db->where("id", $id);
			$result = $this->db->update("categorias_impresion", $data);
			return $result;
		}

		public function deletecategorias_impresion($id)
		{
		   $this->db->where('id', $id);
		   $query = $this->db->delete("categorias_impresion");
		   return $query;
		}

		public function deletesubcategorias($id)
		{
		   $this->db->where('padre', $id);
		   $query = $this->db->delete("categorias_impresion");
		   return $query;
		}
	}
?>