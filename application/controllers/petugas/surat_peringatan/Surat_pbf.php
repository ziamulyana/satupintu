			<?php
			defined('BASEPATH') or exit('No direct script access allowed');

			class Surat_pbf extends CI_Controller
			{
				// main page


				public function __construct()
				{
					parent::__construct();
					$this->load->database();
					$this->load->model('SuratPbf_model');
					$this->load->model('SuratPeringatan_model');
					$this->load->model('SuratTl_model');
				}


				public function index()
				{

					$data = konfigurasi('Form Surat Tindak Lanjut Pbf', "");
					$data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();

					$this->template->load('layouts/petugas_template', 'petugas/surat_peringatan/surat_pbf/form', $data);
				}





				public function surat()
				{


					function convertMonths($month)
					{
						$month = date('m', $month);
						return $month;
					}

					function convertYears($year)
					{
						$year = date('y', $year);
						return $year;
					}


					$tanggal =  $this->input->post('tanggal');
					$noSurat =  $this->input->post('noSurat');
					$idSurat = $this->input->post('suratTugas');
					// detil sarana
					$idSarana =  $this->input->post('idSarana');
					$tglMulaiperiksa = $this->input->post('tglMulaiperiksa');
					$namaPimpinan = $this->input->post('namaPimpinan');
					$noIzin =  $this->input->post('noIzin');
					$namaPj =  $this->input->post('namaPj');
					$noSip =  $this->input->post('noSip');
					$noHp =  $this->input->post('noHp');
					// detil temuan
					$pilihPasal = $this->input->post('pilihPasal');


					$tanggalolah  = strtotime($tanggal);

					$noSuratFix = "T-PW.01.12.9A.9A2." . convertMonths($tanggalolah) . "." . convertYears($tanggalolah) . "." . $noSurat;
					echo $noSuratFix;



					$pasal_peringatan = array();
					foreach ($pilihPasal as $num) {
						$pasal['data'] = $this->SuratPbf_model->getPasal($num);
						array_push($pasal_peringatan, $pasal);
					}


					$temuan = $this->SuratPeringatan_model->getTemuan($idSarana);
					foreach ($temuan as $tm) {
						$detailTemuan = $tm->deskripsiTemuan;
					}



					$dataSarana = $this->SuratPeringatan_model->getSarana($idSarana);

					foreach ($dataSarana as $row) {
						$namaSarana = $row->namaSarana;
						$idTl =  $row->idTl;
						$alamatSarana = $row->alamatSarana;
						$halSurat = $row->jenisTl;
						$kotaSurat = $row->kotaSarana;
					}






					$data = array(
						'title' => 'Cetak surat tugas',
						'tanggal' => $tanggal,
						'noSurat' => $noSuratFix,
						'halSurat' => $halSurat,
						'penerimaSurat' => $namaSarana,
						'kotaSurat' => $kotaSurat,
						// detil sarana
						'namaSarana' => $namaSarana,
						'alamatSarana' => $alamatSarana,
						'tglMulaiperiksa' => $tglMulaiperiksa,
						'noIzin' => $noIzin,
						'namaPimpinan' => $namaPimpinan,
						'namaPj' => $namaPj,
						'noSip' => $noSip,
						'noHp' => $noHp,
						// detil temuan
						'detailTemuan' => $detailTemuan,
						// ganti ke db
						'pilihPasal' => $pasal_peringatan
					);


					$data_db = array(

						'tglSuratPeringatan' => $tanggal,
						'noSuratPeringatan' => $noSuratFix,
						'jenisPeringatan' => "pbf",
						'idTl' => $idTl,
						'status' => 0
					);

					$checkvalidation = $this->SuratPeringatan_model->checkDuplicate($noSuratFix);
					if ($checkvalidation == true) {
						$this->db->insert('tbl_peringatan', $data_db);
						$this->load->view('petugas/surat_peringatan/surat_pbf/isiSurat', $data, FALSE);
					} else {
						$this->session->set_flashdata('failed', 'Maaf, Data tidak diproses karena duplikat');
						redirect('petugas/surat_peringatan/Surat_pbf', 'refresh');
					}
				}
			}

			/* End of file Home.php */
			/* Location: ./application/controllers/Home.php */