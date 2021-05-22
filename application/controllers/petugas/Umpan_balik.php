	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Umpan_balik extends CI_Controller {
	// main page


		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model("UmpanBalik_model");
		}


		public function index()
		{
			$data = konfigurasi('Lihat Umpan Balik','');
			// $data['list_peringatan']= $this->SuratPeringatan_model->getSuratPeringatan();
        $this->template->load('layouts/petugas_template', 'petugas/umpan_balik', $data);
			
		}
		
		public function tracking()
		{

			$noSuratTugas =$this->input->post('noSuratTugas');
			$namaSarana =$this->input->post('namaSarana');

			$data['tracking_result']= $this->UmpanBalik_model->getHistory($noSuratTugas, $namaSarana);

			$this->template->load('layouts/petugas_template', 'petugas/umpan_balik_data2', $data);




		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */