<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Form_suratPerjadin extends CI_Controller {
	// main page


		public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('SuratPerjadin_model');
    }


		public function index()
		{
			$data = konfigurasi('Form Surat Tugas',"ap");
			//$data['tugas'] = $this->SuratPerjadin_model->getTugas();
        	$this->template->load('layouts/admin_template', 'admin/surat_perjadin/Form_suratperjadin', $data);
			
		}

		function getPetugas()
		{
			if($this->input->post('idSuratTugas'))
			{
				echo $this->SuratPerjadin_model->getPetugas($this->input->post('idSuratTugas'));
			}
		}

		public function Perjadin()
		{
			$data = konfigurasi('Form Surat Perjadin',"ap");
			$data ['perjadin'] = $this->SuratPerjadin_model->getperjadin();
			$this->template->load('layouts/admin_template', 'admin/surat_perjadin/form_suratperjadin', $data);
		}

		public function addSpd()
		{
			$tempat_berangkat = $this->input->post('tempatberangkat');
			$tempat_tujuan = $this->input->post('tempattujuan');
			$berangkat_dari = $this->input->post('berangkatdari');
			$tiba_di = $this->input->post('tibadi');

			$data = array (
				'tempat_berangkat' => $tempatberangkat,
				'tempat_tujuan' => $tempattujuan,
				'berangkat_dari' => $berangkatdari,
				'tiba_di' => $tibadi
			);
			$cek = $this->db->query("SELECT * FROM tbl_perjadin WHERE tempatberangkat='$tempat_berangkat");
			if($cek->num_rows() != 0){
				$this->session->set_flashdata('flash_error', 'Ditambahkan');
				redirect('admin/surat_perjadin/form_suratperjadin/perjadin');
			}else{
				$query = $this->SuratPerjadin_model->addSpd('tbl_perjadin', $data);
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('admin/surat_perjadin/form_suratperjadin/perjadin');
			}

		}
		
}