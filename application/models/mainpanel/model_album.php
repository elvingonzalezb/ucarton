<?php 
	class Model_album extends CI_Model
	{
		function __construct() 
		{
			parent::__construct();
		}
		public function getListaAlbum() 
		{
			$this->db->order_by('orden');
			$query = $this->db->get('album');
			return $query->result();
		}

		public function getListaAlbumAutor($autor) 
		{
			$this->db->where("autor", $autor);
			$this->db->order_by('orden');
			$query = $this->db->get('album');
			return $query->result();
		}

		public function grabarAlbum($data)
		{
			$resultado = $this->db->insert("album", $data);
			return $resultado;
		}

		public function ultimo_Album() 
		{
			$this->db->select_max("orden");
			$query=$this->db->get("album");
			return $query->row_array();	
		}

		public function getAlbum($id)
		{
			$this->db->where("id", $id);
			$query=$this->db->get("album");
			return $query->row();
		}

		public function updateAlbum($id, $data) 
		{
			$this->db->where("id", $id);
			$result = $this->db->update("album", $data);
			return $result;
		}

		public function deleteAlbum($id)
		{
		   $this->db->where('id', $id);
		   $query = $this->db->delete("album");
		   return $query;
		}


	}
?>