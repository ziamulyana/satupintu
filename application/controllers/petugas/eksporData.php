<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class EksporData extends CI_Controller {
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
			$data = konfigurasi('Ekspor Data','rs');
			// $data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
			$this->template->load('layouts/petugas_template', 'petugas/tarikData', $data);
			
		}
		
		

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */