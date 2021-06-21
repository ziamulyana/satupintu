<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lhk_model extends CI_Model
{


  function __construct()
  {
    parent::__construct();
  }
  
  
  public function getLhk()
  { 

    $this->db->select('tbl_surattugas.noSuratTugas, tbl_lhk.tglLhk, tbl_lhk.file_lhk, tbl_lhk.jenisLhk, tbl_lhk.idLhk');
    $this->db->from('tbl_lhk');
    $this->db->join('tbl_surattugas', 'tbl_lhk.idSuratTugas = tbl_surattugas.idSurat');
    $query = $this->db->get('');
    return $query;
  }

   public function getFileLhk(){
    $this->db->select('file_lhk');
    $this->db->where('file_lhk = ', "0");
    $query = $this->db->get('tbl_lhk');
    return $query->num_rows();
  }

  public function getSuratTugas(){
     $this->db->select('tbl_surattugas.idSurat, tbl_surattugas.noSuratTugas');
     $this->db->from('tbl_surattugas');
    $query = $this->db->get();
    return $query->result();
  }



  public function getAtribut($id){
    $this->db->select('tbl_surattugas.noSuratTugas, tbl_surattugas.tglSurat, tbl_surattugas.maksud, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai, tbl_surattugas.kota, tbl_pegawai.nama, tbl_pegawai.nip, tbl_pegawai.pangkat, tbl_pegawai.golongan, tbl_pegawai.jabatan');
    $this->db->from('tbl_surattugas');
    $this->db->join('tbl_tugas', 'tbl_surattugas.noSuratTugas = tbl_tugas.noSuratTugas');
    $this->db->join('tbl_pegawai','tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
    $this->db->where('tbl_surattugas.idSurat', $id);
      $query = $this->db->get();
    return $query->result();

  }

  public function getSarana(){
     $this->db->select('*');
     $this->db->from('tbl_sarana');
    $query = $this->db->get();
    return $query->result();

  }

  public function getSarana2($id){
     $this->db->select('tbl_sarana.namaSarana,tbl_sarana.alamatSarana,tbl_sarana.kategoriSarana, tbl_sarana.jenisSarana');
     $this->db->from('tbl_sarana');
     $this->db->where('tbl_sarana.idSarana',$id);
     $query = $this->db->get();
     return $query->result();
   
  }

   public function updateLhk($data){
    $this->db->set('tglLhk', $data['tglLhk']); 
    $this->db->set('file_lhk', $data['file_lhk']);
    $this->db->where('idLhk', $data['id']);
    $query = $this->db->update('tbl_lhk');

  }

  public function getFile(){
    $this->db->select('filePeringatan');
    $this->db->where('filePeringatan = ', "0");
    $query = $this->db->get('tbl_peringatan');
    return $query->num_rows();
  }

   public function hapusLhk($id){
   $this->db->delete("tbl_lhk",array("idLhk"=>$id));
 }
}
