<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lhk_pem_c extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Lhk_model');

        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {

        $data['surat_tugas']= $this->Lhk_model->getSuratTugas();
        $data['sarana'] = $this->Lhk_model->getSarana();
        $this->template->load('layouts/petugas_template', 'petugas/lhk/lhk_pem_v',$data);
    }
    public function add()
    {
       

      $noSurat = $this->input->post('suratTugas');
      $tglLhk = $this->input->post('tglLhk');
      $sppd = $this->input->post('sppd');
      $kwitansi = $this->input->post('kwitansi');
      $form = $this->input->post('form');
      $sarana = $this->input->post('sarana');
      $temuan = $this->input->post('temuan');
      $tl = $this->input->post('tl');
      $kesimpulan = $this->input->post('kesimpulan');
      $keterangan = $this->input->post('keterangan');

       $data2 = array
        (
            'tglLhk'   => $tglLhk,
            'jenisLhk' => "pem",
            'file_lhk' => "0"
        );

        echo $noSurat;
        echo $tglLhk;
        echo $sppd;
        echo $kwitansi;
        echo $form;
        print_r($sarana);
        print_r($temuan);
        print_r($tl);
        print_r($kesimpulan);
        print_r($keterangan);
       
    // $this->db->insert('tbl_lhk', $data);
    // $this->load->view('petugas/lhk/lhk_pem_isi.php', $data, FALSE);

    }


    public function getSarana2(){
       echo $this->Lhk_model->getSarana2();
           }
}
