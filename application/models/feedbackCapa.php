<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackCapa extends CI_Model{


  function __construct()
  {
    parent::__construct();
  }
  
  
  public function getPeringatan(){
    $this->db->select('*');
    $this->db->from('tbl_peringatan');
    $this->db->where('status','0');      
    $query = $this->db->get('');
    return $query->result();
  }
  
  
//   function getSaranaModel(){
//     $this->db->select('namaSarana');
//     $this->db->from('tbl_sarana');
//     $this->db->where('idSarana','3');      
//     $query = $this->db->get('');
//     return $query->result();
//   }

  function getSaranaModel($id){
    $this->db->select('*');
    $this->db->from('tbl_sarana');
    $this->db->join('tbl_surattl', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
    $this->db->join('tbl_peringatan', 'tbl_surattl.idTl = tbl_peringatan.idTl');
    $this->db->where('tbl_peringatan.idPeringatan', $id);
    $query = $this->db->get('');
    $output = '<option value="">Nama Sarana</option>';
    $output=""; 
    foreach($query->result() as $row)
    {
     $output .= '<option value="'.$row->idSarana.'">'.$row->namaSarana.'</option>';
   }
   return $output;
   

 }
 




 function saveData($params){
   $this->db->insert('tbl_feedback',$params);

   $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
   redirect('/admin/Feedback', 'refresh');
 }
}
