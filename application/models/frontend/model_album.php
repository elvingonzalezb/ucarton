<?php 
	class Model_album extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		public function getListar($per_page) {
			$this->db->order_by('orden', 'asc');
			$query = $this->db->get("album", $per_page, $this->uri->segment(2));
			return $query->result_array();
		}

		public function getListarS() {
			$this->db->order_by('orden', 'asc');
			$this->db->limit(8);
			$query = $this->db->get("album");
			return $query->result_array();
		}

		public function getalbum($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get("album");
			return $query->row_array();
		}

		public function getalbumIndex()
		{
			$this->db->order_by('orden', 'asc');
			$this->db->limit(3);
			$query = $this->db->get("album");
			return $query->result_array();
		}

		public function numalbum()
		{
			$query = $this->db->get("album");
			return $query->num_rows();
		}

        // public function consulta($sql) {
        //     $query =  $this->db->query($sql);
        //     return $query->result_array();
        // }  
		
		// public function getArticulo($id) {
  //           $this->db->where('id',$id);            
  //           $query =  $this->db->get('novedades');
  //           return $query->row_array();
		// }
	}
?>
