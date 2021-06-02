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


 //  public function updateKw($data){
 //   $this->db->set('tglKwitansi', $data['tglKwitansi']); 
 //   $this->db->set('fileKwitansi', $data['fileKwitansi']);
 //   $this->db->where('idKwitansi', $data['idKwitansi']);
 //   $query = $this->db->update('tbl_kwitansi');
 // }


 public function dataKw($id){
   $this->db->select('tbl_uraian.uraian, tbl_uraian.biaya, tbl_surattugas.noSuratTugas, tbl_tugas.urutan, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai,tbl_surattugas.maksud, tbl_surattugas.tglSurat,tbl_surattugas.kota, tbl_kwitansi.tglKwitansi, tbl_pegawai.nama, tbl_pegawai.pangkat, tbl_pegawai.nip, tbl_pegawai.jabatan, tbl_pegawai.golongan');
   $this->db->from('tbl_uraian');
   $this->db->join('tbl_kwitansi', 'tbl_uraian.idKwitansi = tbl_kwitansi.idKwitansi');
   $this->db->join('tbl_tugas', 'tbl_kwitansi.idTugas = tbl_tugas.idTugas');
   $this->db->join('tbl_surattugas', 'tbl_tugas.idSuratTugas = tbl_surattugas.idSurat');
   $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
   $this->db->where('tbl_kwitansi.idKwitansi', $id);
   $query = $this->db->get('');
   return $query;
 }


 public function getFile(){
   $this->db->select('fileKwitansi');
   $this->db->where('fileKwitansi =','0');
   $query = $this->db->get('tbl_kwitansi');
   return $query->num_rows();

 }

 public function getTugas(){
  $this->db->select('*');
   $this->db->from('tbl_surattugas');
   $query = $this->db->get('');
   return $query;
 }

 public function getNomDk($id){
  $this->db->select("tbl_pegawai.nama,tbl_pegawai.nip,tbl_surattugas.noSuratTugas,tbl_surattugas.mak,tbl_surattugas.kota,tbl_surattugas.tglMulai,tbl_surattugas.tglSelesai,  tbl_surattugas.lamaPerjalanan");
   $this->db->from('tbl_tugas');
    $this->db->join('tbl_surattugas', 'tbl_tugas.idSuratTugas =tbl_surattugas.idSurat');
       $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
       $this->db->where('tbl_tugas.idSuratTugas', $id);
        $query = $this->db->get('');
   return $query;
 }


}
