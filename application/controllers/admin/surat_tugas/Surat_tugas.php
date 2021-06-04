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
        $data['petugas'] = $this->SuratTugas_model->getpetugas();
        $data['nama_kota'] = $this->SuratTugas_model->getkota();
        $this->template->load('layouts/admin_template', 'admin/surat_tugas/form', $data);
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
        $id = $this->input->post('idSurat');
        $this->SuratTugas_model->hapus_surat($id);
        redirect('admin/surat_tugas/surat_tugas');
    }

}