<?php 
	class Model_clientes extends CI_Model
	{
		function __construct() 
		{
			parent::__construct();
		}
		public function getListaClientes() 
		{
			$this->db->order_by('id','desc');
			$query = $this->db->get('clientes');
			return $query->result();
		}

		public function grabarClientes($data)
		{
			$resultado = $this->db->insert("clientes", $data);
			return $resultado;
		}

		public function ultimo_cliente() 
		{
			$this->db->select_max("id", "desc");
			$query=$this->db->get("clientes");
			return $query->row_array();	
		}

		public function getCliente($id)
		{
			$this->db->where("id", $id);
			$query=$this->db->get("clientes");
			return $query->row();
		}

		public function updateCliente($id, $data) 
		{
			$this->db->where("id", $id);
			$result = $this->db->update("clientes", $data);
			return $result;
		}

		public function deleteCliente($id)
		{
		   $this->db->where('id', $id);
		   $query = $this->db->delete("clientes");
		   return $query;
		}


	}
?>