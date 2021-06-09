<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UmpanBalik_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }

    public function getSuratTugas(){
        $this->db->select('*');
    $this->db->from('tbl_surattugas');
    $query = $this->db->get('');
    return $query->result();
    }

    public function getSaranaFeedback($id){
        $this->db->select('*');
    $this->db->from('tbl_sarana');
    $this->db->join('tbl_surattl', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
    $this->db->where('tbl_surattl.idSuratTugas', $id);
    $query = $this->db->get('');
    $output = '<option value="">Nama Sarana</option>';
    $output=""; 
    foreach($query->result() as $row)
    {
     $output .= '<option value="'.$row->idSarana.'">'.$row->namaSarana.'</option>';
   }
   return $output;
  }
    

    public function getHistory($idSurat,$idSarana)
    { 
       
    $this->db->select('*');
    $this->db->from('tbl_peringatan');
    $this->db->join('tbl_feedback', 'tbl_peringatan.idPeringatan = tbl_feedback.idSuratPeringatan','left');
    $this->db->join('tbl_surattl', 'tbl_surattl.idTl = tbl_peringatan.idTl');
    $this->db->join('tbl_lhk', 'tbl_lhk.idSuratTugas = tbl_surattl.idSuratTugas');
    $this->db->join('tbl_surattugas', 'tbl_lhk.idSuratTugas = tbl_surattugas.idSurat');
    $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
    $this->db->where(array('tbl_surattugas.idSurat'=>$idSurat, 'tbl_sarana.idSarana'=> $idSarana ));
    $query = $this->db->get();
    return $query;
    
    }



}
