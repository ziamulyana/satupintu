<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SuratTugas_model extends CI_Model{


  function __construct()
  {
      parent::__construct();
  }

  // main page
  public function getsurattugas()
  {   
    $this->db->select('*');
    $this->db->from('tbl_surattugas');
    $query = $this->db->get('');
    return $query->result();
  }

  // petugas
  public function getpetugas()
  {
    $this->db->select('*');
    $this->db->from('tbl_pegawai');
    $query = $this->db->get('');
    return $query->result();
  }

  //kota
  public function getkota()
  {
    $this->db->select('*');
    $this->db->from('tbl_kota');
    $query = $this->db->get('');
    return $query->result();
  }

  // ubah surat tugas
  public function ubah_surat($data)
  {
    $this->db->set('noSuratTugas', $data['nosurat']);
    $this->db->set('tglSurat', $data['tglsurat']);
    $this->db->set('tglMulai', $data['tglmulai']);
    $this->db->set('bebanBiaya', $data['bebanbiaya']);
    $this->db->set('kendaraan', $data['kendaraan']);
    $this->db->set('kota', $data['kendaraan']);
    $this->db->set('idAnggaran', $data['idanggaran']);
    $this->db->set('tglSelesai', $data['tglselesai']);
    $this->db->set('maksud', $data['maksud']);
    $this->db->set('namaPenandatangan', $data['namapenandatangan']);
    $this->db->set('jabatanPenandatangan', $data['jabatanpenandatangan']);
    $this->db->set('idPetugas', $data['idpetugas']);

    $this->db->where('idSurat', $data['idsurat']);
    $query = $this->db->update('tbl_surattugas');
  }

  // hapus surat tugas
  public function hapus_surat($id)
  {
    $this->db->delete("tbl_surattugas", array("idSurat" => $id));
  }


}