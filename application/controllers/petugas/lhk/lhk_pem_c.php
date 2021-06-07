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
       

        $post_no_surat = $this->input->post('idSuratTugas');
       $data2 = array
        (
            'tglLhk'   => $tglLhk,
            'jenisLhk' => "pem",
            'file_lhk' => "0"
        );

       
    $this->db->insert('tbl_lhk', $data);
    $this->load->view('petugas/lhk/lhk_pem_isi.php', $data, FALSE);

    }
}
