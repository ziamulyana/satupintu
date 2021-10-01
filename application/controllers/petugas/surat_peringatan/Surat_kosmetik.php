	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Surat_kosmetik extends CI_Controller
	{
		// main page


		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('SuratKosmetik_model');
			$this->load->model('SuratPeringatan_model');
			$this->load->model('SuratTl_model');
		}


		public function index()
		{
			$data = konfigurasi('Form Surat Peringatan Kosmetik', "");
			$data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
			$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/surat_kosmetik/form', $data);
		}

		public function simpanPeringatan()
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
			$tglPeriksa = $this->input->post('tglPeriksa');
			$tglMulaiperiksa = $this->input->post('tglMulaiperiksa');
			$namaPimpinan =  $this->input->post('namaPimpinan');
			$noHp =  $this->input->post('noHp');
			// detil temuan
			$detPelanggaran = $this->input->post('detPelanggaran');
			$detPasal = $this->input->post('detPasal');

			$noSuratFix = "T-PW.01.12.9A.9A2." . $noSurat;
			echo $noSuratFix;





			// $temuan = $this->SuratPeringatan_model->getTemuan($idSarana);
			// foreach ($temuan as $tm) {
			// 	$detailTemuan = $tm->deskripsiTemuan;
			// }



			$dataSarana = $this->SuratPeringatan_model->getSarana($idSarana);

			foreach ($dataSarana as $row) {

				$idTl =  $row->idTl;
			}




			$data_db = array(

				// 'tglSuratPeringatan' => $tanggal,
				'noSuratPeringatan' => $noSuratFix,
				'noIzin' => "-",
				'namaPimpinan' => $namaPimpinan,
				'namaPj' => "-",
				'noSipa' => "-",
				'noHp' => $noHp,
				'tglPeriksa' => $tglMulaiperiksa,
				'detailPeringatan' => $detPelanggaran,
				'pasalPeringatan' => $detPasal,
				'jenisPeringatan' => "pangan",
				'idTl' => $idTl,
				'status' => 0
			);

			$checkvalidation = $this->SuratPeringatan_model->checkDuplicate($noSuratFix);
			if ($checkvalidation == true) {
				$this->db->insert('tbl_peringatan', $data_db);
				// $this->session->set_flashdata('success', 'Surat Peringatan Berhasil dibuat');
				redirect('petugas/surat_peringatan/C_surat_peringatan');
			} else {
				$this->session->set_flashdata('failed', 'Maaf, Data tidak diproses karena duplikat');
				redirect('petugas/surat_peringatan/Surat_kosmetik', 'refresh');
			}
		}

		public function editPeringatan()
		{
			$idPeringatan = $this->input->post('idPeringatan');
			// $tanggal =  $this->input->post('tanggalSurat');
			$noSurat =  $this->input->post('noSurat');
			// detil sarana
			$tglMulaiperiksa = $this->input->post('tglMulaiperiksa');

			$namaPimpinan =  $this->input->post('namaPimpinan');

			$noHp =  $this->input->post('noHp');
			// detil temuan
			$detPelanggaran = $this->input->post('detPelanggaran');
			$detPasal = $this->input->post('detPasal');

			$noSuratFix = "T-PW.01.12.9A.9A2." . $noSurat;
			echo $noSuratFix;



			$data_edit = array(
				'idPeringatan' => $idPeringatan,
				// 'tglSuratPeringatan' => $tanggal,
				'noSuratPeringatan' => $noSurat,
				'tglPeriksa' => $tglMulaiperiksa,
				'noIzin' => "-",
				'namaPimpinan' => $namaPimpinan,
				'noHp' => $noHp,
				'pasalPeringatan' => $pasal_peringatan,
				'detailPeringatan' => $detPelanggaran,
				'pasalPeringatan' => $detPasal


			);


			$this->SuratPeringatan_model->updateSuratPeringatan($data_edit);

			redirect('petugas/surat_peringatan/C_surat_peringatan');
		}



		public function surat()
		{

			$idPeringatan = $this->input->post('idPeringatan');
			$detail = $this->SuratPeringatan_model->getPeringatanEdit($idPeringatan);

			foreach ($detail as $row) {
				$tanggal = $row->tglSuratPeringatan;
				$noSuratFix = $row->noSuratPeringatan;
				$tglMulaiperiksa = $row->tglPeriksa;
				$noIzin = $row->noIzin;
				$namaPimpinan = $row->namaPimpinan;
				$noHp = $row->noHp;
				$pasal = $row->pasalPeringatan;
				$idSarana = $row->idSarana;
				$detailTemuan = $row->deskripsiTemuan;
			}


			$pasal_peringatan = explode(", ", $pilihPasal);


			$pasal_peringatan = array();
			foreach ($pilihPasal as $num) {
				$pasal['data'] = $this->SuratPbf_model->getPasal($num);
				array_push($pasal_peringatan, $pasal);
			}


			$dataSarana = $this->SuratPeringatan_model->getSarana($idSarana);

			foreach ($dataSarana as $row) {
				$namaSarana = $row->namaSarana;
				$idTl =  $row->idTl;
				$alamatSarana = $row->alamatSarana;
				$halSurat = $row->jenisTl;
				$kotaSurat = $row->kotaSarana;
			}



			$data = array(
				'title' => 'Cetak surat tugas',
				'tanggal' => $tanggal,
				'noSurat' => $noSuratFix,
				'halSurat' => $halSurat,
				'penerimaSurat' => $namaSarana,
				'kotaSurat' => $kotaSurat,
				'namaSarana' => $namaSarana,
				'alamatSarana' => $alamatSarana,
				'tglMulaiperiksa' => $tglMulaiperiksa,
				'namaPimpinan' => $namaPimpinan,
				'noHp' => $noHp,
				'detailTemuan' => $detailTemuan,
				'pilihPasal' => $pasal_peringatan

			);

			$this->load->view('petugas/surat_peringatan/surat_kosmetik/isiSurat', $data, FALSE);
		}
	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */