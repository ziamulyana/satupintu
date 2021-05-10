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
      
      $this->db->select('*');
      $this->db->from('tbl_peringatan');
      $query = $this->db->get();
      return $query;
    }

    public function updateSuratPeringatan($data){
      $this->db->where('id', $data['id']);
      $query = $this->db->update($data,'tbl_peringatan');
 
  }
      }
