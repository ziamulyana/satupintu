<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratTl_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }

    public function getIdSurat($id){
  //   	$this->db->select('*');
		// $this->db->where('closed', 0);
		// $query = $this->db->get('tbl_surattl');
		// return $query->result();

    }

	public function getSuratTugas(){
		$this->db->select('tbl_surattl.noSuratTugas, tbl_surattl.namaSarana,max(tbl_feedback.closed) as closed');
		$this->db->from('tbl_surattl');
		$this->db->join('tbl_peringatan', 'tbl_surattl.id = tbl_peringatan.idTl');
		$this->db->join('tbl_feedback', 'tbl_peringatan.id = tbl_feedback.idSuratPeringatan');
		$this->db->group_by('tbl_surattl.noSuratTugas'); 
		$this->db->having('closed < 1');
		$query = $this->db->get();
		return $query->result();
	}



}
