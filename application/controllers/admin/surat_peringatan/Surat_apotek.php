	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Surat_apotek extends CI_Controller
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
			$data = konfigurasi('Form Surat Tindak Lanjut Apotek', "ap");
			$data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
			$this->template->load('layouts/admin_template', 'admin/surat_peringatan/surat_apotek/form', $data);
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
			$tglMulaiperiksa = $this->input->post('tglMulaiperiksa');
			// $namaPimpinan = $this->input->post('namaPimpinan');
			$noIzin =  $this->input->post('noIzin');
			$namaPj =  $this->input->post('namaPj');
			$noSip =  $this->input->post('noSip');
			$noHp =  $this->input->post('noHp');
			// detil temuan
			$pilihPasal = $this->input->post('pilihPasal');


			$tanggalolah  = strtotime($tanggal);

			$noSuratFix = "T-PW.01.12.9A.9A2." . convertMonths($tanggalolah) . "." . convertYears($tanggalolah) . "." . $noSurat;
			echo $noSuratFix;



			$pasal_peringatan = implode(", ", $pilihPasal);



			// $temuan = $this->SuratPeringatan_model->getTemuan($idSarana);
			// foreach ($temuan as $tm) {
			// 	$detailTemuan = $tm->deskripsiTemuan;
			// }



			$dataSarana = $this->SuratPeringatan_model->getSarana($idSarana);

			foreach ($dataSarana as $row) {

				$idTl =  $row->idTl;
			}




			$data_db = array(

				'tglSuratPeringatan' => $tanggal,
				'noSuratPeringatan' => $noSuratFix,
				'noIzin' => $noIzin,
				'namaPimpinan' => "-",
				'namaPj' => $namaPj,
				'noSipa' => $noSip,
				'noHp' => $noHp,
				'pasalPeringatan' => $pasal_peringatan,
				'jenisPeringatan' => "apt",
				'idTl' => $idTl,
				'status' => 0
			);

			$checkvalidation = $this->SuratPeringatan_model->checkDuplicate($noSuratFix);
			if ($checkvalidation == true) {
				$this->db->insert('tbl_peringatan', $data_db);
				// $this->session->set_flashdata('success', 'Surat Peringatan Berhasil dibuat');
				redirect('admin/surat_peringatan/C_surat_peringatan');
			} else {
				$this->session->set_flashdata('failed', 'Maaf, Data tidak diproses karena duplikat');
				redirect('admin/surat_peringatan/Surat_apotek', 'refresh');
			}
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
			$pilihPasal = $this->input->post('pilihPasal');


			$pasal_peringatan = implode(", ", $pilihPasal);



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
				'pasalPeringatan' => $pasal_peringatan,

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


			$this->load->view('admin/surat_peringatan/surat_apotek/isiSurat', $data, FALSE);
		}
	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */