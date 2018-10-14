<?php 
	class Model_ordenes extends CI_Model
	{
		function __construct() 
		{
			parent::__construct();
		}
		public function getListaOrdenes() 
		{
			$this->db->order_by('fecha_ingreso','desc');
			$this->db->join('clientes', 'clientes.id=ordenes.id_usuario' ,'inner');
			$query = $this->db->get('ordenes');
			return $query->result();
		}

		public function getNumItem()
		{
			
		}

		public function getOrden($id)
		{
			$this->db->where("id_orden", $id);
			$this->db->join('clientes', 'clientes.id=ordenes.id_usuario' ,'inner');
			$query=$this->db->get("ordenes");
			return $query->row();
		}

		public function getDetalleOrden($id)
		{
			$this->db->where("id_orden", $id);
			$query=$this->db->get("detalle_orden");
			return $query->result();
		}

		public function updateDetalleOrden($id, $data) 
		{
			$this->db->where("id_detalle", $id);
			$result = $this->db->update("detalle_orden", $data);
			return $result;
		}

		public function updateEstadoOrden($id, $data) 
		{
			$this->db->where("id_orden", $id);
			$result = $this->db->update("ordenes", $data);
			return $result;
		}

		public function deleteOrden($id)
		{
		   $this->db->where('id_orden', $id);
		   $query = $this->db->delete("ordenes");
		   return $query;
		}

		public function revisarOrden($id, $data)
		{
		   $this->db->where('id_orden', $id);
		   $query = $this->db->update('ordenes', $data);
		   return $query;
		}


	}
?>