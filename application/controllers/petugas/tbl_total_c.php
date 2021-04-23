<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tbl_total_c extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('tbl_total_m');
        
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data['timeline']= $this->tbl_total_m->tampil_timeline();
        
        $this->template->load('layouts/petugas_template', 'petugas/tbl_total_v', $data);
    }
}
