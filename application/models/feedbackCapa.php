<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feedbackCapa extends CI_Model{


      function __construct()
    {
        parent::__construct();
        // $this->load->helper('common')
    }


	public function getFeedbackCapa(){
        $query = $this->db->query("SELECT * FROM tbl_feedback");
        return $query->result();
    }

    // <!-- get data with ajax jquery -->
    
    public function getList(){
        // echo "tes";

        $query = $this->db->query("SELECT * FROM tbl_sarana");
        print_r($query);
        return $query->result();
        // $this->db->select('*');
        // $this->db->from('tbl_sarana');
        // $this->db->limit(1);

        // $query = $this->db->get();
        // print_r($query);
        
    }
}
