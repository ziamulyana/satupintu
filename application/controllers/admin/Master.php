<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Master extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Master_model');
    }

    public function data_pegawai()
    {
        $data['pegawai'] = $this->Master_model->getPegawai();
        $this->template->load('layouts/admin_template', 'admin/data_pegawai',$data);
    }

    public function tambah_pegawai()
        {
            $data = konfigurasi('Form Tambah Pegawai',"ap");
            $this->template->load('layouts/admin_template', 'admin/form_pegawai');
            
        }

        public function simpan_pegawai()
        {
            $nama =  $this->input->post('nama');
            $jabatan =  $this->input->post('jabatan');
            $nip =  $this->input->post('nip');
            $pangkat =  $this->input->post('pangkat');
            $golongan =  $this->input->post('golongan');
            
            
            $data = array(
                'nama' => $nama,
                'jabatan' => $jabatan,
                'nip' => $nip,
                'pangkat' => $pangkat,
                'golongan' => $golongan
                );  

            $this->db->insert('tbl_pegawai',$data);

        

        $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
        redirect('admin/Master/data_pegawai', 'refresh');

            
        }

        public function ubahPegawai(){
        $id = $this->input->post('idPg');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $nip = $this->input->post('nip');
        $pangkat = $this->input->post('pangkat');
        $golongan = $this->input->post('golongan');
    
        
            $data = array (
                'idPegawai' => $id,
                'nama' => $nama,
                'jabatan' => $jabatan,
                'nip' => $nip,
                'pangkat' => $pangkat,
                'golongan' => $golongan
            );


            $this->Master_model->updatePegawai($data);
            redirect('admin/Master/data_pegawai');
        }
    

public function hapus_dataPegawai(){
        $id = $this->input->post('idPg');
        $this->Master_model->hapus_dataPegawai($id);
        redirect('admin/Master/data_pegawai');
        }

    public function data_sarana()
    {

        $data1['sarana'] = $this->Master_model->getSarana();
        $this->template->load('layouts/admin_template', 'admin/data_sarana',$data1);
    }

 public function tambah_sarana()
        {
            $data1 = konfigurasi('Form Tambah Sarana',"as");
            $this->template->load('layouts/admin_template', 'admin/form_sarana');
            
        }

        public function simpan_sarana()
        {
            $ns =  $this->input->post('namas');
            $als =  $this->input->post('alamats');
            $ps =  $this->input->post('pemiliks');
            $nois =  $this->input->post('noIS');
            $pj =  $this->input->post('pJ');
            $noip =  $this->input->post('noIPJ');
            $ks =  $this->input->post('kS');
            $js =  $this->input->post('jS');
            $kt =  $this->input->post('kotas');
            
            $data1 = array(
                'namaSarana' => $ns,
                'alamatSarana' => $als,
                'pemilik' => $ps,
                'noIzinSarana' => $nois,
                'penanggungJawab' => $pj,
                'noIzinPj' => $noip,
                'kategoriSarana' => $ks,
                'jenisSarana' => $js,
                'kota' => $kt
                );  

            $this->db->insert('tbl_sarana',$data1);

        

        $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
        redirect('admin/Master/data_sarana', 'refresh');

            
        }

        public function ubahSarana(){
            $id = $this->input->post('idSr');
            $ns =  $this->input->post('namas');
            $als =  $this->input->post('alamats');
            $ps =  $this->input->post('pemiliks');
            $nois =  $this->input->post('noIS');
            $pj =  $this->input->post('pJ');
            $noip =  $this->input->post('noIPJ');
            $ks =  $this->input->post('kS');
            $js =  $this->input->post('jS');
            $kt =  $this->input->post('kotas');
            
            $data1 = array(
                'idSarana' => $idSr,
                'namaSarana' => $ns,
                'alamatSarana' => $als,
                'pemilik' => $ps,
                'noIzinSarana' => $nois,
                'penanggungJawab' => $pj,
                'noIzinPj' => $noip,
                'kategoriSarana' => $ks,
                'jenisSarana' => $js,
                'kota' => $kt
                );  

            $this->Master_model->updateSarana($data1);
            redirect('admin/Master/data_sarana');
        }
    

        public function hapus_dataSarana(){
        $id = $this->input->post('idSr');
        $this->Master_model->hapus_dataSarana($id);
        redirect('admin/Master/data_sarana');
        }

}

