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



        // $data = array
        // (
        //     'idLhk'                 => $this->input->post('idLhk'),
        //     'idSuratTugas'          => $this->input->post('idSuratTugas'),
        //     'kegiatan'              => $this->input->post('kegiatan'),
        //     'tglPemeriksaan'        => $this->input->post('tglPemeriksaan'),
        //     'kota'                  => $this->input->post('kota'),
        //     'petugas1'              => $this->input->post('petugas1'),
        //     'petugas2'              => $this->input->post('petugas2'),
        //     'petugas3'              => $this->input->post('petugas3'),
        //     'petugas4'              => $this->input->post('petugas4'),
        //     'jenisSarana'           => $this->input->post('jenisSarana'),
        //     'idSarana'              => $this->input->post('idSarana'),
        //     'temuanRHPK'            => $this->input->post('temuanRHPK'),
        //     'isMk'                  => $this->input->post('isMk'),
        //     'tindakLanjut'          => $this->input->post('tindakLanjut'),
        //     'alasanTidakDiperiksa'  => $this->input->post('alasanTidakDiperiksa'),
        //     'keterangan'            => $this->input->post('keterangan')

        // );
    }
}