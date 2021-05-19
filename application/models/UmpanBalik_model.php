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
    $this->db->join('tbl_feedback', 'tbl_peringatan.id = tbl_feedback.idSuratPeringatan','left');
    $this->db->join('tbl_surattl', 'tbl_surattl.id = tbl_peringatan.idTl');
    $this->db->where(array('tbl_surattl.noSuratTugas'=>$noSurat, 'tbl_surattl.namaSarana'=> $namaSarana ));
    $query = $this->db->get();
    return $query;
    
    }



}
