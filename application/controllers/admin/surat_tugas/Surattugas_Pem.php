<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surattugas_Pem extends CI_Controller {

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
        $data['anggaran'] = $this->SuratTugas_model->getanggaran();
        $this->template->load('layouts/admin_template', 'admin/surat_tugas/surattugas_pem', $data);  

    }

    // tambah surat tugas
    public function tambah_surat()
    {
        $data = konfigurasi('Form Tambah Surat', "ap");
        $data['petugas'] = $this->SuratTugas_model->getpetugas();
        $data['nama_kota'] = $this->SuratTugas_model->getkota();
        $data['anggaran'] = $this->SuratTugas_model->getanggaran();
        $this->template->load('layouts/admin_template', 'admin/surat_tugas/form_pem', $data);
    }

    //simpan surat tugas
    public function simpan_surat()
    {
			function convertMonths($month){
				$month = date('m',$month);
				return $month;
			}

			function convertYears($year){
				$year = date('y',$year);
				return $year;
			}
        
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

			
        $noSuratFix = "T-PW.01.12.9A2.".convertMonths($tanggalolah).".".convertYears($tanggalolah).".".$nosurat;
       

        $data = array (
                
            'noSuratTugas' => $noSuratFix,
            'tglSurat' => $tglsurat,
            'tglMulai' => $tglmulai,
            // 'bebanBiaya' => $bebanbiaya,
            'kendaraan' => $kendaraan,
            //'lamaPerjalanan' => "3",
            'kota' => $kota,
            'idAnggaran' => $idanggaran,
            'tglSelesai' => $tglselesai,
            'maksud' => $maksud,
            'namaPenandatangan' => $namapenandatangan,
            'jabatanPenandatangan' => $jabatanpenandatangan,

        );

      
        $huruf = array('A','B','C','D','E','F','G','H','I','J');
        $i = 0;

        foreach($idpegawai as $petugas){
            $data_petugas = array(
                'noSuratTugas' =>$noSuratFix,
                'idPetugas' => $petugas,
                'urutan' => $huruf[$i] 
            );
            
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
        $nosurat = $this->input->post('noSurat');
        $tglsurat = $this->input->post('tglSurat');
        $tglmulai = $this->input->post('tglMulai');
        //$bebanbiaya = $this->input->post('bebanBiaya');
        $kendaraan = $this->input->post('kendaraan');
        $kota = $this->input->post('kota');
        $idanggaran = $this->input->post('idAnggaran');
        $tglselesai = $this->input->post('tglSelesai');
        $maksud = $this->input->post('maksud');
        $namapenandatangan = $this->input->post('namaPenandatangan');
        $jabatanpenandatangan = $this->input->post('jabatanPenandatangan');
        //$idpetugas = $this->input->post('idPetugas');


        $data = array (
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
            //'idPetugas' => $idpetugas
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

    // Print Surat Tugas
    public function print()
    {
    $id = $this->input->post('idSurat');
    $data['idSurat'] = $id;
    $data['printS'] = $this->SuratTugas_model->print_surat($id);
    $this->load->view('admin/surat_tugas/print_surat', $data, false);
    }
}
