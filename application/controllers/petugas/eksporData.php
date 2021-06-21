<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class EksporData extends CI_Controller {
	// main page


		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('Laporan_model');
		}


		public function index()
		{
			$data = konfigurasi('Ekspor Data','rs');
			// $data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
			$this->template->load('layouts/petugas_template', 'petugas/tarikData', $data);
			
		}

		public function cetakReport(){
			$kategori =$this->input->post('kategori');
			$komoditi =$this->input->post('komoditi');
			$status = $this->input->post('status');
			$tglAwal = $this->input->post('tglAwal');
			$tglAkhir = $this->input->post('tglAkhir');

			$laporanSarana = $this->Laporan_model->getLaporan($idSarana);

			// $data = array('title'=>'Cetak Laporan Pemeriksaan',
			// 	'kategori' => $kategori,
			// 	'komoditi' => $komoditi,
			// 	'status' => $status,
			// 	'tglAwal' => $tglAwal,
			// 	'tglAkhir' => $tglAkhir
			// );	

			// $this->load->view('petugas/isiLaporan', $data, FALSE);
			

		}
		
		

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */