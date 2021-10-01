	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Surat_puskesmas extends CI_Controller
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
			$data = konfigurasi('Form Surat Peringatan Puskesmas', "ap");
			$data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
			$this->template->load('layouts/admin_template', 'admin/surat_peringatan/Surat_puskesmas/form', $data);
		}



		public function editPeringatan()
		{
			$idPeringatan = $this->input->post('idPeringatan');
			$tanggal =  $this->input->post('tanggalSurat');
			$noSurat =  $this->input->post('noSurat');
			// detil sarana
			$tglMulaiperiksa = $this->input->post('tglMulaiperiksa');
			$noIzin =  $this->input->post('noIzin');
			$namaPj =  $this->input->post('namaPj');
			$noSip =  $this->input->post('noSip');
			$noHp =  $this->input->post('noHp');
			// detil temuan
			$detPelanggaran = $this->input->post('detPelanggaran');
			$detPasal = $this->input->post('detPasal');

			$noSuratFix = "T-PW.01.12.9A.9A2." . $noSurat;
			echo $noSuratFix;




			$data_edit = array(
				'idPeringatan' => $idPeringatan,
				'tglSuratPeringatan' => $tanggal,
				'noSuratPeringatan' => $noSurat,
				'tglPeriksa' => $tglMulaiperiksa,
				'noIzin' => $noIzin,
				'namaPimpinan' => "-",
				'namaPj' => $namaPj,
				'noSipa' => $noSip,
				'noHp' => $noHp,
				'detailPeringatan' => $detPelanggaran,
				'pasalPeringatan' => $detPasal

			);



			$this->SuratPeringatan_model->updateSuratPeringatan($data_edit);

			redirect('admin/surat_peringatan/C_surat_peringatan');
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
				$namaPj = $row->namaPj;
				$noSip = $row->noSipa;
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
				// detil sarana
				'namaSarana' => $namaSarana,
				'alamatSarana' => $alamatSarana,
				'tglMulaiperiksa' => $tglMulaiperiksa,
				'tglSelesaiperiksa' => $tglSelesaiperiksa,
				'noIzin' => $noIzin,
				'namaPj' => $namaPj,
				'noSip' => $noSip,
				'noHp' => $noHp,
				// detil temuan
				'detailTemuan' => $detailTemuan,
				// ganti ke db
				'pilihPasal' => $pasal_peringatan
			);


			$this->load->view('admin/surat_peringatan/surat_puskesmas/isiSurat', $data, FALSE);
		}
	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */