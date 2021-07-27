<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lhk_model extends CI_Model
{


  function __construct()
  {
    parent::__construct();
  }

  public function jenisLhk($id)
  {
    $this->db->select('jenisLhk');
    $this->db->where('tbl_lhk.idLhk', $id);
    $query = $this->db->get('tbl_lhk');
    return $query->result();
  }

  public function jenisLhkSurat($id)
  {
    $this->db->select('jenisLhk');
    $this->db->where('tbl_lhk.idSuratTugas', $id);
    $query = $this->db->get('tbl_lhk');
    return $query->result();
  }


  public function getLhk()
  {

    $this->db->select('tbl_surattugas.noSuratTugas, tbl_surattugas.idSurat, tbl_lhk.tglLhk,  tbl_lhk.jenisLhk, tbl_lhk.idLhk');
    $this->db->from('tbl_lhk');
    $this->db->join('tbl_surattugas', 'tbl_lhk.idSuratTugas = tbl_surattugas.idSurat');
    $query = $this->db->get('');
    return $query;
  }

  public function getLhkDet($id)
  {

    $this->db->select('tbl_lhk.idLhk, tbl_lhk.tglLhk, tbl_lhk.jenisLhk, tbl_lhk.pejabatDituju, tbl_lhk.pengesahSppd, tbl_lhk.pengesahKwitansi, tbl_lhk.pengesahForm, tbl_lhk.rincianSampling, tbl_lhk.deskripsi, tbl_surattugas.noSuratTugas, tbl_surattugas.idSurat, tbl_surattl.idSarana, tbl_surattl.statusBalai, tbl_surattl.isMk, tbl_surattl.temuan, tbl_surattl.deskripsiTemuan, tbl_surattl.jenisTl, tbl_sarana.namaSarana');
    $this->db->from('tbl_lhk');
    $this->db->join('tbl_surattugas', 'tbl_lhk.idSuratTugas = tbl_surattugas.idSurat');
    $this->db->join('tbl_surattl', 'tbl_surattugas.idSurat = tbl_surattl.idSuratTugas',"left");
    $this->db->join('tbl_sarana', 'tbl_surattl.idSarana = tbl_sarana.idSarana',"left");
    $this->db->where('tbl_lhk.idLhk', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function getLhkDetail($id)
  {

    $this->db->select('tbl_lhk.idLhk, tbl_lhk.tglLhk, tbl_lhk.jenisLhk, tbl_lhk.pejabatDituju, tbl_lhk.pengesahSppd, tbl_lhk.pengesahKwitansi, tbl_lhk.pengesahForm, tbl_lhk.rincianSampling, tbl_lhk.deskripsi, tbl_surattugas.noSuratTugas, tbl_surattugas.idSurat, tbl_surattl.idSarana, tbl_surattl.statusBalai, tbl_surattl.isMk, tbl_surattl.temuan, tbl_surattl.deskripsiTemuan, tbl_surattl.jenisTl, tbl_sarana.namaSarana');
    $this->db->from('tbl_lhk');
    $this->db->join('tbl_surattugas', 'tbl_lhk.idSuratTugas = tbl_surattugas.idSurat');
    $this->db->join('tbl_surattl', 'tbl_surattugas.idSurat = tbl_surattl.idSuratTugas',"left");
    $this->db->join('tbl_sarana', 'tbl_surattl.idSarana = tbl_sarana.idSarana',"left");
    $this->db->where('tbl_lhk.idSuratTugas', $id);
    $query = $this->db->get();
    return $query->result();
  }


  public function getFileLhk()
  {
    $this->db->select('file_lhk');
    $this->db->where('file_lhk = ', "0");
    $this->db->join('tbl_surattugas', 'tbl_lhk.idSuratTugas = tbl_surattugas.idSurat');
    $query = $this->db->get('tbl_lhk');
    return $query->num_rows();
  }

  public function getSuratTugas()
  {
    $this->db->select('tbl_surattugas.idSurat, tbl_surattugas.noSuratTugas');
    $this->db->from('tbl_surattugas');
    $query = $this->db->get();
    return $query->result();
  }



  public function getAtribut($id)
  {
    $this->db->select('tbl_surattugas.noSuratTugas, tbl_surattugas.tglSurat, tbl_surattugas.maksud, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai, tbl_surattugas.kota, tbl_pegawai.nama, tbl_pegawai.nip, tbl_pegawai.pangkat, tbl_pegawai.golongan, tbl_pegawai.jabatan');
    $this->db->from('tbl_surattugas');
    $this->db->join('tbl_tugas', 'tbl_surattugas.noSuratTugas = tbl_tugas.noSuratTugas');
    $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
    $this->db->where('tbl_surattugas.idSurat', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function checkDuplicate($id)
  {
    $this->db->join('tbl_surattugas', 'tbl_surattugas.idSurat= tbl_lhk.idSuratTugas');
    $this->db->where('tbl_lhk.idSuratTugas', $id);
    $query = $this->db->get('tbl_lhk');
    $count_row = $query->num_rows();
    if ($count_row > 0) {
      return false;
    } else {
      return true;
    }
  }

  public function getSarana()
  {
    $this->db->select('*');
    $this->db->from('tbl_sarana');
    $query = $this->db->get();
    return $query->result();
  }

  public function getSaranaPem(){
    $this->db->select('*');
    $this->db->from('tbl_sarana');
    $query = $this->db->get();
    $json = $query->result();
    echo json_encode($json);
 //    $output = '<option value="">Pilih Sarana</option>';
 //    foreach($query->result() as $row)
 //    {
 //     $output .= '<option value="'.$row->idSarana.'">'.$row->namaSarana.'</option>';
 // }
 // return $output;


}


  public function getSarana2($id)
  {
    $this->db->select('tbl_sarana.namaSarana,tbl_sarana.alamatSarana,tbl_sarana.kategoriSarana, tbl_sarana.jenisSarana');
    $this->db->from('tbl_sarana');
    $this->db->where('tbl_sarana.idSarana', $id);
    $query = $this->db->get();
    return $query->result();
  }

  public function updateLhk($data)
  {
    $this->db->set('tglLhk', $data['tglLhk']);
    $this->db->set('pejabatDituju', $data['pejabat']);
    $this->db->set('pengesahSppd',$data['sppd']);
    $this->db->set('pengesahKwitansi', $data['kwitansi']);
    $this->db->set('pengesahForm', $data['form']);
    $this->db->set('rincianSampling', $data['sampling']);
    $this->db->set('deskripsi', $data['deskripsi']);
    $this->db->where('idSuratTugas', $data['idSurat']);
    $query = $this->db->update('tbl_lhk');
  }


  public function getFile()
  {
    $this->db->select('filePeringatan');
    $this->db->where('filePeringatan = ', "0");
    $query = $this->db->get('tbl_peringatan');
    return $query->num_rows();
  }

  public function hapusLhk($id)
  {
    $this->db->delete("tbl_lhk", array("idLhk" => $id));
  }

  public function hapusDetailSarana ($id){
    $this->db->delete("tbl_surattl", array("idSuratTugas" => $id));
  }
}
