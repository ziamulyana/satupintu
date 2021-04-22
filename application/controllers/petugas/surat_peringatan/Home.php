	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
	// main page
		public function index()
		{
			
        $this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/home/dashboard');
			
		}


	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */