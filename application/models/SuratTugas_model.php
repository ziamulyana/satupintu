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

  // ubah surat tugas
  public function ubah_surat($data)
  {
    $this->db->set('noSuratTugas', $data['nosurat']);
    $this->db->set('tglSurat', $data['tglsurat']);
    $this->db->set('tglMulai', $data['tglulai']);
    $this->db->set('bebanBiaya', $data['bebanbiaya']);
    $this->db->set('kendaraan', $data['kendaraann']);
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
