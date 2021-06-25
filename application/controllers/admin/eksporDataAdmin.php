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

    public function tarikSurat()
    {

        $tglAwal = $this->input->post('tglAwal');
        $tglAkhir = $this->input->post('tglAkhir');
        $data['tglAwal'] = $tglAwal;
        $data['tglAkhir'] = $tglAkhir;
        $data['laporanSurat'] = $this->Laporan_model->getLaporanSurat($tglAwal, $tglAkhir);
        $data['petugas'] = $this->Laporan_model->getPetugasSurat($tglAwal, $tglAkhir);
        $data['feedback'] = $this->Laporan_model->getFeedbackSurat($tglAwal, $tglAkhir);
        $data['closed'] = $this->Laporan_model->getClosedSurat($tglAwal, $tglAkhir);

        $this->load->view('admin/isiLaporanSurat', $data, FALSE);
    }
}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */