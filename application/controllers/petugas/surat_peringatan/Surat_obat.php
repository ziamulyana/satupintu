	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_obat extends CI_Controller {
	// main page
		// 	public function __construct()
		// {
		// 	parent::__construct();
		// 	$this->load->database();
		// 	$this->load->helper('url');
		// 	$this->load->model('m_tem_rs');
		// }

		// public function index()
		// {
		// 	$data_rs['data'] = $this->m_tem_rs->getTemuanRs();
		// 	$data = array('title'=>'Buat Surat Tugas', 'isi' => 'surat_obat/list', 'data_rs'=> $data_rs);

		// 	$this->load->view('layout/wrapper', $data, FALSE);
			
		// }

		public function index()
		{
			$data = konfigurasi('Dashboard');
        $this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/surat_obat/dashboard', $data);
			
		}


		

		public function surat()
		{
			$tanggal =  $this->input->post('tanggal');
			$noSurat =  $this->input->post('noSurat');
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


			$pasal_rs = array();
			foreach ($pilihPasal as $num) {
				$pasal['data'] = $this->m_tem_rs->getPasalRs($num);
				array_push($pasal_rs,$pasal);
			}


			$data = array('title'=>'Cetak surat tugas',
				'tanggal' => $tanggal,
				'noSurat' => $noSurat,
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
				'pilihPasal' => $pasal_rs
				);			

			$this->load->view('surat_obat/wrapper', $data, FALSE);
		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */