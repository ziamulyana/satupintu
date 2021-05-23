<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class feedbackCapa extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }


	public function getFeedbackCapa(){
        $query = $this->db->query("SELECT * FROM tbl_feedback");
        return $query->result();
    }

}
