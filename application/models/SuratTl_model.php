<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratTl_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }


		public function getSuratTugas(){
		$this->db->select('tbl_surattugas.noSuratTugas, tbl_suratTugas.idSurat,max(tbl_feedback.closed) as closed');
		$this->db->from('tbl_surattugas');
		$this->db->join('tbl_lhk','tbl_lhk.idSuratTugas = tbl_suratTugas.idSurat' );
		$this->db->join('tbl_surattl','tbl_lhk.idSuratTugas = tbl_surattl.idSuratTugas' );
		$this->db->join('tbl_peringatan', 'tbl_surattl.idTl = tbl_peringatan.idTl', 'left');
		$this->db->join('tbl_feedback', 'tbl_peringatan.idPeringatan = tbl_feedback.idSuratPeringatan', 'left');
		$this->db->group_by('tbl_surattugas.noSuratTugas'); 
		$this->db->where("(tbl_surattl.jenisTl='Peringatan' OR tbl_surattl.jenisTl='Peringatan Keras')");
		$query = $this->db->get();
		return $query->result();
	}

	public function getSuratTugasCapa(){
		$this->db->select('tbl_surattugas.noSuratTugas, tbl_suratTugas.idSurat');
		$this->db->from('tbl_surattugas');
		$this->db->join('tbl_lhk','tbl_lhk.idSuratTugas = tbl_suratTugas.idSurat' );
		$this->db->join('tbl_surattl','tbl_lhk.idSuratTugas = tbl_surattl.idSuratTugas' );
		$this->db->join('tbl_peringatan', 'tbl_surattl.idTl = tbl_peringatan.idTl');	
		$this->db->group_by('tbl_surattugas.noSuratTugas'); 
		$this->db->where("(tbl_surattl.jenisTl='Peringatan' OR tbl_surattl.jenisTl='Peringatan Keras')");
		$query = $this->db->get();
		return $query->result();
	}

		public function getTl($id){
		$this->db->select('tbl_surattl.idTl');
		$this->db->from('tbl_surattl');
		$this->db->join('tbl_lhk', 'tbl_lhk.idSuratTugas = tbl_surattl.idSuratTugas');
		$this->db->join('tbl_surattugas ', 'tbl_lhk.idSuratTugas = tbl_surattugas.idSurat');
		$this->db->where('tbl_surattugas.idSurat', $id);
		$query = $this->db->get();
		return $query->result();

	}






}
