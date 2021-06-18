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
    $this->db->select('tbl_surattugas.idSurat, tbl_surattugas.bebanBiaya, tbl_surattugas.noSuratTugas, tbl_pegawai.idPegawai, tbl_surattugas.maksud, tbl_surattugas.kota, tbl_surattugas.kendaraan, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai, tbl_surattugas.idAnggaran, tbl_surattugas.tglSurat, tbl_surattugas.jabatanPenandatangan, tbl_surattugas.namaPenandatangan, tbl_anggaran.namaAnggaran, tbl_tugas.idTugas, tbl_tugas.idPetugas');
    $this->db->from('tbl_surattugas');
    $this->db->join('tbl_tugas', 'tbl_surattugas.idSurat = tbl_tugas.idTugas');
    $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
    $this->db->join('tbl_anggaran', 'tbl_surattugas.idAnggaran = tbl_anggaran.idAnggaran');

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

  public function getanggaran()
  {
    $this->db->select('*');
    $this->db->from('tbl_anggaran');
    $query = $this->db->get('');
    return $query->result();
  }

  // ubah surat tugas
  public function ubah_surat($data)
  {
    $this->db->set('noSuratTugas', $data['noSur']);
    $this->db->set('tglSurat', $data['tglSur']);
    $this->db->set('tglMulai', $data['tglMulai']);
    //$this->db->set('bebanBiaya', $data['bebanBiaya']);
    $this->db->set('kendaraan', $data['kendaraan']);
    $this->db->set('kota', $data['kotas']);
    $this->db->set('idAnggaran', $data['idAnggaran']);
    $this->db->set('tglSelesai', $data['tglSelesai']);
    $this->db->set('maksud', $data['maksud']);
    $this->db->set('namaPenandatangan', $data['namaPenandatangan']);
    $this->db->set('jabatanPenandatangan', $data['jabatanPenandatangan']);
    //$this->db->set('idPetugas', $data['idpetugas']);

    $this->db->where('idSurat', $data['idSur']);
    $query = $this->db->update('tbl_surattugas');
  }

  // hapus surat tugas
  public function hapus_surat($id)
  {
    $this->db->delete("tbl_surattugas", array("idSurat" => $id));
  }

  // print surat tugas
  public function print_surat($id)
  {
    $this->db->select('tbl_surattugas.noSuratTugas, tbl_tugas.noSuratTugas, tbl_tugas.idPetugas, tbl_pegawai.idPegawai, tbl_pegawai.nama, tbl_pegawai.pangkat, tbl_pegawai.golongan, tbl_pegawai.nip, tbl_pegawai.jabatan, tbl_surattugas.maksud, tbl_surattugas.kota, tbl_surattugas.kendaraan, tbl_surattugas.lamaPerjalanan, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai, tbl_anggaran.mak, tbl_surattugas.tglSurat, tbl_surattugas.jabatanPenandatangan, tbl_surattugas.namaPenandatangan');
    $this->db->from('tbl_surattugas');
    $this->db->join('tbl_tugas', 'tbl_surattugas.noSuratTugas = tbl_tugas.noSuratTugas');
    $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
    $this->db->join('tbl_anggaran', 'tbl_surattugas.idAnggaran = tbl_anggaran.idAnggaran');
    $this->db->where('tbl_surattugas.idSurat', $id);
    $query = $this->db->get('');
    return $query;
  }



}