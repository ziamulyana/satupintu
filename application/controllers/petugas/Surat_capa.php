<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_capa extends CI_Controller {
// main page

	public function __construct()
	{
		parent::__construct();
		$this->load->model("SuratPeringatan_model");


	}

	public function index()
	{

		$data['peringatan'] = $this->SuratPeringatan_model->getSuratPeringatan();
            $this->template->load('layouts/admin_template', 'petugas/surat_peringatan/capa/list_capa', $data);
	
	}

	public function buatCapa(){
			$data = konfigurasi('Pilih Surat Capa','ap');
		$data['surat'] = $this->SuratPeringatan_model->getSuratPeringatan();
		$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/capa/sub_capa', $data);
	}

	public function printCapa(){
		
	}
}