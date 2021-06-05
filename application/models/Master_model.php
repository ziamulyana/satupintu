<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model{


  function __construct()
  {
    parent::__construct();
}


public function getPegawai(){
    $this->db->select('*');
    $this->db->from('tbl_pegawai');
    
    $query = $this->db->get('');
    return $query->result();
}

 public function updatePegawai($data){
   $this->db->set('nama', $data['nama']); 
   $this->db->set('jabatan', $data['jabatan']);
   $this->db->set('nip', $data['nip']); 
   $this->db->set('pangkat', $data['pangkat']);
   $this->db->set('golongan', $data['golongan']); 
   
   $this->db->where('idPegawai', $data['idPegawai']);
   $query = $this->db->update('tbl_pegawai');
}

public function hapus_dataPegawai($id){
   $this->db->delete("tbl_pegawai",array("idPegawai"=>$id));
 }

public function getSarana(){
    $this->db->select('*');
    $this->db->from('tbl_sarana');
    $query = $this->db->get('');
    return $query->result();
}

 public function updateSarana($data1){
   $this->db->set('namaSarana', $data1['namaSarana']); 
   $this->db->set('alamatSarana', $data1['alamatSarana']);
   $this->db->set('pemilik', $data1['pemilik']); 
   $this->db->set('noIzinSarana', $data1['noIzinSarana']);
   $this->db->set('penanggungJawab', $data1['penanggungJawab']); 
   $this->db->set('noIzinPj', $data1['noIzinPj']);
   $this->db->set('kategoriSarana', $data1['kategoriSarana']); 
   $this->db->set('jenisSarana', $data1['jenisSarana']); 
   $this->db->set('kota', $data1['kota']);  
   $this->db->where('idSarana', $data1['idSarana']);
   $query = $this->db->update('tbl_sarana');
}

public function hapus_dataSarana($id){
   $this->db->delete("tbl_sarana",array("idSarana"=>$id));
 }


public function getAnggaran(){
    $this->db->select('*');
    $this->db->from('tbl_anggaran');
    $query = $this->db->get('');
    return $query->result();
}

 public function updateAnggaran($data2){
   $this->db->set('mak', $data2['mak']); 
   $this->db->set('namaAnggaran', $data2['namaAnggaran']);
   $this->db->set('uraianKegiatan', $data2['uraianKegiatan']); 
   $this->db->set('divisi', $data2['divisi']);
   $this->db->set('kode', $data2['kode']); 
   $this->db->set('pagu', $data2['pagu']);
   $this->db->set('realisasi', $data2['realisasi']); 
   $this->db->where('idAnggaran', $data2['idAnggaran']);
   $query = $this->db->update('tbl_anggaran');
}

public function hapus_dataAnggaran($id){
   $this->db->delete("tbl_anggaran",array("idAnggaran"=>$id));
 }

}