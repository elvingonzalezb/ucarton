<?php 
	class Model_subcategorias extends CI_Model
	{
		private $tabla="categorias";
		function __construct() 
		{
			parent::__construct();
		}

		public function getLista($padre) {
		    $this->db->select('*');
		    $this->db->where('padre', $padre);        
		    $this->db->order_by('orden');
		    $query =  $this->db->get($this->tabla);
		    //return $query->result_array();
		    return $query->result();
		}

		public function getListacategorias() 
		{
			$this->db->order_by('orden');
			$query = $this->db->get('categorias');
			return $query->result();
		}

		public function getListacategoriasAutor($autor) 
		{
			$this->db->where("autor", $autor);
			$this->db->order_by('orden');
			$query = $this->db->get('categorias');
			return $query->result();
		}

		public function grabarcategorias($data)
		{
			$resultado = $this->db->insert("categorias", $data);
			return $resultado;
		}

		public function ultimo_categorias() 
		{
			$this->db->select_max("orden");
			$query=$this->db->get("categorias");
			return $query->row_array();	
		}

		public function getcategorias($id)
		{
			$this->db->where("id", $id);
			$query=$this->db->get("categorias");
			return $query->row();
		}

		public function updatecategorias($id, $data) 
		{
			$this->db->where("id", $id);
			$result = $this->db->update("categorias", $data);
			return $result;
		}

		public function deletecategorias($id)
		{
		   $this->db->where('id', $id);
		   $query = $this->db->delete("categorias");
		   return $query;
		}

	}
?>