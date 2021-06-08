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
			$idPeringatan =  $this->input->post('noSuratPeringatan');
			$this->feedbackCapa->editPeringatan($idPeringatan);
			$this->feedbackCapa->saveData($this->inputFields());
			

		}

		function inputFields(){
			$idPeringatan =  $this->input->post('noSuratPeringatan');
			$noFeedback =  $this->input->post('noFeedback');
			$tanggal =  $this->input->post('tanggal');
			$perihalFeedback =  $this->input->post('perihalFeedback');
			$created_date =  $this->input->post('created_date');

			return array(
				'idFeedback' => '',
				'noSuratFeedback' => $noFeedback,
				'tglFeedback' => $tanggal,
				'isiFeedback' => $perihalFeedback,
				'closed' => '0',
				'file_feedback' => '0',
				'created_date' => $created_date,
				'idSuratPeringatan' => $idPeringatan
			);
		}

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */