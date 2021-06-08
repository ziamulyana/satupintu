<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Entry_capa_c extends CI_Controller {
	// main page


		public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('feedbackCapa');
    }


		function index()
		{
        	$data['peringatan'] = $this->feedbackCapa->getPeringatan();
            $this->template->load('layouts/admin_template', 'admin/entry_capa_v', $data);
		}

		function getSarana(){
		
			if($this->input->post('idPer'))
			{
				echo $this->feedbackCapa->getSaranaModel($this->input->post('idPer'));
			}
		}

		function add_data(){
			$this->feedbackCapa->saveData($this->inputFields());
		}

		function inputFields(){
			$idPeringatan =  $this->input->post('noSuratPeringatan');
			$noFeedback =  $this->input->post('noFeedback');
			$tanggal =  $this->input->post('tanggal');
			$perihalFeedback =  $this->input->post('perihalFeedback');
			$created_date =  $this->input->post('created_date');

			$config['upload_path'] = './assets/uploads/files/feedback';
			$config['allowed_types'] = 'pdf';
			$config['file_name'] = 'feedback-'.$noFeedback;
			$config['overwrite'] = true;
			$config['max_size'] = 0;
		

			$this->load->library("upload",$config);
			$this->upload->initialize($config);


			if(!$this->upload->do_upload('fileFeedback')){
				echo $this->upload->display_errors();
			}else{
				$fd=$this->upload->data();
				$file=$fd['file_name'];

			$data = array(
				'noSuratFeedback' => $noFeedback,
				'tglFeedback' => $tanggal,
				'isiFeedback' => $perihalFeedback,
				'closed' => '-1',
				'file_feedback' => $file,
				'created_date' => $created_date,	
				'idSuratPeringatan' => $idPeringatan
			);

			$this->db->set($data);
			$this->db->insert($this->db->satupintu . 'tbl_feedback');
			// $this->db->insert($this->db->'tbl_feedback',$data);
		
		}
		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */