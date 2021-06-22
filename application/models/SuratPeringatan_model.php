<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SuratPeringatan_model extends CI_Model
{


  function __construct()
  {
    parent::__construct();
  }
  
  public function checkDuplicate($no_surat)
  {
    $this->db->where('noSuratPeringatan',$no_surat);
    $query = $this->db->get('tbl_peringatan');
    $count_row = $query->num_rows();
    if ($count_row > 0){
      return false;
    }
    else{
      return true;
    }
  }

  public function getSuratPeringatan()
  { 

    $this->db->select('tbl_peringatan.idPeringatan, tbl_peringatan.tglSuratPeringatan, tbl_peringatan.noSuratPeringatan, tbl_peringatan.filePeringatan, tbl_surattl.jenisTl, tbl_sarana.namaSarana');
    $this->db->from('tbl_peringatan');
    $this->db->join('tbl_surattl', 'tbl_surattl.idTl = tbl_peringatan.idTl');
    $this->db->join('tbl_sarana', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
     $this->db->where("(tbl_surattl.jenisTl='Peringatan' OR tbl_surattl.jenisTl='Peringatan Keras')");

    $query = $this->db->get('');
    return $query;
  }

  public function updateSuratPeringatan($data){
    $this->db->set('tglSuratPeringatan', $data['tglSuratPeringatan']); 
    $this->db->set('noSuratPeringatan', $data['noSuratPeringatan']); 
    $this->db->set('filePeringatan', $data['filePeringatan']);
    $this->db->where('idPeringatan', $data['id']);
    $query = $this->db->update('tbl_peringatan');

  }

  public function getFile(){
    $this->db->select('filePeringatan');
    $this->db->where('filePeringatan = ', "0");
    $query = $this->db->get('tbl_peringatan');
    return $query->num_rows();
  }

  public function hapusSuratPeringatan($id){
   $this->db->delete("tbl_peringatan",array("idPeringatan"=>$id));
 }

 public function getSaranaPer($id){
   $this->db->select('*');
   $this->db->from('tbl_sarana');
   $this->db->join('tbl_surattl', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
   $this->db->where(array('tbl_surattl.idSuratTugas'=>$id, 'tbl_surattl.isMk'=> "0" ));
   $query = $this->db->get('');
   $output = '<option value="">Nama Sarana</option>';
   $output=""; 
   foreach($query->result() as $row)
   {
     $output .= '<option value="'.$row->idSarana.'">'.$row->namaSarana.'</option>';
   }
   return $output;
 }

 public function getSaranaCapa($id){
   $this->db->select('*');
   $this->db->from('tbl_sarana');
   $this->db->join('tbl_surattl', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
   $this->db->where('tbl_surattl.idSuratTugas',$id);
   $query = $this->db->get('');
   $output = '<option value="">Nama Sarana</option>';
   $output=""; 
   foreach($query->result() as $row)
   {
     $output .= '<option value="'.$row->idSarana.'">'.$row->namaSarana.'</option>';
   }
   return $output;
 }

 

 public function getSarana($id){
  $this->db->select('tbl_sarana.namaSarana, tbl_sarana.alamatSarana,tbl_sarana.kotaSarana,tbl_surattl.jenisTl, tbl_surattl.idTl');
  $this->db->from('tbl_sarana');
  $this->db->join('tbl_surattl', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
  $this->db->where('tbl_surattl.idSarana', $id);
  $query = $this->db->get();
  return $query->result();
}


 public function getCapa()
  { 

    $this->db->select('tbl_peringatan.idPeringatan, tbl_feedback.idFeedback, tbl_feedback.noSuratFeedback, tbl_feedback.isiFeedback, tbl_feedback.tglFeedback, tbl_feedback.file_feedback, tbl_feedback.idSuratPeringatan, tbl_peringatan.tglSuratPeringatan, tbl_peringatan.noSuratPeringatan, tbl_peringatan.filePeringatan, tbl_peringatan.halPeringatan,   tbl_sarana.namaSarana');
    $this->db->from('tbl_peringatan');
    $this->db->join('tbl_surattl', 'tbl_surattl.idTl = tbl_peringatan.idTl');
    $this->db->join('tbl_sarana', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
    $this->db->join('tbl_feedback', 'tbl_peringatan.idPeringatan = tbl_feedback.idSuratPeringatan', "left");
    $this->db->where("(tbl_peringatan.halPeringatan='Evaluasi CAPA' OR tbl_peringatan.halPeringatan='Close CAPA')");
    $query = $this->db->get('');
    return $query;
  }



}
