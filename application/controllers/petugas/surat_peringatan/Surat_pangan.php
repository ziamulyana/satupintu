	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_pangan extends CI_Controller {
	// main page


		public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('SuratPangan_model');
    }


		public function index()
		{
			$data = konfigurasi('Form Surat Peringatan Pangan',"");
			$data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
        	$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/surat_pangan/form', $data);
			
		}
		
		public function surat()
		{
			$tanggal =  $this->input->post('tanggal');
			$noSurat =  $this->input->post('noSurat');
			$penerimaSurat =  $this->input->post('penerimaSurat');
			$kotaSurat =  $this->input->post('kotaSurat');
			// detil sarana
			$namaSarana =  $this->input->post('namaSarana');
			$tglPeriksa = $this->input->post('tglPeriksa');
			$alamatSarana =  $this->input->post('alamatSarana');
			$tglMulaiperiksa = $this->input->post('tglMulaiperiksa');
			$tglSelesaiperiksa = $this->input->post('tglSelesaiperiksa');
			$namaPemilik =  $this->input->post('namaPemilik');

			$detailTemuan =  $this->input->post('detailTemuan');
			$pilihPasal = $this->input->post('pilihPasal');
			

			$pasal_peringatan = array();
			foreach ($pilihPasal as $num) {
				$pasal['data'] = $this->SuratPangan_model->getPasal($num);
				array_push($pasal_peringatan,$pasal);
			}

			$data = array('title'=>'Cetak surat tugas',
				'tanggal' => $tanggal,
				'noSurat' => $noSurat,
				'penerimaSurat' => $penerimaSurat,
				'kotaSurat' => $kotaSurat,
				'namaSarana' => $namaSarana,
				'alamatSarana' => $alamatSarana,
				'tglMulaiperiksa' => $tglMulaiperiksa,
				'tglSelesaiperiksa' => $tglSelesaiperiksa,
				'namaPemilik' => $namaPemilik,

				'detailTemuan' => $detailTemuan,
				'pilihPasal' => $pasal_peringatan

			);			

			$this->load->view('petugas/surat_peringatan/surat_pangan/isiSurat', $data, FALSE);
		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */