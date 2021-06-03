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
        $data = konfigurasi('Pilih Surat Tugas','ap');
        $data['surattugas'] = $this->SuratTugas_model->getsurattugas();
        $this->template->load('layouts/admin_template', 'admin/surat_tugas/dashboard', $data);  

    }

    // tambah surat tugas
    public function tambah_surat()
    {
        $data = konfigurasi('Form Tambah Surat', "ap");
        $this->template->load('layouts/admin_template', 'admin/surat_tugas/form');
    }

    //simpan surat tugas
    public function simpan_surat()
    {
        $idsurat = $this->input->post('idSurat');
        $nosurat = $this->input->post('noSuratTugas');
        $tglsurat = $this->input->post('tglSurat');
        $tglmulai = $this->input->post('tglMulai');
        $bebanbiaya = $this->input->post('bebanBiaya');
        $kendaraan = $this->input->post('kendaraan');
        $kota = $this->input->post('kota');
        $idanggaran = $this->input->post('idAnggaran');
        $tglselesai = $this->input->post('tglSelesai');
        $maksud = $this->input->post('maksud');
        $namapenandatangan = $this->input->post('namaPenandatangan');
        $jabatanpenandatangan = $this->input->post('jabatanPenandatangan');
        $idpetugas = $this->input->post('idPetugas');

        $data = array (
            'idSurat' => $idsurat,
            'noSuratTugas' => $nosurat,
            'tglSurat' => $tglsurat,
            'tglMulai' => $tglmulai,
            'bebanBiaya' => $bebanbiaya,
            'kendaraan' => $kendaraan,
            'kota' => $kendaraan,
            'kota' => $kota,
            'idAnggaran' => $idanggaran,
            'tglSelesai' => $tglselesai,
            'maksud' => $maksud,
            'namapenandatangan' => $namapenandatangan,
            'jabatanPenandatangan' => $jabatanpenandatangan,
            'idPetugas' => $idpetugas
            );
        
        $this->db->insert('tbl_surattugas', $data);
        $this->session->set_flashdata('success', 'Data Berhasil Dimasukan');
        redirect('admin/surat_tugas/surat_tugas', 'refresh');

    }

    // ubah surat tugas
    public function ubah_surat()
    {
        $idsurat = $this->input->post('idSurat');
        $nosurat = $this->input->post('noSuratTugas');
        $tglsurat = $this->input->post('tglSurat');
        $tglmulai = $this->input->post('tglMulai');
        $bebanbiaya = $this->input->post('bebanBiaya');
        $kendaraan = $this->input->post('kendaraan');
        $kota = $this->input->post('kota');
        $idanggaran = $this->input->post('idAnggaran');
        $tglselesai = $this->input->post('tglSelesai');
        $maksud = $this->input->post('maksud');
        $namapenandatangan = $this->input->post('namaPenandatangan');
        $jabatanpenandatangan = $this->input->post('jabatanPenandatangan');
        $idpetugas = $this->input->post('idPetugas');

        $data = array (
            'idSurat' => $idsurat,
            'noSuratTugas' => $nosurat,
            'tglSurat' => $tglsurat,
            'tglMulai' => $tglmulai,
            'bebanBiaya' => $bebanbiaya,
            'kendaraan' => $kendaraan,
            'kota' => $kota,
            'idAnggaran' => $idanggaran,
            'tglSelesai' => $tglselesai,
            'maksud' => $maksud,
            'namapenandatangan' => $namapenandatangan,
            'jabatanPenandatangan' => $jabatanpenandatangan,
            'idPetugas' => $idpetugas
            );
            
        $this->SuratTugas_model->ubah_surat($data);
        redirect('admin/surat_tugas/surat_tugas');
    }

    // hapus surat tugas
    public function hapus_surat()
    {
        $idsurat = $this->input->post('idSurat');
        $this->SuratTugas_model->hapus_surat($id);
        redirect('admin/surat_tugas/surat_tugas');
    }






        public function updatesurattugas()
        {
            $id = $this->input->post('idSurat');
            $tglSurat = $this->input->post('tglSurat');

            $data = array(
                'idSurat' => $id,
                'tglSurat' => $tglSurat
            );

            $this->SuratTugas_model->updatesurattugas($data);
            redirect('admin/surat_tugas/dashboard');

        }

        public function delsurat()
        {
        $noSuratTugas = $this->input->post('delSurat', true);

        $data = array (
            'noSuratTugas' => $noSuratTugas
        );

        $query = $this->SuratTugas_model->delsurat($where,$data,'tbl_surattugas');
        $this->session->set_flashdata('flash','Dihapus');
        redirect ('admin/surat_tugas/surat_tugas/index');
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
            $this->SuratTugas_model->delsurat($id);
            redirect('admin/surat_tugas/Surat_tugas');
        }

    }

    /* End of file Home.php */
    /* Location: ./application/controllers/Home.php */