<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SuratTugas_model extends CI_Model
{
 

  function __construct()
  {
      parent::__construct();
  }
  
  public function checkDuplicate($no_surat)
  {
      $this->db->where('noSuratTugas',$no_surat);
      $query = $this->db->get('tbl_surattugas');
      $count_row = $query->num_rows();
      if ($count_row > 0){
          return false;
      }
      else{
          return true;
      }
  }

  public function getNamaPegawai()
  { 
      
    $this->db->select('*');
    $this->db->from('tbl_pegawai');
    $query = $this->db->get();
    return $query->result();
  }

   public function getSuratTugas()
    { 
      
      $this->db->select('*');
      $this->db->from('tbl_surattugas');
      $query = $this->db->get();
      return $query;
    }

    public function updateSuratTugas($data){
      $this->db->where('id', $data['id']);
      $query = $this->db->update($data,'tbl_surattugas');
 
  }
      }
