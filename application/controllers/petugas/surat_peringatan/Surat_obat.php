	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_obat extends CI_Controller {
	// main page

		public function index()
		{
			$data = konfigurasi('Form Surat Peringatan Obat');
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


			// $pasal_rs = array();
			// foreach ($pilihPasal as $num) {
			// 	$pasal['data'] = $this->m_tem_rs->getPasalRs($num);
			// 	array_push($pasal_rs,$pasal);
			// }


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
				// ganti ke db
				'pilihPasal' => $pilihPasal
				);			

			$this->load->view('petugas/surat_peringatan/surat_obat/isiSurat', $data, FALSE);
		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */