<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lhk_pem_c extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('add_lhk_pem_m');

        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {

        $this->template->load('layouts/petugas_template', 'petugas/lhk/lhk_pem_v');
    }
    public function add()
    {
        $this->load->model('add_lhk_pem_m');

        $post_no_surat = $this->input->post('idSuratTugas');
        $data = array
        (
            'idLhk'                 => $this->input->post('idLhk'),
            'idSuratTugas'          => $this->input->post('idSuratTugas'),
            'kegiatan'              => $this->input->post('kegiatan'),
            'tglPemeriksaan'        => $this->input->post('tglPemeriksaan'),
            'kota'                  => $this->input->post('kota'),
            'petugas1'              => $this->input->post('petugas1'),
            'petugas2'              => $this->input->post('petugas2'),
            'petugas3'              => $this->input->post('petugas3'),
            'petugas4'              => $this->input->post('petugas4'),
            'jenisSarana'           => $this->input->post('jenisSarana'),
            'idSarana'              => $this->input->post('idSarana'),
            'temuanRHPK'            => $this->input->post('temuanRHPK'),
            'isMk'                  => $this->input->post('isMk'),
            'tindakLanjut'          => $this->input->post('tindakLanjut'),
            'alasanTidakDiperiksa'  => $this->input->post('alasanTidakDiperiksa'),
            'keterangan'            => $this->input->post('keterangan')

        );
        $checkvalidation = $this->add_lhk_pem_m->checkDuplicate($post_no_surat);
        if ($checkvalidation == true) {
            $this->db->insert('tbl_lhk', $data);
            $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
            redirect('petugas/lhk_pem_c', 'refresh');
        } else {
            $this->session->set_flashdata('failed', 'Data Duplikat');
            redirect('petugas/lhk_pem_c', 'refresh');
        }
    }
}
