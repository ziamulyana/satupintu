	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
	// main page
		public function index()
		{
			$data = konfigurasi('dashboard');
        $this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/home/dashboard', $data);
			
		}


	}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */