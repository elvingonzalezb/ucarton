<?php 
	class Model_banners extends CI_Model 
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function getListaBanners()
		{
			$this->db->order_by('banner_orden');
			$query =$this->db->get('banners');
			return $query->result();
		}
		public function getBanners($banner_id)
		{
			$this->db->where("banner_id", $banner_id);
			$query = $this->db->get('banners');
			return $query->row();
		}

	    public function grabarBanner($data) {
	        $resultado = $this->db->insert('banners', $data);
	        return $resultado;
	    }

		public function updateBanner($banner_id, $data)
		{	
			$this->db->where("banner_id", $banner_id);
			$resultado = $this->db->update("banners", $data);
			return $resultado;
		}

	    public function ultBanner() {
	        $this->db->select_max('banner_orden');
	        $query =  $this->db->get('banners');
	        return $query->row_array();
	    }  
	    
	    public function deleteBanner($banner_id) {
	        $this->db->where('banner_id', $banner_id);
	        $result=$this->db->delete('banners');
	        return $result;
	    }



	}
?>