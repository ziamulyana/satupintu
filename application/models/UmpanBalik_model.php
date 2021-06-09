<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UmpanBalik_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }

    public function getHistory($noSurat,$namaSarana)
    { 
       
    $this->db->select('*');
    $this->db->from('tbl_peringatan');
    $this->db->join('tbl_feedback', 'tbl_peringatan.idPeringatan = tbl_feedback.idSuratPeringatan','left');
    $this->db->join('tbl_surattl', 'tbl_surattl.idTl = tbl_peringatan.idTl');
    $this->db->join('tbl_lhk', 'tbl_lhk.idSuratTugas = tbl_surattl.idSuratTugas');
    $this->db->join('tbl_surattugas', 'tbl_lhk.idSuratTugas = tbl_surattugas.idSurat');
    $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
    $this->db->where(array('tbl_surattugas.noSuratTugas'=>$noSurat, 'tbl_sarana.namaSarana'=> $namaSarana ));
    $query = $this->db->get();
    return $query;
    
    }



}
