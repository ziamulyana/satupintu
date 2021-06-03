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

  function getSaranaModel($postData=array()){
 
    $response = array();
 
    if(isset($postData['username']) ){
 
      // Select record
      $this->db->select('namaSarana');
      $this->db->where('idSarana', '3');
      $records = $this->db->get('tbl_sarana');
      $response = $records->result_array();
 
    }
 
    return $response;
  }


  function saveData($params){
	$this->db->insert('tbl_feedback',$params);

    $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
    redirect('/admin/Feedback', 'refresh');
  }
}
