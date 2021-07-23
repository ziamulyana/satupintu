<?php

defined('BASEPATH') or exit('No direct script access allowed');

class List_lhk_c extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');
        }

        $this->load->model("Lhk_model");
    }

    public function index()
    {

        $data['list_lhk'] = $this->Lhk_model->getLhk();
        // $data['upload_file'] = $this->Lhk_model->getFileLhk();
        $this->template->load('layouts/petugas_template', 'petugas/lhk/list_lhk_v', $data);
    }

     public function edit_lhk()
    {

       $id = $this->uri->segment(5);
       $data = konfigurasi('Form Edit LHK', "ap");
       $data['lhk'] = $this->Lhk_model->getLhkDet($id);
       $data['data_sarana'] = $this->Lhk_model->getSarana();
       $this->template->load('layouts/petugas_template', 'petugas/lhk/edit_lhk_pem_v', $data);
    }

    public function ubah_lhk()
    {
        $id = $this->input->post('id_');
        $tglEdit = $this->input->post('tglEdit');

        // $config['upload_path'] = './assets/uploads/files/lhk';
        // $config['allowed_types'] = 'pdf';
        // $config['file_name'] = 'lhk-' . $id;
        // $config['overwrite'] = true;
        // $config['max_size'] = 0;


        // $this->load->library("upload", $config);
        // $this->upload->initialize($config);

        // if (!$this->upload->do_upload('fileEdit')) {
        //     echo $this->upload->display_errors();
        // } else {
        //     $fd = $this->upload->data();
        //     $file = $fd['file_name'];

            $dataLhk = array(
                'id' => $id,
                'tglLhk' => $tglEdit

            );

            $this->Lhk_model->updateLhk($dataLhk);
            redirect('petugas/lhk/list_lhk_c');
        }
    


    public function hapus_lhk()
    {
        $id = $this->input->post('id_');
        $this->Lhk_model->hapusLhk($id);
        redirect('petugas/lhk/list_lhk_c');
    }

    public function addSarana()
    {
        redirect('admin/master/tambah_sarana');
    }

    public function print_lhk(){
        $id = $this->input->post('idSurat');
        $detailLhk = $this->Lhk_model->getLhkDetail($id);
        
        $idSarana = array();
        $temuan = array();
        $kesimpulan = array();
        $keterangan= array();
        $tl = array();

        foreach($detailLhk as $row){
                // $idLhk = $row->idLhk;
                $tglLhk = $row->tglLhk;
                // $jenisLhk = $row->jenisLhk;
                $sppd = $row->pengesahSppd;
                $kwitansi = $row->pengesahKwitansi;
                $form = $row ->pengesahForm;
                // $noSuratTugas = $row->noSuratTugas;
                $idSurat = $row->idSurat;
                array_push($idSarana, $row->idSarana);
                array_push($kesimpulan, $row->statusBalai);
                 array_push($keterangan,  $row->deskripsiTemuan);
                 array_push($temuan, $row->temuan);
                  array_push($tl, $row->jenisTl);

                //  = ;
                // $deskripsiTemuan = $row->deskripsiTemuan;
                // $jenisTl = ;
            }

             $data['surat'] = $this->Lhk_model->getAtribut($idSurat);
    $data['idSurat'] = $idSurat;
    $data['tglLhk'] = $tglLhk;
    $data['sppd'] = $sppd;
    $data['kwitansi'] = $kwitansi;
    $data['form'] = $form;

    $array_sarana = array();
    foreach ($idSarana as $num) {
      $sarana2['data'] = $this->Lhk_model->getSarana2($num);
      array_push($array_sarana, $sarana2);
    }

     $data['sarana'] =  $array_sarana;
    $data['temuan'] = $temuan;
    $data['tl'] = $tl;
    $data['kesimpulan'] = $kesimpulan;
    $data['keterangan'] = $keterangan;

    $this->load->view('petugas/lhk/lhk_pem_isi', $data, FALSE);
                

    }
}
