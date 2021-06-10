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
			$data = konfigurasi('Form Surat Perjalanan Dinas',"ap");
			$data['perjadin'] = $this->SuratPerjadin_model->getperjadin();			
        	$this->template->load('layouts/admin_template', 'admin/surat_perjadin/surat_perjadin', $data);
			
		}

		// Tambah Data Perjadin
		public function tambahdata()
		{
			$data = konfigurasi('Form Surat Perjalanan Dinas',"ap");
			$data['tugas'] = $this->SuratPerjadin_model->getsurattugas();			
        	$this->template->load('layouts/admin_template', 'admin/surat_perjadin/form_suratperjadin', $data);
		}
		
		
	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */