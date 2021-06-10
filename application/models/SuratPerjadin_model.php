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

    public function getpetugas($id)
    {
      $this->db->select('*');
      $this->db->from('tbl_tugas');
      $this->db->join('tbl_surattugas', 'tbl_surattugas.noSuratTugas = tbl_tugas.noSuratTugas');
      $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
      $this->db->where('tbl_tugas.idPetugas', $id);
      $query = $this->db->get('');
      $output = '<option value="">Nama Petugas</option>';
      $output=""; 

      foreach($query->result() as $row)
      {
      $output .= '<option value="'.$row->idPegawai.'">'.$row->nama.'</option>';
      }
      return $output;
    }
   
}