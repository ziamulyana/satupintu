<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
         $this->load->model('Master_model');
        

        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
    }

    public function index()
    {
       
        $data['pbf'] = $this->Master_model->getKomoditi("pbf","","","","");
        $data['apotek'] = $this->Master_model->getKomoditi("apotek","","","","");
         $data['toko_obat'] = $this->Master_model->getKomoditi("Toko Obat","","","","");
         $data['klinik'] = $this->Master_model->getKomoditi("klinik","","","","");
         $data['rs'] = $this->Master_model->getKomoditi("Rumah Sakit","","","","");
         $data['ifk'] = $this->Master_model->getKomoditi("IFK","","","","");
         $data['prod_ot'] = $this->Master_model->getKomoditi("Produksi Obat Tradisional","","","","");
         $data['dist_ot'] = $this->Master_model->getKomoditi("Retail Obat Tradisional","Distributor Obat Tradisional","","","");
         $data['prod_kos'] = $this->Master_model->getKomoditi("produksi kosmetika","","","","");
         $data['dist_kos'] = $this->Master_model->getKomoditi("Importir Kosmetik","Distributor Kosmetik","Toko Kosmetik","Konter Kosmetik", "Pemohon Notif","");
         $data['prod_pangan'] = $this->Master_model->getKomoditi("Pangan MD","Pangan IRTP","","","");
           $data['dist_pangan'] = $this->Master_model->getKomoditi("Importir Pangan","Distributor Pangan","Retail Pangan Modern","Retail Pangan Tradisional","");
        $this->template->load('layouts/admin_template', 'admin/dashboard', $data);
    }
}
