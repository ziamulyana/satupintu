<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model{


  function __construct()
  {
    parent::__construct();
  }

  public function getFeedback()
  { 

    $this->db->select('tbl_feedback.idFeedback,tbl_feedback.noSuratFeedback, tbl_feedback.isiFeedback, tbl_peringatan.noSuratPeringatan, tbl_sarana.namaSarana, tbl_feedback.tglFeedback,  tbl_feedback.file_feedback, tbl_feedback.closed, tbl_feedback.noSuratFeedback, tbl_peringatan.idPeringatan');
    $this->db->from('tbl_feedback');
    $this->db->join('tbl_peringatan', 'tbl_feedback.idSuratPeringatan = tbl_peringatan.idPeringatan');
    $this->db->join('tbl_surattl', 'tbl_peringatan.idTl = tbl_surattl.idTl');
    $this->db->join('tbl_sarana', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
    $query = $this->db->get('');
    return $query;
    
  }

  public function updateSuratFeedback($data){
    $this->db->set('noSuratFeedback', $data['noSuratFeedback']);
    $this->db->set('isiFeedback', $data['isiFeedback']);
    $this->db->set('tglFeedback', $data['tglFeedback']);

    $this->db->where('idFeedback', $data['idFeedback']);

    $query = $this->db->update('tbl_feedback');
  }

  public function getFile(){
    $this->db->select('file_feedback');
    $this->db->where('file_feedback = ', "0");
    $query = $this->db->get('tbl_feedback');
    return $query->num_rows();
  }

  public function getChecklist(){
   $this->db->select('*');
   $this->db->from('tbl_feedback');
   $this->db->join('tbl_peringatan', 'tbl_feedback.idSuratPeringatan = tbl_peringatan.idPeringatan');
   $this->db->where('closed <', 0);
   $query = $this->db->get('');
   return $query->num_rows();
 }

  public function hapus_SuratFeedback($id){
  $this->db->delete("tbl_feedback",array("idFeedback"=>$id));
  }


 public function updateClosed($id, $editClosed){
  $this->db->set('closed', $editClosed, FALSE);    
  $this->db->where('idFeedback', $id);
  $this->db->update('tbl_feedback'); 
}

public function isMk($id, $editClosed){
  $this->db->set('isMk', $editClosed, FALSE); 
  $this->db->where('idSarana', $id);
   $this->db->update('tbl_surattl');  
}

public function getSarana($id){
  $this->db->select('idSarana');
  $this->db->from('tbl_surattl');
    $this->db->join('tbl_peringatan', 'tbl_peringatan.idTl = tbl_surattl.idTl');
    $this->db->join('tbl_feedback', 'tbl_feedback.idSuratPeringatan = tbl_peringatan.idPeringatan');
    $this->db->where('tbl_feedback.idFeedback', $id);
    $query = $this->db->get('');
    return $query->row();
  
}



}
