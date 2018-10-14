<?php 
	class Model_articulos extends CI_Model
	{
		function __construct() 
		{
			parent::__construct();
		}
		public function getListaArticulos() 
		{
			$this->db->order_by('orden');
			$query = $this->db->get('articulos');
			return $query->result();
		}

		public function getListaArticulosAutor($autor) 
		{
			$this->db->where("autor", $autor);
			$this->db->order_by('orden');
			$query = $this->db->get('articulos');
			return $query->result();
		}

		public function grabarArticulo($data)
		{
			$resultado = $this->db->insert("articulos", $data);
			return $resultado;
		}

		public function ultimo_Articulo() 
		{
			$this->db->select_max("orden");
			$query=$this->db->get("articulos");
			return $query->row_array();	
		}

		public function getArticulo($id)
		{
			$this->db->where("id", $id);
			$query=$this->db->get("articulos");
			return $query->row();
		}

		public function updateArticulo($id, $data) 
		{
			$this->db->where("id", $id);
			$result = $this->db->update("articulos", $data);
			return $result;
		}

		public function deleteArticulo($id)
		{
		   $this->db->where('id', $id);
		   $query = $this->db->delete("articulos");
		   return $query;
		}


	}
?>