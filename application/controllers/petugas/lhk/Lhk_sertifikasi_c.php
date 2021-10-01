<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lhk_sertifikasi_c extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->check_login();
    if ($this->session->userdata('id_role') != "2") {
      redirect('', 'refresh');
    }
    $this->load->model('Lhk_model');
  }

  public function index()
  {
    $data['surat_tugas'] = $this->Lhk_model->getSuratTugas();
    $data['sarana'] = $this->Lhk_model->getSarana();
    $this->template->load('layouts/petugas_template', 'petugas/lhk/lhk_sertifikasi_v', $data);
  }

  public function add()
  {

    $idSurat = $this->input->post('suratTugas');
    $tglLhk = $this->input->post('tglLhk');
    $sppd = $this->input->post('sppd');
    $kwitansi = $this->input->post('kwitansi');
    $form = $this->input->post('form');
    $sarana = $this->input->post('sarana');
    $temuan = $this->input->post('temuan');
    $tl = $this->input->post('tl');
    $kesimpulan = $this->input->post('kesimpulan');
    $keterangan = $this->input->post('keterangan');

    // $data['surat'] = $this->Lhk_model->getAtribut($idSurat);
    // $data['idSurat'] = $idSurat;
    // $data['tglLhk'] = $tglLhk;
    // $data['sppd'] = $sppd;
    // $data['kwitansi'] = $kwitansi;
    // $data['form'] = $form;
    // $array_sarana = array();
    // foreach ($sarana as $num) {
    //   $sarana2['data'] = $this->Lhk_model->getSarana2($num);
    //   array_push($array_sarana, $sarana2);
    // }
    // $data['sarana'] =  $array_sarana;
    // $data['keterangan'] = $keterangan;
    // $data['kesimpulan'] = $kesimpulan;


    $data2 = array(
      'tglLhk'   => $tglLhk,
            'jenisLhk' => "sertifikasi",
            'pejabatDituju' =>"-",
            'pengesahSppd' => $sppd,
      'pengesahKwitansi' => $kwitansi,
      'pengesahForm' => $form,
      'rincianSampling' => "-",
      'deskripsi' => $kesimpulan,
      'idSuratTugas' => $idSurat
    );

    $checkvalidation = $this->Lhk_model->checkDuplicate($idSurat);
    if ($checkvalidation == true) {
      for ($i = 0; $i < count($sarana); $i++) {
        if ($sarana[$i] != "Pilih Sarana") {
          $data_sarana = array(
             'idSarana'   => $sarana[$i],
            'statusBalai'   => "-",
            'isMk'   => "-",
            'temuan' => "0",
            'deskripsiTemuan' => $keterangan[$i],
            'jenisTl' => "-",
            'idSuratTugas' => $idSurat
          );
          $this->db->insert('tbl_surattl', $data_sarana);
        } else {
          break;
        }
      }

      $this->db->insert('tbl_lhk', $data2);
      redirect('petugas/lhk/list_lhk_c', 'refresh');
    } else {
      redirect('petugas/lhk/lhk_sertifikasi_c', 'refresh');
    }
  }

  public function edit(){
    $idSurat = $this->input->post('idSuratTugas');
    $tglLhk = $this->input->post('tglLhk');
    $sppd = $this->input->post('sppd');
    $kwitansi = $this->input->post('kwitansi');
    $form = $this->input->post('form');
    $sarana = $this->input->post('sarana');
    $temuan = $this->input->post('temuan');
    $tl = $this->input->post('tl');
    $kesimpulan = $this->input->post('kesimpulan');
    $keterangan = $this->input->post('keterangan');

    $data_edit = array(
          'tglLhk' => $tglLhk,
          'pejabat' => "-",
          'sppd' => $sppd,
          'kwitansi' => $kwitansi,
          'form' =>$form,
          'sampling' =>"-",
          'deskripsi' => $kesimpulan,
          'idSurat' => $idSurat
        );


    $this->Lhk_model->updateLhk($data_edit);

  

     if (count($sarana) == count($keterangan)) {
        $this->Lhk_model->hapusDetailSarana($idSurat);

    for ($i = 0; $i < count($sarana); $i++) {

       
          $data_sarana = array(
            'idSarana'   => $sarana[$i],
            'statusBalai'   => "-",
            'isMk'   => "-",
            'temuan' => "-",
            'deskripsiTemuan' => $keterangan[$i],
            'jenisTl' => "-",
            'idSuratTugas' => $idSurat
          );
          $this->db->insert('tbl_surattl', $data_sarana);
        } 
      }else {
           redirect('petugas/lhk/list_lhk_c', 'refresh');
        }

     redirect('petugas/lhk/list_lhk_c', 'refresh');

  }

}
