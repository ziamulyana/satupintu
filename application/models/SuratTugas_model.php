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

  public function getsurattugas()
  { 
    
    $this->db->select('*');
    $this->db->from('tbl_surattugas');
    $query = $this->db->get();
    return $query->result();
  }

  public function addsurattugas()
  {
    $insert = $this->db->insert($table,$data);
    return $data;
  }

  public function delsurat($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  public function getTugas()
  {

    $this->db->select('*');
    $this->db->from('tbl_surattugas');
    $query = $this->db->get('');
    return $query;
  }

  public function getPetugas($id){
    $this->db->select('tbl_tugas.idTugas,tbl_pegawai.nama');
    $this->db->from('tbl_tugas');
    $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
    $this->db->where('tbl_tugas.idSuratTugas', $id);
    $query = $this->db->get('');
    $output = '<option value="">Pilih Petugas</option>';
    foreach($query->result() as $row)
    {
     $output .= '<option value="'.$row->idTugas.'">'.$row->nama.'</option>';
 }
 return $output;

  }




    public function updatesurattugas($where,$data,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    public function getPegawai()
    {

      $this->db->select('*');
      $this->db->from('tbl_pegawai');
      $query = $this->db->get();
      return $query->result();
    }

      }
