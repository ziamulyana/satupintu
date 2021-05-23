	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Feedback extends CI_Controller {
	// main page


		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model("Feedback_model");
		}


		public function index()
		{
			$data = konfigurasi('Lihat Feedback','');
			$data['list_feedback']= $this->Feedback_model->getFeedback();
			$data['jumlah_confirm'] = $this->Feedback_model->getChecklist();
			// foreach ($data['list_feedback']->result() as $row){
   //                echo "<tr>";
   //                echo "<td>".$row->noSuratFeedback."</td>";
   //                echo "<td>".$row->tglFeedback."</td>";
   //                echo "<td>".$row->isiFeedback."</td>";
   //                echo "<td>".$row->file_feedback."</td>";
   //                echo "<td>".$row->closed."</td>";
   //            }
       		 $this->template->load('layouts/admin_template', 'admin/Feedback', $data);
			
		}

		public function updateClosed(){
			$id = $this->input->post('id');
			$editClosed = $this->input->post('editclosed');

			$this->Feedback_model->updateClosed($id, $editClosed);
			redirect('petugas/admFeedback_c');
		}
		
	

	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */