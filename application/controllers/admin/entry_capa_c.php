<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Entry_capa_c extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('feedbackCapa');
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        
        $this->template->load('layouts/admin_template', 'admin/entry_capa_v');
    }

    public function add()
    {
        $this->load->model('FeedbackCapa');
        
        $post_no_surat = $this->input->post('no_surat');
        $data = array
        (
            'no_surat'          =>$this->input->post('no_surat'),
            'sarana'            =>$this->input->post('sarana'),
            'tgl_surat'         =>$this->input->post('tgl_surat'),
            'tanggal_timeline'  =>$this->input->post('tanggal_timeline')
        );
        $checkvalidation = $this->add_timeline_m->checkDuplicate($post_no_surat);
            if($checkvalidation == true){
                $this->db->insert('notif',$data);
                $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
                redirect('admin/entry_capa_c', 'refresh');
            }else{
            $this->session->set_flashdata('failed', 'Data Duplikat');
            redirect('admin/entry_capa_c', 'refresh');
            }
     
        
    }

    // <!-- get data with ajax jquery -->
    public function getData(){
        $this->feedbackCapa->getList();
    }
}