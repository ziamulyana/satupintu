<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EksporDataAdmin extends CI_Controller
{
    // main page


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Laporan_model');
    }


    public function surat()
    {
        $data = konfigurasi('Ekspor Data', 'rs');
        // $data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
        $this->template->load('layouts/admin_template', 'admin/tarikDataSurat', $data);
    }

    public function anggaran()
    {
        $data = konfigurasi('Ekspor Data', 'rs');
        // $data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
        $this->template->load('layouts/admin_template', 'admin/tarikDataAnggaran', $data);
    }

    public function cetakReport()
    {
        $jenis = $this->input->post('kategori');
        $komoditi = $this->input->post('komoditi');
        $status = $this->input->post('status');
        $tglAwal = $this->input->post('tglAwal');
        $tglAkhir = $this->input->post('tglAkhir');

        $data['laporanSarana'] = $this->Laporan_model->getLaporanAll($jenis, $komoditi, $status, $tglAwal, $tglAkhir);
        $data['tglAwal'] = $tglAwal;
        $data['tglAkhir'] = $tglAkhir;
        $data['jenisSarana'] = $jenis;

        $this->load->view('petugas/isiLaporan', $data, FALSE);
    }
}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */