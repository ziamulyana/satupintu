<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // Listing Konfigurasi
    public function getLaporanAll($jenis, $komoditi, $status, $tglAwal, $tglAkhir)
    {
        $this->db->select('group_concat(tbl_pegawai.nama) as namaPetugas ,,tbl_surattugas.noSuratTugas,tbl_sarana.namaSarana,tbl_sarana.alamatSarana, tbl_surattugas.tglSurat, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai, tbl_surattugas.maksud, tbl_sarana.kategoriSarana, tbl_surattl.deskripsiTemuan, tbl_surattl.jenisTl, tbl_peringatan.isiPeringatan, tbl_surattl.statusBalai');
        $this->db->from('tbl_surattugas');
        $this->db->join('tbl_surattl', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat');
        $this->db->join('tbl_sarana', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
        $this->db->join('tbl_peringatan', 'tbl_peringatan.idTl = tbl_surattl.idTl', 'left');
        $this->db->join('tbl_tugas', 'tbl_tugas.noSuratTugas = tbl_surattugas.noSuratTugas');
        $this->db->join('tbl_pegawai', 'tbl_pegawai.idPegawai = tbl_tugas.idPetugas');
        $this->db->where('tbl_sarana.jenisSarana', $jenis);
        $this->db->where('tbl_sarana.kategoriSarana', $komoditi);
        $this->db->where('tbl_surattl.statusBalai', $status);
        // $this->db->where('tbl_surattugas.tglSurat BETWEEN "'. date('Y-m-d', strtotime($tglAwal)). '" and "'. date('Y-m-d', strtotime($tglAkhir)).'"');
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
        $this->db->group_by('tbl_sarana.namaSarana');
        $query = $this->db->get();
        return $query->result();
    }

    public function getLaporanSurat($tglAwal, $tglAkhir)
    {
        $this->db->select('tbl_surattugas.noSuratTugas, tbl_surattugas.maksud, tbl_surattugas.kota, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai, tbl_sarana.namaSarana, tbl_sarana.alamatSarana, tbl_sarana.jenisSarana, tbl_surattl.statusBalai, tbl_surattl.jenisTl, tbl_surattl.temuan, tbl_surattl.deskripsiTemuan, tbl_peringatan.noSuratPeringatan, tbl_peringatan.tglSuratPeringatan');
        $this->db->from('tbl_surattugas');
        $this->db->join('tbl_surattl', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat', 'left');
        $this->db->join('tbl_sarana', 'tbl_surattl.idSarana = tbl_sarana.idSarana', 'left');
        $this->db->join('tbl_peringatan', 'tbl_peringatan.idTl = tbl_surattl.idTl', 'left');
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
        $query = $this->db->get();
        return $query->result();
    }

    public function getLaporanAnggaran()
    {
        $this->db->select('*');
        $this->db->from('view_riil');
        $query = $this->db->get();
    
        return $query;
    }

    public function getPetugasSurat($tglAwal, $tglAkhir)
    {
        $this->db->select('tbl_surattugas.noSuratTugas, tbl_pegawai.nama');
        $this->db->from('tbl_pegawai');
        $this->db->join('tbl_tugas', 'tbl_pegawai.idPegawai = tbl_tugas.idPetugas');
        $this->db->join('tbl_surattugas', 'tbl_surattugas.noSuratTugas = tbl_tugas.noSuratTugas');
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
        $query = $this->db->get();
        return $query->result();
    }

    public function getFeedbackSurat($tglAwal, $tglAkhir)
    {
        $this->db->select('tbl_surattugas.noSuratTugas, tbl_sarana.namaSarana ,tbl_feedback.noSuratFeedback, max(tbl_feedback.tglFeedback) as tglFeedback');
        $this->db->from('tbl_surattugas');
        $this->db->join('tbl_surattl', 'tbl_surattugas.idSurat = tbl_surattl.idSuratTugas', "left");
        $this->db->join('tbl_sarana', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
        $this->db->join('tbl_peringatan', 'tbl_surattl.idTl = tbl_peringatan.idTl', "left");
        $this->db->join('tbl_feedback', 'tbl_peringatan.idPeringatan = tbl_feedback.idSuratPeringatan');
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
        $this->db->group_by('tbl_sarana.namaSarana');
        $query = $this->db->get();
        return $query->result();
    }

    public function getClosedSurat($tglAwal, $tglAkhir)
    {
        $this->db->select('tbl_surattugas.noSuratTugas, tbl_sarana.namaSarana ,tbl_peringatan.noSuratPeringatan, tbl_peringatan.tglSuratPeringatan, tbl_peringatan.pembuatCapa');
        $this->db->from('tbl_surattugas');
        $this->db->join('tbl_surattl', 'tbl_surattugas.idSurat = tbl_surattl.idSuratTugas');
        $this->db->join('tbl_sarana', 'tbl_surattl.idSarana = tbl_sarana.idSarana');
        $this->db->join('tbl_peringatan', 'tbl_surattl.idTl = tbl_peringatan.idTl');
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
        $this->db->where("tbl_peringatan.jenisPeringatan", "Close CAPA");
        $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
        $query = $this->db->get();
        return $query->result();
    }

    public function getHasilPemeriksaan($index1,$index2,$index3,$index4,$index5,$tglAwal, $tglAkhir){
     $this->db->select('tbl_sarana.idSarana, tbl_surattl.idSarana, tbl_surattl.idSuratTugas, tbl_surattugas.idSurat, tbl_surattugas.tglSurat');
     $this->db->from('tbl_surattl');
     $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
      $this->db->join('tbl_surattugas', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat');
      $this->db->where('tbl_surattugas.tglSurat BETWEEN "'. date('Y-m-d', strtotime($tglAwal)). '" and "'. date('Y-m-d', strtotime($tglAkhir)).'"');
     //  $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
     // $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
         $this->db->group_start();
     $this->db->where('tbl_sarana.jenisSarana',$index1);
     $this->db->or_where('tbl_sarana.jenisSarana',$index2);
     $this->db->or_where('tbl_sarana.jenisSarana',$index3);
     $this->db->or_where('tbl_sarana.jenisSarana',$index4);
      $this->db->or_where('tbl_sarana.jenisSarana',$index5);
          $this->db->group_end();

      $query = $this->db->get('');
     $count_row = $query->num_rows();
     return $count_row;
    }

    public function getMKPemeriksaan($index1,$index2,$index3,$index4,$index5,$tglAwal, $tglAkhir){
     $this->db->select('tbl_sarana.idSarana, tbl_surattl.idSarana, tbl_surattl.idSuratTugas, tbl_surattl.isMk, tbl_surattugas.idSurat, tbl_surattugas.tglSurat');
     $this->db->from('tbl_surattl');
     $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
      $this->db->join('tbl_surattugas', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat');
      $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
     $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
     $this->db->where("tbl_surattl.isMk", "1");
          $this->db->group_start();
     $this->db->where('tbl_sarana.jenisSarana',$index1);
     $this->db->or_where('tbl_sarana.jenisSarana',$index2);
     $this->db->or_where('tbl_sarana.jenisSarana',$index3);
     $this->db->or_where('tbl_sarana.jenisSarana',$index4);
      $this->db->or_where('tbl_sarana.jenisSarana',$index5);
           $this->db->group_end();
      $query = $this->db->get('');
     $count_row = $query->num_rows();
     return $count_row;
    }

    //  public function getTMKPemeriksaan($index1,$index2,$index3,$index4,$index5,$tglAwal, $tglAkhir){
    //  $this->db->select('tbl_sarana.idSarana, tbl_surattl.idSarana, tbl_surattl.idSuratTugas, tbl_surattl.isMk, tbl_surattugas.idSurat, tbl_surattugas.tglSurat');
    //  $this->db->from('tbl_surattl');
    //  $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
    //   $this->db->join('tbl_surattugas', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat');
    //   $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
    //  $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
    //  $this->db->where("tbl_surattl.isMk", 0);
    //  $this->db->group_start();  
    //  $this->db->where('tbl_sarana.jenisSarana',$index1);
    //  $this->db->or_where('tbl_sarana.jenisSarana',$index2);
    //  $this->db->or_where('tbl_sarana.jenisSarana',$index3);
    //  $this->db->or_where('tbl_sarana.jenisSarana',$index4);
    //   $this->db->or_where('tbl_sarana.jenisSarana',$index5);
    //    $this->db->group_end();
    //   $query = $this->db->get('');
    //  $count_row = $query->num_rows();
    //  return $count_row;
    // }




       public function getPembinaan($index1,$index2,$index3,$index4,$index5,$tglAwal, $tglAkhir){
     $this->db->select('tbl_sarana.idSarana, tbl_surattl.idSarana, tbl_surattl.idSuratTugas, tbl_surattl.jenisTl, tbl_surattugas.idSurat, tbl_surattugas.tglSurat');
     $this->db->from('tbl_surattl');
     $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
      $this->db->join('tbl_surattugas', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat');
      $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
     $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
       
     $this->db->where("tbl_surattl.jenisTl", "Pembinaan");
    $this->db->group_start();
     $this->db->or_where('tbl_sarana.jenisSarana',$index1);
     $this->db->or_where('tbl_sarana.jenisSarana',$index2);
     $this->db->or_where('tbl_sarana.jenisSarana',$index3);
     $this->db->or_where('tbl_sarana.jenisSarana',$index4);
      $this->db->or_where('tbl_sarana.jenisSarana',$index5);
           $this->db->group_end();
      $query = $this->db->get('');
     $count_row = $query->num_rows();
     return $count_row;
    }

      public function getPembinaanTek($index1,$index2,$index3,$index4,$index5,$tglAwal, $tglAkhir){
     $this->db->select('tbl_sarana.idSarana, tbl_surattl.idSarana, tbl_surattl.idSuratTugas, tbl_surattl.jenisTl, tbl_surattugas.idSurat, tbl_surattugas.tglSurat');
     $this->db->from('tbl_surattl');
     $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
      $this->db->join('tbl_surattugas', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat');
      $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
     $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
        
     $this->db->where("tbl_surattl.jenisTl", "Pembinaan Teknis");
       $this->db->group_start();
     $this->db->where('tbl_sarana.jenisSarana',$index1);
     $this->db->or_where('tbl_sarana.jenisSarana',$index2);
     $this->db->or_where('tbl_sarana.jenisSarana',$index3);
     $this->db->or_where('tbl_sarana.jenisSarana',$index4);
      $this->db->or_where('tbl_sarana.jenisSarana',$index5);
           $this->db->group_end();

      $query = $this->db->get('');
     $count_row = $query->num_rows();
     return $count_row;
    }

     public function getPeringatan($index1,$index2,$index3,$index4,$index5,$tglAwal, $tglAkhir){
     $this->db->select('tbl_sarana.idSarana, tbl_surattl.idSarana, tbl_surattl.idSuratTugas, tbl_surattl.jenisTl, tbl_surattugas.idSurat, tbl_surattugas.tglSurat');
     $this->db->from('tbl_surattl');
     $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
      $this->db->join('tbl_surattugas', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat');
      $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
     $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
         
     $this->db->where("tbl_surattl.jenisTl", "Peringatan");
      $this->db->group_start();
     $this->db->where('tbl_sarana.jenisSarana',$index1);
     $this->db->or_where('tbl_sarana.jenisSarana',$index2);
     $this->db->or_where('tbl_sarana.jenisSarana',$index3);
     $this->db->or_where('tbl_sarana.jenisSarana',$index4);
      $this->db->or_where('tbl_sarana.jenisSarana',$index5);
           $this->db->group_end();
      $query = $this->db->get('');
     $count_row = $query->num_rows();
     return $count_row;
    }

     public function getPeringatanKeras($index1,$index2,$index3,$index4,$index5,$tglAwal, $tglAkhir){
     $this->db->select('tbl_sarana.idSarana, tbl_surattl.idSarana, tbl_surattl.idSuratTugas, tbl_surattl.jenisTl, tbl_surattugas.idSurat, tbl_surattugas.tglSurat');
     $this->db->from('tbl_surattl');
     $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
      $this->db->join('tbl_surattugas', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat');
      $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
     $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
          
     $this->db->where("tbl_surattl.jenisTl", "Peringatan Keras");
     $this->db->group_start();
     $this->db->where('tbl_sarana.jenisSarana',$index1);
     $this->db->or_where('tbl_sarana.jenisSarana',$index2);
     $this->db->or_where('tbl_sarana.jenisSarana',$index3);
     $this->db->or_where('tbl_sarana.jenisSarana',$index4);
      $this->db->or_where('tbl_sarana.jenisSarana',$index5);
     $this->db->group_end();

      $query = $this->db->get('');
     $count_row = $query->num_rows();
     return $count_row;
    }

     public function getPSK($index1,$index2,$index3,$index4,$index5,$tglAwal, $tglAkhir){
     $this->db->select('tbl_sarana.idSarana, tbl_surattl.idSarana, tbl_surattl.idSuratTugas, tbl_surattl.jenisTl, tbl_surattugas.idSurat, tbl_surattugas.tglSurat');
     $this->db->from('tbl_surattl');
     $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_surattl.idSarana');
      $this->db->join('tbl_surattugas', 'tbl_surattl.idSuratTugas = tbl_surattugas.idSurat');
      $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') >='$tglAwal'");
     $this->db->where("DATE_FORMAT(tbl_surattugas.tglSurat,'%Y-%m-%d') <='$tglAkhir'");
     $this->db->where("tbl_surattl.jenisTl", "Penghentian Sementara Kegiatan");
          $this->db->group_start();
     $this->db->where('tbl_sarana.jenisSarana',$index1);
     $this->db->or_where('tbl_sarana.jenisSarana',$index2);
     $this->db->or_where('tbl_sarana.jenisSarana',$index3);
     $this->db->or_where('tbl_sarana.jenisSarana',$index4);
      $this->db->or_where('tbl_sarana.jenisSarana',$index5);
     $this->db->group_end();
      $query = $this->db->get('');
     $count_row = $query->num_rows();
     return $count_row;
    }

}
