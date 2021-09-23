<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lhk_umum_c extends MY_Controller
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
    $this->template->load('layouts/petugas_template', 'petugas/lhk/lhk_umum_v', $data);
  }

  public function add()
  {

    $idSurat = $this->input->post('suratTugas');
    $tglLhk = $this->input->post('tglLhk');
    $sppd = $this->input->post('sppd');
    $kwitansi = $this->input->post('kwitansi');
    $form = $this->input->post('form');
    $keterangan = $this->input->post('keterangan');

    // $data['surat'] = $this->Lhk_model->getAtribut($idSurat);
    // $data['idSurat'] = $idSurat;
    // $data['tglLhk'] = $tglLhk;
    // $data['sppd'] = $sppd;
    // $data['kwitansi'] = $kwitansi;
    // $data['form'] = $form;
   
    $data2 = array(
        'tglLhk'   => $tglLhk,
            'jenisLhk' => "umum",
            'pejabatDituju' =>"-",
            'pengesahSppd' => $sppd,
      'pengesahKwitansi' => $kwitansi,
      'pengesahForm' => $form,
      'rincianSampling' => "-",
      'deskripsi' => $keterangan,
      'idSuratTugas' => $idSurat
    );

    $checkvalidation = $this->Lhk_model->checkDuplicate($idSurat);
    if ($checkvalidation == true) {
      $this->db->insert('tbl_lhk', $data2);
      // $this->load->view('petugas/lhk/lhk_umum_isi.php', $data, FALSE);
      redirect('petugas/lhk/list_lhk_c', 'refresh');
    } else {
      redirect('petugas/lhk/lhk_umum_c', 'refresh');
    }
  }

   public function edit(){
    $idSurat = $this->input->post('idSuratTugas');
    $tglLhk = $this->input->post('tglLhk');
    $sppd = $this->input->post('sppd');
    $kwitansi = $this->input->post('kwitansi');
    $form = $this->input->post('form');
    $deskripsi = $this->input->post('keterangan');
  

    $data_edit = array(
          'tglLhk' => $tglLhk,
          'pejabat' => "-",
          'sppd' => $sppd,
          'kwitansi' => $kwitansi,
          'form' =>$form,
          'sampling' =>"-",
          'deskripsi' => $deskripsi,
          'idSurat' => $idSurat
        );


    $this->Lhk_model->updateLhk($data_edit);

     redirect('petugas/lhk/list_lhk_c', 'refresh');

  }
}
