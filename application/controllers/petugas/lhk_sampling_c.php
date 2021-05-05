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
    }

    public function index()
    {
        
        $this->template->load('layouts/petugas_template', 'petugas/lhk_sampling_v');
    }
}