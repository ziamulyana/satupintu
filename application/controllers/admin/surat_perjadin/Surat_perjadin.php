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
			$data['tugas'] = $this->SuratPerjadin_model->getsurattugas();
			$data['printS'] = $this->SuratPerjadin_model->getpejabat();			
        	$this->template->load('layouts/admin_template', 'admin/surat_perjadin/surat_perjadin', $data);
			
		}

		function getPetugas()
		{
			if($this->input->post('idPer'))
			{
				echo $this->SuratPerjadin_model->getPetugas($this->input->post('idPer'));
			}
		}

		  // Print SPD
		public function print()
		{
			$ppk = $this->input->post('nama_ppk');
        
			$data = array (
				'nama_ppk' => $ppk,
			);
			$this->db->insert('tbl_ppk', $data);
	
			$id = $this->input->post('noSurat');
			$idPetugas = $this->input->post('idPetugas');
			$id_ppk = $this->input->post('nama_ppk');
			$id_pejabat = $this->input->post('id_pejabat');
			$data2['idSurat'] = $id;
			$data2['printS'] = $this->SuratPerjadin_model->print_spd($id,$idPetugas,$id_ppk,$id_pejabat);
			$this->load->view('admin/surat_perjadin/print_spd', $data2, false);
		}



		
		
	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */