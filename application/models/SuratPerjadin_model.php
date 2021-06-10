<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratPerjadin_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }

    public function getperjadin(){
    {   
        $this->db->select('tbl_tugas.idTugas, tbl_surattugas.idSurat, tbl_tugas.idPetugas, tbl_tugas.noSuratTugas, tbl_surattugas.noSuratTugas, tbl_pegawai.idPegawai, tbl_pegawai.nama');         
        $this->db->from('tbl_tugas');
        $this->db->join('tbl_surattugas', 'tbl_surattugas.noSuratTugas = tbl_tugas.noSuratTugas');
        $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
        $this->db->join('tbl_anggaran', 'tbl_surattugas.idAnggaran = tbl_anggaran.idAnggaran');
        
        $query = $this->db->get('');
        return $query->result();
        
        }
    }

    public function getsurattugas()
    {   
      $this->db->select('tbl_surattugas.idSurat, tbl_surattugas.noSuratTugas, tbl_pegawai.nama, tbl_pegawai.idPegawai, tbl_surattugas.maksud, tbl_surattugas.kota, tbl_surattugas.kendaraan, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai, tbl_surattugas.idAnggaran, tbl_surattugas.tglSurat, tbl_surattugas.jabatanPenandatangan, tbl_surattugas.namaPenandatangan, tbl_anggaran.namaAnggaran, tbl_surattugas.bebanBiaya, tbl_tugas.idTugas, tbl_tugas.idPetugas');
      $this->db->from('tbl_surattugas');
      $this->db->join('tbl_tugas', 'tbl_surattugas.idSurat = tbl_tugas.idTugas');
      $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
      $this->db->join('tbl_anggaran', 'tbl_surattugas.idAnggaran = tbl_anggaran.idAnggaran');
  
      $query = $this->db->get('');
      return $query->result();
  
    }

}