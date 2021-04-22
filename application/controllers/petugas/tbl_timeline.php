<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tbl_timeline extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('tbl_timeline_model');
        
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $dat['oke']= $this->tbl_timeline_model->getAll();
        
        $this->template->load('layouts/petugas_template', 'petugas/tbl_timeline', $dat);
    }
}