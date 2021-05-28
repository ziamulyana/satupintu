<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratKw_model extends CI_Model{


  function __construct()
  {
    parent::__construct();
}


public function getKw(){
    $this->db->select('tbl_kwitansi.idKwitansi, tbl_kwitansi.tglKwitansi, tbl_kwitansi.fileKwitansi, tbl_surattugas.noSuratTugas, tbl_pegawai.nama');
    $this->db->from('tbl_kwitansi');
    $this->db->join('tbl_tugas', 'tbl_kwitansi.idTugas = tbl_tugas.idTugas');
    $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
     $this->db->join('tbl_surattugas', 'tbl_tugas.idSuratTugas = tbl_surattugas.idSurat');
     $query = $this->db->get('');
     return $query;
}


}
