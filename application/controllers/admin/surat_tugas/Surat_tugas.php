<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Surat_tugas extends CI_Controller {
    // main page

        public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("SuratTugas_model");
 
    }

        public function index()
        {

            $data = konfigurasi('Pilih Surat Tugas','');
            $data['list_surattugas']= $this->SuratTugas_model->getSuratTugas();
            $this->template->load('layouts/admin_template', 'admin/surat_tugas/dashboard', $data);
        }

        public function ubah_suratTugas(){
            $idsurat = $this->input->post('idsurat');
            $tglEdit = $this->input->post('tglEdit');
            $noEdit = $this->input->post('noEdit');
            $fileEdit = $this->input->post('fileEdit');

              $data_peringatan = array (
                'id_surat' => $id_surat,
                'tglSuratTugas' => $tglEdit,
                'noSuratTugas' => $noEdit,
                'jenis_surat' => "Hello World",
      );

              print_r($data_peringatan);

       // $this->SuratPeringatan_model->updateSuratPeringatan($data_peringatan);
       // $this->session->set_flashdata('flash','Diubah');  
       // redirect('C_surat_peringatan');
        

        }

    }

    /* End of file Home.php */
    /* Location: ./application/controllers/Home.php */