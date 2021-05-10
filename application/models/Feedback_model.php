<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }

    public function getFeedback()
    { 
      
    $this->db->select('*');
    $this->db->order_by("tbl_feedback.closed","asc" );
    $query = $this->db->get('tbl_feedback');
    return $query;
    
    }

    public function getChecklist(){
         $this->db->select('closed');
         $this->db->where('closed <', 0);
         $query = $this->db->get('tbl_feedback');
         return $query->num_rows();
    }

    public function updateClosed($id, $editClosed){
        $this->db->set('closed', $editClosed, FALSE);    
        $this->db->where('id', $id);
        $this->db->update('tbl_feedback'); 
    }



}
