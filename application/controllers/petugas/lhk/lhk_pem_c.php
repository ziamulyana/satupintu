<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lhk_pem_c extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Lhk_model');

    $this->check_login();
    if ($this->session->userdata('id_role') != "2") {
      redirect('', 'refresh');
    }
  }

  public function index()
  {

    $data['surat_tugas'] = $this->Lhk_model->getSuratTugas();
    $data['sarana'] = $this->Lhk_model->getSarana();
    $this->template->load('layouts/petugas_template', 'petugas/lhk/lhk_pem_v', $data);
  }

  function getSarana()
  {
     echo $this->Lhk_model->getSaranaPem();
  }

  public function add()
  {

    $idSurat = $this->input->post('suratTugas');
    $tglLhk = $this->input->post('tglLhk');
    $sppd = $this->input->post('sppd');
    $kwitansi = $this->input->post('kwitansi');
    $form = $this->input->post('form');
    $sarana = $this->input->post('sarana');
    $temuan = $this->input->post('temuan');
    $tl = $this->input->post('tl');
    $kesimpulan = $this->input->post('kesimpulan');
    $keterangan = $this->input->post('keterangan');

      
    $data['surat'] = $this->Lhk_model->getAtribut($idSurat);
    $data['idSurat'] = $idSurat;
    $data['tglLhk'] = $tglLhk;
    $data['sppd'] = $sppd;
    $data['kwitansi'] = $kwitansi;
    $data['form'] = $form;
    $array_sarana = array();
    foreach ($sarana as $num) {
      $sarana2['data'] = $this->Lhk_model->getSarana2($num);
      array_push($array_sarana, $sarana2);
    }
    $data['sarana'] =  $array_sarana;
    $data['temuan'] = $temuan;
    $data['tl'] = $tl;
    $data['kesimpulan'] = $kesimpulan;
    $data['keterangan'] = $keterangan;

    $data2 = array(
      'tglLhk'   => $tglLhk,
      'jenisLhk' => "pemeriksaan",
      'idSuratTugas' => $idSurat
    );


    $checkvalidation = $this->Lhk_model->checkDuplicate($idSurat);
    if ($checkvalidation == true) {
      for ($i = 0; $i < count($sarana); $i++) {
        if ($sarana[$i] != "Pilih Sarana") {
          $data_sarana = array(
            'idSarana'   => $sarana[$i],
            'statusBalai'   => $kesimpulan[$i],
            'isMk'   => $kesimpulan[$i],
            'temuan' => $temuan[$i],
            'deskripsiTemuan' => $keterangan[$i],
            'jenisTl' => $tl[$i],
            'idSuratTugas' => $idSurat
          );
          $this->db->insert('tbl_surattl', $data_sarana);
        } else {
          break;
        }
      }


      $this->db->insert('tbl_lhk', $data2);
      redirect('petugas/lhk/list_lhk_c', 'refresh');
    } else {
      redirect('petugas/lhk/lhk_pem_c', 'refresh');
    }


  }

  public function edit(){
    $idSurat = $this->input->post('idSuratTugas');
    $tglLhk = $this->input->post('tglLhk');
    $sppd = $this->input->post('sppd');
    $kwitansi = $this->input->post('kwitansi');
    $form = $this->input->post('form');
    $sarana = $this->input->post('sarana');
    $temuan = $this->input->post('temuan');
    $tl = $this->input->post('tl');
    $kesimpulan = $this->input->post('kesimpulan');
    $keterangan = $this->input->post('keterangan');

    $data_edit = array(
          'tglLhk' => $tglLhk,
          'sppd' => $sppd,
          'kwitansi' => $kwitansi,
          'form' =>$form,
          'idSurat' => $idSurat
        );


    $this->Lhk_model->updateLhk($data_edit);

    $this->Lhk_model->hapusDetailSarana($idSurat);

    for ($i = 0; $i < count($temuan); $i++) {

        if ($temuan[$i] != null and (count($sarana) == count($temuan))) {
          $data_sarana = array(
            'idSarana'   => $sarana[$i],
            'statusBalai'   => $kesimpulan[$i],
            'isMk'   => $kesimpulan[$i],
            'temuan' => $temuan[$i],
            'deskripsiTemuan' => $keterangan[$i],
            'jenisTl' => $tl[$i],
            'idSuratTugas' => $idSurat
          );
          $this->db->insert('tbl_surattl', $data_sarana);
        } else {
          break;
        }
      }

     redirect('petugas/lhk/list_lhk_c', 'refresh');

  }
}
