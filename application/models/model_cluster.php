<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_cluster extends CI_Model {

	public function getData()
	{
		$query = $this->db->get('tbl_responden');
		return $query->result_array();
	}

	public function getDataRand()
	{
		// $this->db->order_by('rand()');
  //   	$this->db->limit(1);
		$this->db->where('tbl_responden.id_responden', '5');
		// $this->db->join('koresponden', 'koresponden.id_koresponden = jawabanuser.id_user');
		return $query->result();
	}

	public function getDataHasil()
	{
		$this->db->order_by('hasil', 'asc');
		return $this->db->get('temp_hasil')->result();
	}

	public function getDataHasilRank()
	{
		$this->db->order_by('hasil', 'asc');
		$this->db->limit(3);
		$this->db->join('tbl_responden', 'tbl_responden.id_responden = temp_hasil.t');
		return $this->db->get('temp_hasil')->result();
	}

}

/* End of file M_knn.php */
/* Location: ./application/models/M_knn.php */