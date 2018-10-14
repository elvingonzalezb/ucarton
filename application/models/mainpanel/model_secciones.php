<?php 
	class Model_secciones extends CI_Model 
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function getListaSecciones()
		{
			$this->db->where("visible",1);
			$query = $this->db->get("textos_web");
			return $query->result();
		}
	    public function getSeccion($id) {
	        $this->db->where('id', $id);
	        $query =  $this->db->get('textos_web');
	        return $query->row();
	    }

	    public function update($id, $data) {
	        $this->db->where("id", $id);
	        $result = $this->db->update("textos_web", $data);
	        return $result;
	    }

	}
?>