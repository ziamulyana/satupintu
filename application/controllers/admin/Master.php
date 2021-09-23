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

            $this->db->insert('tbl_sarana',$data1);

        

        $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
        redirect('admin/Master/data_sarana', 'refresh');

            
        }

        public function ubahSarana(){
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
            redirect('admin/Master/data_sarana');
        }
    

        public function hapus_dataSarana(){
        $id = $this->input->post('idHapus');
        $this->Master_model->hapus_dataSarana($id);
        redirect('admin/Master/data_sarana');
        }


public function data_anggaran()
    {

        $data2['anggaran'] = $this->Master_model->getAnggaran();
        $this->template->load('layouts/admin_template', 'admin/data_anggaran',$data2);
    }

 public function tambah_anggaran()
        {
            $data2 = konfigurasi('Form Tambah Sarana',"ag");
            $this->template->load('layouts/admin_template', 'admin/form_anggaran');
            
        }

        public function simpan_anggaran()
        {
            $ma =  $this->input->post('makag');
            $na =  $this->input->post('namag');
            $uka =  $this->input->post('ukag');
            $da =  $this->input->post('diviag');
            $kodea =  $this->input->post('kodeag');
            $pagua =  $this->input->post('paguag');
            // $ra =  $this->input->post('realisasiag');
                        
            $data2 = array(
                'mak' => $ma,
                'namaAnggaran' => $na,
                'uraianKegiatan' => $uka,
                'divisi' => $da,
                'kode' => $kodea,
                'pagu' => $pagua,
                // 'realisasi' => $ra
                );  

            $this->db->insert('tbl_anggaran',$data2);

        

        $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
        redirect('admin/Master/data_anggaran', 'refresh');

            
        }

        public function ubahAnggaran(){
            $id = $this->input->post('idag');
            $ma =  $this->input->post('makag');
            $na =  $this->input->post('namag');
            $uka =  $this->input->post('ukag');
            $da =  $this->input->post('diviag');
            $kodea =  $this->input->post('kodeag');
            $pagua =  $this->input->post('paguag');
            // $ra =  $this->input->post('realisasiag');
                        
           
            $data2 = array(
                'idAnggaran' => $id,
                'mak' => $ma,
                'namaAnggaran' => $na,
                'uraianKegiatan' => $uka,
                'divisi' => $da,
                'kode' => $kodea,
                'pagu' => $pagua,
                // 'realisasi' => $ra
                );  

            $this->Master_model->updateAnggaran($data2);
            redirect('admin/Master/data_anggaran');
        }
    

        public function hapus_dataAnggaran(){
        $id = $this->input->post('idHapus');
        $this->Master_model->hapus_dataAnggaran($id);
        redirect('admin/Master/data_anggaran');
        }

}

