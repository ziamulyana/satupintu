<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lhk_iklan_c extends MY_Controller
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
        $this->template->load('layouts/petugas_template', 'petugas/lhk/lhk_iklan_v',$data);
    }

    public function add(){

    $idSurat = $this->input->post('suratTugas'); 
    $tglLhk = $this->input->post('tglLhk');
    $sppd = $this->input->post('sppd');
    $kwitansi =  $this->input->post('kwitansi');
    $form = $this->input->post('form');
    $detSampling = $this->input->post('detSampling');
    $detKegiatan = $this->input->post('detKegiatan');
    $pejabat = $this->input->post('pejabat');
   
    $data['surat'] = $this->Lhk_model->getAtribut($idSurat);
    $data['noSurat'] = $idSurat ;
    $data['tglLhk'] =  $tglLhk;
    $data['sppd'] =  $sppd;
    $data['kwitansi'] = $kwitansi;
    $data['form'] =  $form;
    $data['detSampling'] = $detSampling;
    $data['detKegiatan'] =  $detKegiatan;
    $data['pejabat'] =$pejabat;


    $data2 = array
        (
            'tglLhk'   => $tglLhk,
            'jenisLhk' => "iklan",
            'file_lhk' => "0",
            'idSuratTugas' =>$idSurat
        );





    $this->db->insert('tbl_lhk',$data2);
     $this->load->view('petugas/lhk/lhk_iklan_isi.php', $data, FALSE);

    }
}