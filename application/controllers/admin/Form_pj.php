<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Form_pj extends CI_Controller {
	// main page


		public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('SuratPj_model');
    }


		public function index()
		{
			$data = konfigurasi('Form Surat Pertanggung Jawaban Dakota',"ap");
			$data['tugas'] = $this->SuratPj_model->getTugas();
        	$this->template->load('layouts/admin_template', 'admin/form_pj', $data);
			
		}

		function getPetugas()
		{
			if($this->input->post('noSuratTugas'))
			{
				echo $this->SuratPj_model->getPetugas($this->input->post('noSuratTugas'));
			}
		}

		
		public function simpanKwitansi()
		{

				
			$noSurat =  $this->input->post('surattugas');
			$petugas =  $this->input->post('petugas');
			$tanggal =  $this->input->post('tanggal');
			$uraian =  $this->input->post('uraian');
			$kategori =  $this->input->post('kategori');
			$biaya =  $this->input->post('biaya');

			$idKwitansi = $this->SuratPj_model->getRowKwitansi();
			$idKw = $idKwitansi->idKwitansi + 1;

		
			$data1 = array(
				'tglKwitansi' => $tanggal,
				'fileKwitansi' => '0',
				'idTugas' => $petugas
				);	

			$this->db->insert('tbl_kwitansi',$data1);

		for ($i=0; $i <count($uraian) ; $i++) { 
			$data2 = array(
				'uraian' => $uraian[$i],
				'kategori' => $kategori[$i],
				'biaya' => $biaya[$i],
				'idKwitansi' => $idKw

			);

			$this->db->insert('tbl_uraian',$data2);
		
		}

		$this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
		redirect('admin/surat_pj', 'refresh');



			
		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */