<?php

defined('BASEPATH') or exit('No direct script access allowed');

class List_lhk_c extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }

        $this->load->model("Lhk_model");
    }

    public function index()
    {

        $data['list_lhk']= $this->Lhk_model->getLhk();
        $this->template->load('layouts/petugas_template', 'petugas/lhk/list_lhk_v', $data);
    }
}