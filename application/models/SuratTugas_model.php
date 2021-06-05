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
    $this->db->set('noSuratTugas', $data['noSur']);
    $this->db->set('tglSurat', $data['tglSur']);
    $this->db->set('tglMulai', 0);
    $this->db->set('bebanBiaya', 0);
    $this->db->set('kendaraan', 0);
    $this->db->set('kota', $data['kotas']);
    $this->db->set('idAnggaran', 0);
    $this->db->set('tglSelesai', 0);
    $this->db->set('maksud', $data['maksud']);
    $this->db->set('namaPenandatangan', 0);
    $this->db->set('jabatanPenandatangan', 0);
    $this->db->where('idSurat', $data['idSur']);
    $query = $this->db->update('tbl_surattugas');
  }

  // hapus surat tugas
  public function hapus_surat($id)
  {
    $this->db->delete("tbl_surattugas", array("idSurat" => $id));
  }

  // print surat tugas
  public function surat_tugas($id)
  {
    $this->db->select('');
    $this->db->from('');
    $this->db->join('');
    $this->db->where('');
    $query = $this->db->get('');
    return $query;
  }



}