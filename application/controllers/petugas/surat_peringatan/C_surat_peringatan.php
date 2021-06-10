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

		$data = konfigurasi('Pilih Surat Peringatan','');
		$data['list_peringatan']= $this->SuratPeringatan_model->getSuratPeringatan();
		$data['upload_file'] = $this->SuratPeringatan_model->getFile();
		$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/surat_peringatan', $data);
	}

	public function sub_obat(){
		$data = konfigurasi('Pilih Surat Peringatan Obat','');
		$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/sub_surat_obat', $data);
	}

	public function ubah_suratPeringatan(){
		$id = $this->input->post('idPeringatan');
		$tglEdit = $this->input->post('tglEdit');
		$noEdit = $this->input->post('noEdit');

		$config['upload_path'] = './assets/uploads/files/peringatan';
		$config['allowed_types'] = 'pdf';
		$config['file_name'] = 'suratPeringatan-'.$id;
		$config['overwrite'] = true;
		$config['max_size'] = 0;
		

		$this->load->library("upload",$config);
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('fileEdit')){
			echo $this->upload->display_errors();
		}else{
			$fd=$this->upload->data();
			$file=$fd['file_name'];

			$data_peringatan = array (
				'id' => $id,
				'tglSuratPeringatan' => $tglEdit,
				'noSuratPeringatan' => $noEdit,
				'filePeringatan' => $file	
			);

			$this->SuratPeringatan_model->updateSuratPeringatan($data_peringatan);
			redirect('petugas/surat_peringatan/C_surat_peringatan');
		}
	}

	


	public function hapus_suratPeringatan(){
		$id = $this->input->post('idPeringatan');
		$this->SuratPeringatan_model->hapusSuratPeringatan($id);
		redirect('petugas/surat_peringatan/C_surat_peringatan');
		}


	public function getSaranaPer(){
		if($this->input->post('idPer'))
			{
				echo $this->SuratPeringatan_model->getSaranaPer($this->input->post('idPer'));
			}
	}

	}

	



/* End of file Home.php */
/* Location: ./application/controllers/Home.php */