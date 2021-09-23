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


    public function data_sarana()
    {

        $data1['sarana'] = $this->Master_model->getSarana();
        $this->template->load('layouts/petugas_template', 'petugas/data_sarana', $data1);
    }

    public function tambah_sarana()
    {
        $data1 = konfigurasi('Form Tambah Sarana', "as");
        $this->template->load('layouts/petugas_template', 'petugas/form_sarana');
    }

    public function simpan_sarana()
    {
        $nama =  $this->input->post('namas');
        $alamat =  $this->input->post('alamats');
        $jenis =  $this->input->post('kategori');
        $produk = $this->input->post('produk');
        $kota =  $this->input->post('kota');
        $kecamatan =  $this->input->post('kecamatan');
        $kelurahan = $this->input->post('kelurahan');
        $kategori = $this->input->post('komoditi');

        $data1 = array(
            'namaSarana' => $nama,
            'alamatSarana' => $alamat,
            'jenisSarana' => $jenis,
            'produkSarana' => $produk,
            'kotaSarana' => $kota,
            'kecamatanSarana' => $kecamatan,
            'kelurahanSarana' => $kelurahan,
            'kategoriSarana' => $kategori
        );

        $this->db->insert('tbl_sarana', $data1);



        $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
        redirect('petugas/Master/data_sarana', 'refresh');
    }

    public function ubahSarana()
    {
        $id = $this->input->post('idSr');
        $ns =  $this->input->post('namas');
        $als =  $this->input->post('alamats');
        $jenis =  $this->input->post('jenisEdit');
        $produk =  $this->input->post('produkEdit');
        $kota =  $this->input->post('kotaEdit');
        $kecamatan =  $this->input->post('kecamatanEdit');
        $kelurahan =  $this->input->post('kelurahanEdit');
        $kategori =  $this->input->post('kategoriEdit');


        $data1 = array(
            'idSarana' => $id,
            'namaSarana' => $ns,
            'alamatSarana' => $als,
            'jenisSarana' => $jenis,
            'produkSarana' => $produk,
            'kotaSarana' => $kota,
            'kecamatanSarana' => $kecamatan,
            'kelurahanSarana' => $kelurahan,
            'kategoriSarana' => $kategori
        );

        $this->Master_model->updateSarana($data1);
        redirect('petugas/Master/data_sarana');
    }


    public function hapus_dataSarana()
    {
        $id = $this->input->post('idHapus');
        $this->Master_model->hapus_dataSarana($id);
        redirect('petugas/Master/data_sarana');
    }
}
