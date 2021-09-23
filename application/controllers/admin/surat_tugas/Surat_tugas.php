<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_tugas extends CI_Controller
{

    // main page
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("SuratTugas_model");
        $this->load->helper('url');
    }

    public function index()
    {
        $data = konfigurasi('Pilih Surat Tugas', 'ap');
        $data['surattugas'] = $this->SuratTugas_model->getsurattugas();
        $data['anggaran'] = $this->SuratTugas_model->getanggaran();
        // $data['petugas'] = $this->SuratTugas_model->getpetugasA();
        $this->template->load('layouts/admin_template', 'admin/surat_tugas/surat_tugas', $data);
    }

    // tambah surat tugas
    public function tambah_surat()
    {
        $data = konfigurasi('Form Tambah Surat', "ap");
        $data['petugas'] = $this->SuratTugas_model->getpetugas();
        $data['anggaran'] = $this->SuratTugas_model->getanggaran();
        $this->template->load('layouts/admin_template', 'admin/surat_tugas/form', $data);
    }

    public function edit_surat(){
        $id = $this->uri->segment(5);
        $data = konfigurasi('Form Edit Surat', "ap");
        $data['surattugas'] = $this->SuratTugas_model->getsurattugasedit($id);
        $data['petugas'] = $this->SuratTugas_model->getpetugas();
        $data['anggaran'] = $this->SuratTugas_model->getanggaran();
        $this->template->load('layouts/admin_template', 'admin/surat_tugas/edit', $data);
    }

    //simpan surat tugas
    public function simpan_surat()
    {
        function convertMonths($month)
        {
            $month = date('m', $month);
            return $month;
        }

        function convertYears($year)
        {
            $year = date('y', $year);
            return $year;
        }
        // $jenis = $this->input->post('substansi');
        $nosurat = $this->input->post('noSuratTugas');
        $tglsurat = $this->input->post('tglSurat');
        $tglmulai = $this->input->post('tglMulai');
        // $bebanbiaya = $this->input->post('bebanBiaya');
        $kendaraan = $this->input->post('kendaraan');
        // $lamaperjalanan = $this->input->post('lamaPerjalanan');
        $kota = $this->input->post('kota');
        $idanggaran = $this->input->post('idAnggaran');
        $tglselesai = $this->input->post('tglSelesai');
        $maksud = $this->input->post('maksud');
        $namapenandatangan = $this->input->post('namaPenandatangan');
        $jabatanpenandatangan = $this->input->post('jabatanPenandatangan');
        $idpegawai = $this->input->post('idPetugas');


        $tanggalolah  = strtotime($tglsurat);


        $noSuratFix = "HM.04.02.9A.9A2." . convertMonths($tanggalolah) . "." . convertYears($tanggalolah) . "." . $nosurat;


        // menghitung beda hari

        $datetime1 = new DateTime($tglmulai);
        $datetime2 = new DateTime($tglselesai);
        $lamaPerjalanan = $datetime2->diff($datetime1)->days + 1;



        $data = array(
            // 'jenisSurat' => $jenis,
            'noSuratTugas' => $noSuratFix,
            'tglSurat' => $tglsurat,
            'tglMulai' => $tglmulai,
            'kendaraan' => $kendaraan,
            'lamaPerjalanan' => $lamaPerjalanan,
            'kota' => $kota,
            'idAnggaran' => $idanggaran,
            'tglSelesai' => $tglselesai,
            'maksud' => $maksud,
            'namaPenandatangan' => $namapenandatangan,
            'jabatanPenandatangan' => $jabatanpenandatangan,

        );


        $huruf = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
        $i = 0;
        // sorting urutan 
        $pegawai_attr = array();
        foreach ($idpegawai as $idpetugas) {
            $petugas_attr = $this->SuratTugas_model->get_attr_petugas($idpetugas);
            foreach ($petugas_attr as $row) {
                $id = $row->idPegawai;
                $gol = $row->golongan;
            }
            $pegawai_attr[$id] = $gol;
        }

        arsort($pegawai_attr);

        foreach ($pegawai_attr as $id => $value) {
            $data_petugas = array(
                'noSuratTugas' => $noSuratFix,
                'idPetugas' => $id,
                'urutan' => $huruf[$i]
            );

            // print_r($data_petugas);

            $this->db->insert('tbl_tugas', $data_petugas);

            $i++;
        }

        $this->db->insert('tbl_surattugas', $data);
        $this->session->set_flashdata('success', 'Data Berhasil Dimasukan');
        redirect('admin/surat_tugas/surat_tugas', 'refresh');
    }

    // ubah surat tugas
    public function ubah_surat()
    {
        $idsurat = $this->input->post('idSurat');
        $nosurat = $this->input->post('noSuratTugas');
        $nosuratlama = $this->input->post('noSuratLama');
        $tglsurat = $this->input->post('tglSurat');
        $tglmulai = $this->input->post('tglMulai');
        $kendaraan = $this->input->post('kendaraan');
        $kota = $this->input->post('kota');
        $idanggaran = $this->input->post('idAnggaran');
        $tglselesai = $this->input->post('tglSelesai');
        $maksud = $this->input->post('maksud');
        $namapenandatangan = $this->input->post('namaPenandatangan');
        $jabatanpenandatangan = $this->input->post('jabatanPenandatangan');
        $idpegawai = $this->input->post('idPetugas');
        $idtugas = $this->input->post('idTugas');

        // edit 1
        $dataSuratTugas = array(
            'idSur' => $idsurat,
            'noSur' => $nosurat,
            'tglSur' => $tglsurat,
            'tglMulai' => $tglmulai,
            //'bebanBiaya' => $bebanbiaya,
            'kendaraan' => $kendaraan,
            'kotas' => $kota,
            'idAnggaran' => $idanggaran,
            'tglSelesai' => $tglselesai,
            'maksud' => $maksud,
            'namaPenandatangan' => $namapenandatangan,
            'jabatanPenandatangan' => $jabatanpenandatangan,
        );


        $this->SuratTugas_model->ubah_surat($dataSuratTugas);

        // edit 2 
        
        $this->SuratTugas_model->delTblTugas($nosuratlama); 


        $huruf = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
        $i = 0;
        // sorting urutan 
        $pegawai_attr = array();
        foreach ($idpegawai as $idpetugas) {
            $petugas_attr = $this->SuratTugas_model->get_attr_petugas($idpetugas);
            foreach ($petugas_attr as $row) {
                $id = $row->idPegawai;
                $gol = $row->golongan;
            }
            $pegawai_attr[$id] = $gol;
        }

        arsort($pegawai_attr);

       foreach ($pegawai_attr as $id => $value) {
            $data_petugas = array(
                'noSuratTugas' => $nosurat,
                'idPetugas' => $id,
                'urutan' => $huruf[$i]
            );

            print_r($data_petugas);

            $this->db->insert('tbl_tugas', $data_petugas);

            $i++;
        }

        $this->session->set_flashdata('success', 'Data Berhasil Diedit');

        redirect('admin/surat_tugas/surat_tugas');
    }

    // hapus surat tugas
    public function hapus_surat()
    {
        $id = $this->input->post('idSurat');
        $this->SuratTugas_model->hapus_surat($id);
        redirect('admin/surat_tugas/surat_tugas');
    }

    // Print Surat Tugas
    public function print()
    {

        $id = $this->input->post('idSurat');
        $data['idSurat'] = $id;
        $data['printS'] = $this->SuratTugas_model->print_surat($id);
        $this->load->view('admin/surat_tugas/print_suratpem', $data, false);
    }
}
