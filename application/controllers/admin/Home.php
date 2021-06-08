<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('tbl_timeline_m');

        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $data['total']= $this->tbl_timeline_m->tampil_total_admin();
        $this->template->load('layouts/admin_template', 'admin/dashboard', $data);
    }
}
