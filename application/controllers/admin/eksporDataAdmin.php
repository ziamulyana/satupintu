<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EksporDataAdmin extends CI_Controller
{
    // main page


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Laporan_model');
    }


    public function surat()
    {
        $data = konfigurasi('Ekspor Data', 'rs');
        // $data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
        $this->template->load('layouts/admin_template', 'admin/tarikDataSurat', $data);
    }

    public function anggaran()
    {
        $data['anggaran']= $this->Laporan_model->getLaporanAnggaran();
        
        $this->template->load('layouts/admin_template', 'admin/tarikdataAnggaran', $data);
    }

    public function tarikAnggaran()
    {
        $data['anggaran']= $this->Laporan_model->getLaporanAnggaran();
        
        $this->load->view('admin/isilaporananggaran', $data, FALSE);
    }

    public function tarikSurat()
    {

        $tglAwal = $this->input->post('tglAwal');
        $tglAkhir = $this->input->post('tglAkhir');
        $data['tglAwal'] = $tglAwal;
        $data['tglAkhir'] = $tglAkhir;
        $data['laporanSurat'] = $this->Laporan_model->getLaporanSurat($tglAwal, $tglAkhir);
        $data['petugas'] = $this->Laporan_model->getPetugasSurat($tglAwal, $tglAkhir);
        $data['feedback'] = $this->Laporan_model->getFeedbackSurat($tglAwal, $tglAkhir);
        $data['closed'] = $this->Laporan_model->getClosedSurat($tglAwal, $tglAkhir);

        $this->load->view('admin/isiLaporanSurat', $data, FALSE);
    }

     public function pemeriksaan()
    {
        $data = konfigurasi('Ekspor Data', 'rs');
        // $data['surat_tugas'] = $this->SuratTl_model->getSuratTugas();
        $this->template->load('layouts/admin_template', 'admin/tarikDataPemeriksaan', $data);
    }

    public function tarikPemeriksaan(){
        $tglAwal = $this->input->post('tglAwal');
        $tglAkhir = $this->input->post('tglAkhir');
        $data['tglAwal'] = $tglAwal;
        $data['tglAkhir'] = $tglAkhir;
        $data['pbf'] = $this->Laporan_model->getHasilPemeriksaan("pbf","","","","",$tglAwal,$tglAkhir);
        $data['mk_pbf'] = $this->Laporan_model->getMKPemeriksaan("pbf","","","","",$tglAwal,$tglAkhir);
        $data['tmk_pbf'] = $this->Laporan_model->getMKPemeriksaan("pbf","","","","",$tglAwal,$tglAkhir);
        $data['pembinaan_pbf'] = $this->Laporan_model->getPembinaan("pbf","","","","",$tglAwal,$tglAkhir);
        $data['pembinaantek_pbf'] = $this->Laporan_model->getPembinaanTek("pbf","","","","",$tglAwal,$tglAkhir);
         $data['peringatan_pbf'] = $this->Laporan_model->getPeringatan("pbf","","","","",$tglAwal,$tglAkhir);
          $data['peringatanKer_pbf'] = $this->Laporan_model->getPeringatanKeras("pbf","","","","",$tglAwal,$tglAkhir);
           $data['psk_pbf'] = $this->Laporan_model->getPSK("pbf","","","","",$tglAwal,$tglAkhir);




        // apotek 
        $data['apotek'] = $this->Laporan_model->getHasilPemeriksaan("apotek","","","","",$tglAwal,$tglAkhir);
        $data['mk_apotek'] = $this->Laporan_model->getMKPemeriksaan("apotek","","","","",$tglAwal,$tglAkhir);
        $data['pembinaan_apotek'] = $this->Laporan_model->getPembinaan("apotek","","","","",$tglAwal,$tglAkhir);
          $data['pembinaantek_apotek'] = $this->Laporan_model->getPembinaanTek("apotek","","","","",$tglAwal,$tglAkhir);
           $data['peringatan_apotek'] = $this->Laporan_model->getPeringatan("apotek","","","","",$tglAwal,$tglAkhir);
             $data['peringatanKer_apotek'] = $this->Laporan_model->getPeringatanKeras("apotek","","","","",$tglAwal,$tglAkhir);
             $data['psk_apotek'] = $this->Laporan_model->getPSK("apotek","","","","",$tglAwal,$tglAkhir);


        // toko obat
         $data['toko_obat'] = $this->Laporan_model->getHasilPemeriksaan("Toko Obat","","","","",$tglAwal,$tglAkhir);
          $data['mk_toko_obat'] = $this->Laporan_model->getMKPemeriksaan("Toko Obat","","","","",$tglAwal,$tglAkhir);
          $data['pembinaan_toko_obat'] = $this->Laporan_model->getPembinaan("Toko Obat","","","","",$tglAwal,$tglAkhir);
          $data['pembinaantek_toko_obat'] = $this->Laporan_model->getPembinaanTek("Toko Obat","","","","",$tglAwal,$tglAkhir);
           $data['peringatan_toko_obat'] = $this->Laporan_model->getPeringatan("Toko Obat","","","","",$tglAwal,$tglAkhir);
            $data['peringatanKer_toko_obat'] = $this->Laporan_model->getPeringatanKeras("Toko Obat","","","","",$tglAwal,$tglAkhir);
            $data['psk_toko_obat'] = $this->Laporan_model->getPSK("Toko Obat","","","","",$tglAwal,$tglAkhir);


          // klinik
         $data['klinik'] = $this->Laporan_model->getHasilPemeriksaan("klinik","","","","",$tglAwal,$tglAkhir);
         $data['mk_klinik'] = $this->Laporan_model->getMKPemeriksaan("klinik","","","","",$tglAwal,$tglAkhir);
          $data['pembinaan_klinik'] = $this->Laporan_model->getPembinaan("klinik","","","","",$tglAwal,$tglAkhir);
           $data['pembinaantek_klinik'] = $this->Laporan_model->getPembinaanTek("klinik","","","","",$tglAwal,$tglAkhir);
             $data['peringatan_klinik'] = $this->Laporan_model->getPeringatan("klinik","","","","",$tglAwal,$tglAkhir);
               $data['peringatanKer_klinik'] = $this->Laporan_model->getPeringatanKeras("klinik","","","","",$tglAwal,$tglAkhir);
               $data['psk_klinik'] = $this->Laporan_model->getPSK("klinik","","","","",$tglAwal,$tglAkhir);




         // rs

         $data['rs'] = $this->Laporan_model->getHasilPemeriksaan("Rumah Sakit","","","","",$tglAwal,$tglAkhir);
          $data['mk_rs'] = $this->Laporan_model->getMKPemeriksaan("Rumah Sakit","","","","",$tglAwal,$tglAkhir);
          $data['pembinaan_rs'] = $this->Laporan_model->getPembinaan("Rumah Sakit","","","","",$tglAwal,$tglAkhir);
          $data['pembinaantek_rs'] = $this->Laporan_model->getPembinaanTek("Rumah Sakit","","","","",$tglAwal,$tglAkhir);
           $data['peringatan_rs'] = $this->Laporan_model->getPeringatan("Rumah Sakit","","","","",$tglAwal,$tglAkhir);
             $data['peringatanKer_rs'] = $this->Laporan_model->getPeringatanKeras("Rumah Sakit","","","","",$tglAwal,$tglAkhir);
             $data['psk_rs'] = $this->Laporan_model->getPSK("Rumah Sakit","","","","",$tglAwal,$tglAkhir);



          // ifk
         $data['ifk'] = $this->Laporan_model->getHasilPemeriksaan("IFK","","","","",$tglAwal,$tglAkhir);
         $data['mk_ifk'] = $this->Laporan_model->getMKPemeriksaan("IFK","","","","",$tglAwal,$tglAkhir);
         $data['pembinaan_ifk'] = $this->Laporan_model->getPembinaan("IFK","","","","",$tglAwal,$tglAkhir);
          $data['pembinaantek_ifk'] = $this->Laporan_model->getPembinaanTek("IFK","","","","",$tglAwal,$tglAkhir);
           $data['peringatan_ifk'] = $this->Laporan_model->getPeringatan("IFK","","","","",$tglAwal,$tglAkhir);
            $data['peringatanKer_ifk'] = $this->Laporan_model->getPeringatanKeras("IFK","","","","",$tglAwal,$tglAkhir);
              $data['psk_ifk'] = $this->Laporan_model->getPSK("IFK","","","","",$tglAwal,$tglAkhir);




         // prod ot
         $data['prod_ot'] = $this->Laporan_model->getHasilPemeriksaan("Produksi Obat Tradisional","","","","",$tglAwal,$tglAkhir);
          $data['mk_prod_ot'] = $this->Laporan_model->getMKPemeriksaan("Produksi Obat Tradisional","","","","",$tglAwal,$tglAkhir);
           $data['pembinaan_prod_ot'] = $this->Laporan_model->getPembinaan("Produksi Obat Tradisional","","","","",$tglAwal,$tglAkhir);
$data['pembinaantek_prod_ot'] = $this->Laporan_model->getPembinaanTek("Produksi Obat Tradisional","","","","",$tglAwal,$tglAkhir);
$data['peringatan_prod_ot'] = $this->Laporan_model->getPeringatan("Produksi Obat Tradisional","","","","",$tglAwal,$tglAkhir);
$data['peringatanKer_prod_ot'] = $this->Laporan_model->getPeringatanKeras("Produksi Obat Tradisional","","","","",$tglAwal,$tglAkhir);
$data['psk_prod_ot'] = $this->Laporan_model->getPSK("Produksi Obat Tradisional","","","","",$tglAwal,$tglAkhir);



          // dist ot
         $data['dist_ot'] = $this->Laporan_model->getHasilPemeriksaan("Retail Obat Tradisional","Distributor Obat Tradisional","","","",$tglAwal,$tglAkhir);
          $data['mk_dist_ot'] = $this->Laporan_model->getMKPemeriksaan("Retail Obat Tradisional","Distributor Obat Tradisional","","","",$tglAwal,$tglAkhir);
           $data['pembinaan_dist_ot'] = $this->Laporan_model->getPembinaan("Retail Obat Tradisional","Distributor Obat Tradisional","","","",$tglAwal,$tglAkhir);
            $data['pembinaantek_dist_ot'] = $this->Laporan_model->getPembinaanTek("Retail Obat Tradisional","Distributor Obat Tradisional","","","",$tglAwal,$tglAkhir);
            $data['peringatan_dist_ot'] = $this->Laporan_model->getPeringatan("Retail Obat Tradisional","Distributor Obat Tradisional","","","",$tglAwal,$tglAkhir);
             $data['peringatanKer_dist_ot'] = $this->Laporan_model->getPeringatanKeras("Retail Obat Tradisional","Distributor Obat Tradisional","","","",$tglAwal,$tglAkhir);
              $data['psk_dist_ot'] = $this->Laporan_model->getPSK("Retail Obat Tradisional","Distributor Obat Tradisional","","","",$tglAwal,$tglAkhir);


        // prod kos
         $data['prod_kos'] = $this->Laporan_model->getHasilPemeriksaan("produksi kosmetika","","","","",$tglAwal,$tglAkhir);
         $data['mk_prod_kos'] = $this->Laporan_model->getMKPemeriksaan("produksi kosmetika","","","","",$tglAwal,$tglAkhir);
           $data['pembinaan_prod_kos'] = $this->Laporan_model->getPembinaan("produksi kosmetika","","","","",$tglAwal,$tglAkhir);
$data['pembinaantek_prod_kos'] = $this->Laporan_model->getPembinaanTek("produksi kosmetika","","","","",$tglAwal,$tglAkhir);
$data['peringatan_prod_kos'] = $this->Laporan_model->getPeringatan("produksi kosmetika","","","","",$tglAwal,$tglAkhir);

$data['peringatanKer_prod_kos'] = $this->Laporan_model->getPeringatanKeras("produksi kosmetika","","","","",$tglAwal,$tglAkhir);
$data['psk_prod_kos'] = $this->Laporan_model->getPSK("produksi kosmetika","","","","",$tglAwal,$tglAkhir);


         // dist kos
         $data['dist_kos'] = $this->Laporan_model->getHasilPemeriksaan("Importir Kosmetik","Distributor Kosmetik","Toko Kosmetik","Konter Kosmetik", "Pemohon Notif",$tglAwal,$tglAkhir);
         $data['mk_dist_kos'] = $this->Laporan_model->getMKPemeriksaan("Importir Kosmetik","Distributor Kosmetik","Toko Kosmetik","Konter Kosmetik", "Pemohon Notif",$tglAwal,$tglAkhir);
         $data['pembinaan_dist_kos'] = $this->Laporan_model->getPembinaan("Importir Kosmetik","Distributor Kosmetik","Toko Kosmetik","Konter Kosmetik", "Pemohon Notif",$tglAwal,$tglAkhir);
$data['pembinaantek_dist_kos'] = $this->Laporan_model->getPembinaanTek("Importir Kosmetik","Distributor Kosmetik","Toko Kosmetik","Konter Kosmetik", "Pemohon Notif",$tglAwal,$tglAkhir);
$data['peringatan_dist_kos'] = $this->Laporan_model->getPeringatan("Importir Kosmetik","Distributor Kosmetik","Toko Kosmetik","Konter Kosmetik", "Pemohon Notif",$tglAwal,$tglAkhir);
$data['peringatanKer_dist_kos'] = $this->Laporan_model->getPeringatanKeras("Importir Kosmetik","Distributor Kosmetik","Toko Kosmetik","Konter Kosmetik", "Pemohon Notif",$tglAwal,$tglAkhir);
$data['psk_dist_kos'] = $this->Laporan_model->getPSK("Importir Kosmetik","Distributor Kosmetik","Toko Kosmetik","Konter Kosmetik", "Pemohon Notif",$tglAwal,$tglAkhir);
        // prod pangan

         $data['prod_pangan'] = $this->Laporan_model->getHasilPemeriksaan("Pangan MD","Pangan IRTP","","","",$tglAwal,$tglAkhir);
         $data['mk_prod_pangan'] = $this->Laporan_model->getMKPemeriksaan("Pangan MD","Pangan IRTP","","","",$tglAwal,$tglAkhir);
         $data['pembinaan_prod_pangan'] = $this->Laporan_model->getPembinaan("Pangan MD","Pangan IRTP","","","",$tglAwal,$tglAkhir);
            $data['pembinaantek_prod_pangan'] = $this->Laporan_model->getPembinaanTek("Pangan MD","Pangan IRTP","","","",$tglAwal,$tglAkhir);
             $data['peringatan_prod_pangan'] = $this->Laporan_model->getPeringatan("Pangan MD","Pangan IRTP","","","",$tglAwal,$tglAkhir);
              $data['peringatanKer_prod_pangan'] = $this->Laporan_model->getPeringatanKeras("Pangan MD","Pangan IRTP","","","",$tglAwal,$tglAkhir);
               $data['psk_prod_pangan'] = $this->Laporan_model->getPSK("Pangan MD","Pangan IRTP","","","",$tglAwal,$tglAkhir);




         // dist pangan
        $data['dist_pangan'] = $this->Laporan_model->getHasilPemeriksaan("Importir Pangan","Distributor Pangan","Retail Pangan Modern","Retail Pangan Tradisional","",$tglAwal,$tglAkhir);
        $data['mk_dist_pangan'] = $this->Laporan_model->getMKPemeriksaan("Importir Pangan","Distributor Pangan","Retail Pangan Modern","Retail Pangan Tradisional","",$tglAwal,$tglAkhir);
        $data['pembinaan_dist_pangan'] = $this->Laporan_model->getPembinaan("Importir Pangan","Distributor Pangan","Retail Pangan Modern","Retail Pangan Tradisional","",$tglAwal,$tglAkhir);
         $data['pembinaantek_dist_pangan'] = $this->Laporan_model->getPembinaanTek("Importir Pangan","Distributor Pangan","Retail Pangan Modern","Retail Pangan Tradisional","",$tglAwal,$tglAkhir);
         $data['peringatan_dist_pangan'] = $this->Laporan_model->getPeringatan("Importir Pangan","Distributor Pangan","Retail Pangan Modern","Retail Pangan Tradisional","",$tglAwal,$tglAkhir);
          $data['peringatanKer_dist_pangan'] = $this->Laporan_model->getPeringatanKeras("Importir Pangan","Distributor Pangan","Retail Pangan Modern","Retail Pangan Tradisional","",$tglAwal,$tglAkhir);
          $data['psk_dist_pangan'] = $this->Laporan_model->getPSK("Importir Pangan","Distributor Pangan","Retail Pangan Modern","Retail Pangan Tradisional","",$tglAwal,$tglAkhir);
        $this->load->view('admin/isiPemeriksaan', $data, FALSE);
    }
}

	/* End of file Home.php */
	/* Location: ./application/controllers/Home.php */