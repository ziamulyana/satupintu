	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_obat extends CI_Controller {
	// main page


		public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('SuratObat_model');
                $this->load->model('SuratPeringatan_model');
    }


		public function index()
		{
			$data = konfigurasi('Form Surat Peringatan Toko Obat',"ap");
			$data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
        	$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/surat_obat/form', $data);
			
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
			// detil sarana
			$namaSarana =  $this->input->post('namaSarana');
			$alamatSarana = $this->input->post('alamatSarana');
			$tglMulaiperiksa = $this->input->post('tglMulaiperiksa');
			$tglSelesaiperiksa = $this->input->post('tglSelesaiperiksa');
			$noIzin =  $this->input->post('noIzin');
			$namaPj =  $this->input->post('namaPj');
			$noSip =  $this->input->post('noSip');
			$noHp =  $this->input->post('noHp');
			// detil temuan
			$detailTemuan =  $this->input->post('detailTemuan');
			$pilihPasal = $this->input->post('pilihPasal');

				$tanggalolah  = strtotime($tanggal);

			echo $tanggal;

			$noSuratFix = "T-PW.01.12.9A2.".convertMonths($tanggalolah).".".convertYears($tanggalolah).".".$noSurat;
			echo $noSuratFix;



			$pasal_peringatan = array();
			foreach ($pilihPasal as $num) {
				$pasal['data'] = $this->SuratObat_model->getPasal($num);
				array_push($pasal_peringatan,$pasal);
			}


			$data = array('title'=>'Cetak surat tugas',
				'tanggal' => $tanggal,
				'noSurat' => $noSuratFix,
				'penerimaSurat' => $penerimaSurat,
				'kotaSurat' => $kotaSurat,
				// detil sarana
				'namaSarana' => $namaSarana,
				'alamatSarana' =>$alamatSarana,
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
				$this->load->view('petugas/surat_peringatan/surat_obat/isiSurat', $data, FALSE);
			}else{
				$this->session->set_flashdata('failed', 'Data Duplikat');
				redirect('petugas/surat_peringatan/Surat_obat', 'refresh');
			}	

			
		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */