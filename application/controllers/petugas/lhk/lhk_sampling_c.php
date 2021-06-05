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
         $data['surat_tugas']= $this->Lhk_model->getSuratTugas();
        $this->template->load('layouts/petugas_template', 'petugas/lhk/lhk_sampling_v',$data);
    }

    public function add(){
    $idSurat = $this->input->post('suratTugas');
    $tglLhk = $this->input->post('tglLhk');
    $sppd = $this->input->post('sppd');
    $kwitansi = $this->input->post('kwitansi');
    $form = $this->input->post('form');
    $detSampling = $this->input->post('detSampling');

    echo $idSurat;
    echo $tglLhk;
    echo $detSampling;

    $data['surat'] = $this->Lhk_model->getAtributSampling($idSurat);

    $data = array
        (
            'title'=>'Cetak LHK Sampling'
            'tglLhk'              => $tglLhk,
            'jenisLhk'        => "Sampling",
            'file_lhk'                  => "0"
        );


    }
}