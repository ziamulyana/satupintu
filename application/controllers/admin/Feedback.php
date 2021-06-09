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

		// public function updateClosed(){
		// 	$id = $this->input->post('id');
		// 	$editClosed = $this->input->post('editclosed');

		// 	$this->Feedback_model->updateClosed($id, $editClosed);
		// 	redirect('admin/Feedback');
		// }
	
		
		public function ubah_suratFeedback(){
			$id = $this->input->post('idFeedback');
			$tglEdit = $this->input->post('tglEdit');
			$noEdit = $this->input->post('noEdit');
	
			$config['upload_path'] = './assets/uploads/files/feedback';
			$config['allowed_types'] = 'pdf';
			$config['file_name'] = 'feedback-'.$id;
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
					'tglFeedback' => $tglEdit,
					'noSuratFeedback' => $noEdit,
					'file_feedback' => $file	
				);
	
				$this->Feedback_model->updateSuratFeedback($data_feedback);
				redirect('admin/Feedback');
			}
		}


		public function hapus_suratFeedback(){
			$id = $this->input->post('idFeedback');
			$this->Feedback_model->hapus_SuratFeedback($id);
			redirect('admin/Feedback');
			}
	
		}
	

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */