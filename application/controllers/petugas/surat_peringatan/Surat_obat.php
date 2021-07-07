	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Surat_obat extends CI_Controller
	{
		// main page


		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('SuratObat_model');
			$this->load->model('SuratPeringatan_model');
			$this->load->model('SuratTl_model');
		}


		public function index()
		{
			$data = konfigurasi('Form Surat Peringatan Toko Obat', "ap");
			$data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
			$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/surat_obat/form', $data);
		}

		public function surat()
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
			$idSurat = $this->input->post('suratTugas');
			// detil sarana
			$idSarana =  $this->input->post('idSarana');
			// $alamatSarana = $this->input->post('alamatSarana');
			$tglMulaiperiksa = $this->input->post('tglMulaiperiksa');
			$noIzin =  $this->input->post('noIzin');
			$namaPj =  $this->input->post('namaPj');
			$noSip =  $this->input->post('noSip');
			$noHp =  $this->input->post('noHp');
			// detil temuan
			$pilihPasal = $this->input->post('pilihPasal');

			$tanggalolah  = strtotime($tanggal);


			$noSuratFix = "T-PW.01.12.9A.9A2." . convertMonths($tanggalolah) . "." . convertYears($tanggalolah) . "." . $noSurat;



			$pasal_peringatan = array();
			foreach ($pilihPasal as $num) {
				$pasal['data'] = $this->SuratObat_model->getPasal($num);
				array_push($pasal_peringatan, $pasal);
			}


			$temuan = $this->SuratPeringatan_model->getTemuan($idSarana);
			foreach ($temuan as $tm) {
				$detailTemuan = $tm->deskripsiTemuan;
			}


			$dataSarana = $this->SuratPeringatan_model->getSarana($idSarana);

			foreach ($dataSarana as $row) {
				$namaSarana = $row->namaSarana;
				$idTl =  $row->idTl;
				$halSurat = $row->jenisTl;
				$alamatSarana = $row->alamatSarana;
				$kotaSurat = $row->kotaSarana;
			}


			$data = array(
				'title' => 'Cetak surat tugas',
				'tanggal' => $tanggal,
				'noSurat' => $noSuratFix,
				'halSurat' => $halSurat,
				'penerimaSurat' => $namaSarana,
				'kotaSurat' => $kotaSurat,
				// detil sarana
				'namaSarana' => $namaSarana,
				'alamatSarana' => $alamatSarana,
				'tglMulaiperiksa' => $tglMulaiperiksa,
				'noIzin' => $noIzin,
				'namaPj' => $namaPj,
				'noSip' => $noSip,
				'noHp' => $noHp,
				// detil temuan
				'detailTemuan' => $detailTemuan,
				// ganti ke db
				'pilihPasal' => $pasal_peringatan
			);

			$data_db = array(
				'tglSuratPeringatan' => $tanggal,
				'noSuratPeringatan' => $noSuratFix,
				'jenisPeringatan' => "apotek",
				'idTl' => $idTl,
				'status' => 0
			);

			$checkvalidation = $this->SuratPeringatan_model->checkDuplicate($noSuratFix);
			if ($checkvalidation == true) {
				$this->db->insert('tbl_peringatan', $data_db);
				// $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
				$this->load->view('petugas/surat_peringatan/surat_obat/isiSurat', $data, FALSE);
			} else {
				//  $this->session->set_flashdata('failed', 'Maaf, Data tidak diproses karena duplikat');
				redirect('petugas/surat_peringatan/Surat_obat', 'refresh');
			}
		}
	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */