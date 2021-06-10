<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_perjadin extends CI_Controller {
	// main page


		public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("SuratPerjadin_model");
    }


		public function index()
		{
			$data = konfigurasi('Form Surat Perjalanan Dinas',"");
			$data['tugas'] = $this->SuratPerjadin_model->getsurattugas();			
        	$this->template->load('layouts/admin_template', 'admin/surat_perjadin/surat_perjadin', $data);
			
		}



		// Petugas
		public function getpetugas()
		{
			if($this->input->post('idSur'))
			{
				echo $this->SuratPerjadin_model->getpetugas($this->input->post('idSur'));
			}
		}

		public function tracking()
		{
			$idSuratTugas = $this->input->post('idSurat');
			$idPetugas = $this->input->post('petugas');

			$data['tracking_result']= $this->SuratPerjadin_model->getHistory($idSuratTugas, $idPetugas);

		}

		
		
	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */