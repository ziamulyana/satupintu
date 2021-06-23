<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_capa extends CI_Controller
{
	// main page

	public function __construct()
	{
		parent::__construct();
		$this->load->model("SuratPeringatan_model");
		$this->load->model("SuratTl_model");
	}

	public function index()
	{

		$data['capa'] = $this->SuratPeringatan_model->getCapa();
		$data['fileCapa'] = $this->SuratPeringatan_model->fileCapa();
		$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/capa/list_capa', $data);
	}

	public function buatCapa()
	{
		$data = konfigurasi('Pilih Surat Capa', 'ap');
		$data['surat'] = $this->SuratTl_model->getSuratTugasCapa();
		$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/capa/sub_capa', $data);
	}

	public function printCapa()
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

		$tanggal =  $this->input->post('tanggal');
		$noSurat =  $this->input->post('noSurat');
		$halSurat = $this->input->post('halSurat');
		$idSurat = $this->input->post('suratTugas');
		// detil sarana
		$idSarana =  $this->input->post('idSarana');

		// detil temuan
		$detailTemuan =  $this->input->post('detailTemuan');

		$tanggalolah  = strtotime($tanggal);

		echo $tanggal;

		$noSuratFix = "T-PW.01.12.9A2." . convertMonths($tanggalolah) . "." . convertYears($tanggalolah) . "." . $noSurat;
		echo $noSuratFix;



		$dataSarana = $this->SuratPeringatan_model->getSarana($idSarana);

		foreach ($dataSarana as $row) {
			$namaSarana = $row->namaSarana;
			$idTl =  $row->idTl;
			$alamatSarana = $row->alamatSarana;
			$kota = $row->kota;
		}




		$data = array(
			'title' => 'Cetak surat tugas',
			'tanggal' => $tanggal,
			'noSurat' => $noSuratFix,
			'halSurat' => $halSurat,
			'penerimaSurat' => $namaSarana,
			// detil sarana
			'namaSarana' => $namaSarana,
			'alamatSarana' => $alamatSarana,
			'kotaSurat' => $kota,

			// detil temuan
			'detailTemuan' => $detailTemuan
		);




		$data_db = array(

			'tglSuratPeringatan' => $tanggal,
			'noSuratPeringatan' => $noSuratFix,
			'jenisCapa' => $halSurat,
			'jenisPeringatan' => 'CAPA',
			'filePeringatan' => '0',
			'idTl' => $idTl,
			'status' => 0
		);

		$checkvalidation = $this->SuratPeringatan_model->checkDuplicate($noSuratFix);
		if ($checkvalidation == true) {
			$this->db->insert('tbl_peringatan', $data_db);
			// $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
			$this->load->view('petugas/surat_peringatan/capa/surat_capa', $data, FALSE);
		} else {
			// $this->session->set_flashdata('failed', 'Maaf, Data tidak diprses karena duplikat');
			redirect('petugas/surat_capa/buat_capa', 'refresh');
		}
	}

	public function getSaranaPer()
	{
		if ($this->input->post('idPer')) {
			echo $this->SuratPeringatan_model->getSaranaCapa($this->input->post('idPer'));
		}
	}
}
