<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratPerjadin_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }

    public function getSuratTugas()
    {
      $this->db->select('*');
      $this->db->from('tbl_surattugas');
      $query = $this->db->get('');
      return $query->result();
    }

    public function getpejabat()
    {
      $this->db->select('*');
      $this->db->from('tbl_pejabat');
      $query = $this->db->get('');
      return $query->result();
    }

    public function getPetugas($id){
    $this->db->select('tbl_pegawai.idPegawai,tbl_pegawai.nama');
    $this->db->from('tbl_tugas');
    $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
    $this->db->where('tbl_tugas.noSuratTugas', $id);
    $query = $this->db->get('');
    $output = '<option value="">Pilih Petugas</option>';
    foreach($query->result() as $row)
    {
     $output .= '<option value="'.$row->idPegawai.'">'.$row->nama.'</option>';
 }
 return $output;

}

    // print SPD
    public function print_spd($id,$idPetugas,$id_pejabat)
    {
      $this->db->select('tbl_tugas.urutan, tbl_pejabat.nama_jabatan, tbl_pejabat.nama_pejabat, tbl_ppk.nama_ppk, tbl_surattugas.noSuratTugas, tbl_tugas.idPetugas, tbl_pegawai.nama, tbl_pegawai.pangkat, tbl_pegawai.golongan, tbl_pegawai.nip, tbl_pegawai.jabatan, tbl_surattugas.maksud, tbl_surattugas.kota, tbl_surattugas.kendaraan, tbl_surattugas.lamaPerjalanan, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai, tbl_anggaran.mak, tbl_surattugas.tglSurat, tbl_surattugas.jabatanPenandatangan, tbl_surattugas.namaPenandatangan');
      $this->db->from('tbl_surattugas');
      $this->db->join('tbl_tugas', 'tbl_surattugas.noSuratTugas = tbl_tugas.noSuratTugas');
      $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
      $this->db->join('tbl_anggaran', 'tbl_surattugas.idAnggaran = tbl_anggaran.idAnggaran');
      $this->db->join('tbl_ppk', 'tbl_surattugas.idppk = tbl_ppk.idSurat');
      $this->db->join('tbl_pejabat', 'tbl_surattugas.id_pejabat = tbl_pejabat.id_pejabat');
      $this->db->where(array('tbl_tugas.noSuratTugas'=>$id, 'tbl_tugas.idPetugas'=> $idPetugas, 'tbl_pejabat.id_pejabat'=> $id_pejabat));
      $query = $this->db->get('');
      return $query;
    }
}