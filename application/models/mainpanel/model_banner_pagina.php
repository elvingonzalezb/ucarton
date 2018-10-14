<?php 
	class Model_banner_pagina extends CI_Model 
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function getListaBanner()
		{
			$query =$this->db->get('banner_pagina');
			return $query->result();
		}
		public function getBanner($id)
		{
			$this->db->where("id_banner", $id);
			$query = $this->db->get('banner_pagina');
			return $query->row();
		}
		public function updateBanner($id, $data)
		{	
			$this->db->where("id_banner", $id);
			$resultado = $this->db->update("banner_pagina", $data);
			return $resultado;
		}
	}
?>