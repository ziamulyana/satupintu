<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_capa extends CI_Controller {
// main page

	public function __construct()
	{
		parent::__construct();
		$this->load->model("");


	}

	public function index()
	{

		$data = konfigurasi('Pilih Surat Capa','ap');
		$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/capa/sub_capa', $data);
	}
}