	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_kemasan extends CI_Controller {
	// main page


		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('SuratKemasan_model');
			  $this->load->model('SuratPeringatan_model');
		}


		public function index()
		{
			$data = konfigurasi('Form Surat Peringatan Obat',"");
			$data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
			$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/surat_kemasan/form', $data);
			
		}
		
		public function surat()
		{

			function convertMonths($month){
				$month = date('m',$month);
				return $month;
			}

			function convertYears($year){
				$year = date('y',$year);
				return $year;
			}

			$tanggal =  $this->input->post('tanggal');
			$noSurat =  $this->input->post('noSurat');
			$idTl= $this->input->post('suratTugas');
			$penerimaSurat =  $this->input->post('penerimaSurat');
			$kotaSurat =  $this->input->post('kotaSurat');

			$namaSarana =  $this->input->post('namaSarana');
			$alamatSarana =  $this->input->post('alamatSarana');
			$tglMulaiperiksa = $this->input->post('tglMulaiperiksa');
			$tglSelesaiperiksa = $this->input->post('tglSelesaiperiksa');
			$alamatPengolahan = $this->input->post('alamatPengolahan');
			$nib = $this->input->post('nib');
			$namaPimpinan =  $this->input->post('namaPimpinan');
			$namaPj =  $this->input->post('namaPj');
			$noHp =  $this->input->post('noHp');
			$noIzin =  $this->input->post('noIzin');

			$detailTemuan =  $this->input->post('detailTemuan');
			$pilihPasal = $this->input->post('pilihPasal');

			$tanggalolah  = strtotime($tanggal);

			echo $tanggal;

			$noSuratFix = "T-PW.04.01.9A2.".convertMonths($tanggalolah).".".convertYears($tanggalolah).".".$noSurat;
			echo $noSuratFix;

			

			$pasal_peringatan = array();
			foreach ($pilihPasal as $num) {
				$pasal['data'] = $this->SuratKemasan_model->getPasal($num);
				array_push($pasal_peringatan,$pasal);
			}
				


				$data = array('title'=>'Cetak surat tugas',
					'tanggal' => $tanggal,
					'noSurat' => $noSuratFix,
					'penerimaSurat' => $penerimaSurat,
					'kotaSurat' => $kotaSurat,
				// 
					'namaSarana' => $namaSarana,
					'alamatSarana' => $alamatSarana,
					'alamatPengolahan' => $alamatPengolahan,
					'tglMulaiperiksa' => $tglMulaiperiksa,
					'tglSelesaiperiksa' => $tglSelesaiperiksa,
					'nib' => $nib,
					'noHp' => $noHp,
					'namaPimpinan' => $namaPimpinan,
					'namaPj' => $namaPj,
					'noIzin' => $noIzin,

					'detailTemuan' => $detailTemuan,
					'pilihPasal' => $pasal_peringatan
				);			

			$data_db = array(

					'tglSuratPeringatan' => $tanggal,
					'noSuratPeringatan' => $noSuratFix,
					'jenisPeringatan' => "Apotek",
					'isiPeringatan' => $detailTemuan,
					'filePeringatan' => '0',
					'idTl' => $idTl

				);

				$checkvalidation = $this->SuratPeringatan_model->checkDuplicate($noSuratFix);
			if($checkvalidation == true){
				$this->db->insert('tbl_peringatan',$data_db);
				$this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
				$this->load->view('petugas/surat_peringatan/surat_kemasan/isiSurat', $data, FALSE);
			}else{
				$this->session->set_flashdata('failed', 'Data Duplikat');
				redirect('petugas/surat_peringatan/surat_kemasan', 'refresh');
			}	

				
			
		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */