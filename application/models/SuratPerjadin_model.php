<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratPerjadin_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }

    public function getSuratTugas()
    {
      $this->db->select('*');
      $this->db->from('tbl_surattugas');
      $query = $this->db->get('');
      return $query->result();
    }
   
}