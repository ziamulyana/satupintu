<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lhk_sampling_c extends MY_Controller
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
        $this->template->load('layouts/petugas_template', 'petugas/lhk/lhk_sampling_v', $data);
    }

    public function add()
    {

        $idSurat = $this->input->post('suratTugas');
        $tglLhk = $this->input->post('tglLhk');
        $sppd = $this->input->post('sppd');
        $kwitansi =  $this->input->post('kwitansi');
        $form = $this->input->post('form');
        $detSampling = $this->input->post('detSampling');
        $pejabat = $this->input->post('pejabat');


        $data2 = array(
            'tglLhk'   => $tglLhk,
            'jenisLhk' => "sampling",
            'pejabatDituju' =>$pejabat,
            'pengesahSppd' => $sppd,
      'pengesahKwitansi' => $kwitansi,
      'pengesahForm' => $form,
      'rincianSampling' => $detSampling,
            'idSuratTugas' => $idSurat
        );

        $checkvalidation = $this->Lhk_model->checkDuplicate($idSurat);
        if ($checkvalidation == true) {
            $this->db->insert('tbl_lhk', $data2);
            redirect('petugas/lhk/list_lhk_c', 'refresh');
            // $this->load->view('petugas/lhk/lhk_sampling_isi.php', $data, FALSE);
        } else {
            redirect('petugas/lhk/lhk_sampling_c', 'refresh');
        }
    }



    public function edit(){
    $idSurat = $this->input->post('idSuratTugas');
    $tglLhk = $this->input->post('tglLhk');
    $pejabat = $this->input->post('pejabat');
    $sppd = $this->input->post('sppd');
    $kwitansi = $this->input->post('kwitansi');
    $form = $this->input->post('form');
    $sampling = $this->input->post('detSampling');
  

    $data_edit = array(
          'tglLhk' => $tglLhk,
          'pejabat' => $pejabat,
          'sppd' => $sppd,
          'kwitansi' => $kwitansi,
          'form' =>$form,
          'sampling' =>$sampling,
          'deskripsi' => "-",
          'idSurat' => $idSurat
        );


    $this->Lhk_model->updateLhk($data_edit);

     redirect('petugas/lhk/list_lhk_c', 'refresh');

  }
}
