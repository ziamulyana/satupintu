	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_surat_peringatan extends CI_Controller {
	// main page

		public function __construct()
    {
        parent::__construct();
        $this->load->model("SuratPeringatan_model");
 
    }

		public function index()
		{

			
			$data['list_peringatan']= $this->SuratPeringatan_model->getSuratPeringatan();
        $this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/surat_peringatan', $data);
		}

		public function sub_obat(){
			$data = konfigurasi('Pilih Surat Peringatan Obat','');
        $this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/sub_surat_obat', $data);
		}

		public function ubah_suratPeringatan(){
			$id = $this->input->post('id');
			$tglEdit = $this->input->post('tglEdit');
			$noEdit = $this->input->post('noEdit');
			$fileEdit = $this->input->post('fileEdit');

			  $data_peringatan = array (
			  	'id' => $id,
			  	'tglSuratPeringatan' => $tglEdit,
			  	'noSuratPeringatan' => $noEdit,
			  	'jenisPeringatan' => "Hello World",
			  	'filePeringatan' => $fileEdit	
      );

			  print_r($data_peringatan);

	   // $this->SuratPeringatan_model->updateSuratPeringatan($data_peringatan);
	   // $this->session->set_flashdata('flash','Diubah');	
	   // redirect('C_surat_peringatan');
		

		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */