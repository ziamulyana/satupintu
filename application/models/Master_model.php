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
   $this->db->set('namaSarana', $data1['namas']); 
   $this->db->set('alamatSarana', $data1['alamats']);
   $this->db->set('pemilik', $data1['pemiliks']); 
   $this->db->set('noIzinSarana', $data1['noIS']);
   $this->db->set('penangungJawab', $data1['pJ']); 
   $this->db->set('noIzinPj', $data1['noIPJ']);
   $this->db->set('kategoriSarana', $data1['kS']); 
   $this->db->set('jenisSarana', $data1['jS']); 
   $this->db->set('kota', $data1['kotas']);  
   $this->db->where('idSarana', $data1['idSarana']);
   $query = $this->db->update('tbl_sarana');
}

public function hapus_dataSarana($id){
   $this->db->delete("tbl_sarana",array("idSarana"=>$id));
 }


}