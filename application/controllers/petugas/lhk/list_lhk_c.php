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

        $data['list_lhk'] = $this->Lhk_model->getLhk();
        $data['upload_file'] = $this->Lhk_model->getFileLhk();
        $this->template->load('layouts/petugas_template', 'petugas/lhk/list_lhk_v', $data);
    }

    public function ubah_lhk()
    {
        $id = $this->input->post('id_');
        $tglEdit = $this->input->post('tglEdit');

        $config['upload_path'] = './assets/uploads/files/lhk';
        $config['allowed_types'] = 'pdf';
        $config['file_name'] = 'lhk-' . $id;
        $config['overwrite'] = true;
        $config['max_size'] = 0;


        $this->load->library("upload", $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('fileEdit')) {
            echo $this->upload->display_errors();
        } else {
            $fd = $this->upload->data();
            $file = $fd['file_name'];

            $dataLhk = array(
                'id' => $id,
                'tglLhk' => $tglEdit,
                'file_lhk' => $file
            );

            $this->Lhk_model->updateLhk($dataLhk);
            redirect('petugas/lhk/list_lhk_c');
        }
    }


    public function hapus_lhk()
    {
        $id = $this->input->post('id_');
        $this->Lhk_model->hapusLhk($id);
        redirect('petugas/lhk/list_lhk_c');
    }

    public function addSarana()
    {
        redirect('admin/master/tambah_sarana');
    }
}
