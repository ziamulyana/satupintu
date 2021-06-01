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
            $data = array (
                'rowsurattugas' => $this->SuratTugas_model->getsurattugas(),
            );
            $this->template->load('layouts/admin_template', 'admin/surat_tugas/dashboard', $data);
        }

        public function updatesurattugas()
        {
            $id = $this->input->post('idsurat');
            $nosurat = $this->input->post('editnosurat');

            $data = array(
                'noSurat' => $nosurat
            );

            $where = array('idSurat' => $id);

            $query = $this->SuratTugas_model->updatesurattugas($where,$data,'tbl_surattugas');
            $$this->session->set_flashdata('flash','Diubah');
            redirect('admin/surat_tugas/surat_tugas/index');

        }

        public function surattugas()
        {
            $data = array(
                'rowsurattugas' => $this->SuratTugas_model->getsurattugas(),
            );
            $this->template->load('layouts/admin_template', 'admin/surat_tugas/dashboard', $data);
        }

        public function ubah_suratTugas(){
            $id = $this->input->post('idSurat');
            $tglEdit = $this->input->post('tglEdit');
            $noEdit = $this->input->post('noEdit');

              $data_surattugas = array (
                'id' => $id,
                'tglSuratTugas' => $tglEdit,
                'noSuratTugas' => $noEdit,
                'jenis_surat' => "Hello World",
      );

              print_r($data_peringatan);

       // $this->SuratPeringatan_model->updateSuratPeringatan($data_peringatan);
       // $this->session->set_flashdata('flash','Diubah');  
       // redirect('C_surat_peringatan');
        

        }

        public function hapus_suratTugas(){
            $id = $this->input->post('idSurat');
            $this->SuratTugas_model->hapusSuratTugas($id);
            redirect('admin/surat_tugas/Surat_tugas');
        }

    }

    /* End of file Home.php */
    /* Location: ./application/controllers/Home.php */