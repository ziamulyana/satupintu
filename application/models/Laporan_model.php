<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // Listing Konfigurasi
    public function getLaporanAll() {
        $this->db->select('group_concat(tbl_pegawai.nama) as namaPetugas ,,tbl_surattugas.noSuratTugas,tbl_sarana.namaSarana,tbl_sarana.alamatSarana, tbl_surattugas.tglSurat, tbl_surattugas.tglMulai, tbl_surattugas.tglSelesai, tbl_surattugas.maksud, tbl_sarana.kategoriSarana, tbl_surattl.deskripsiTemuan, tbl_surattl.jenisTl, tbl_peringatan.isiPeringatan, tbl_surattl.statusBalai');
		$this->db->from('tbl_surattugas');
		$this->db->join('tbl_surattl','tbl_surattl.idSuratTugas = tbl_surattugas.idSurat' );
		$this->db->join('tbl_sarana','tbl_surattl.idSarana = tbl_sarana.idSarana' );
        $this->db->join('tbl_peringatan','tbl_peringatan.idTl = tbl_surattl.idTl' , 'left');
        $this->db->join('tbl_tugas','tbl_tugas.noSuratTugas = tbl_surattugas.noSuratTugas' );
        $this->db->join('tbl_pegawai','tbl_pegawai.idPegawai = tbl_tugas.idPetugas' );
        $this->db->group_by('tbl_sarana.namaSarana');
		$query = $this->db->get();
		return $query->result();
    }

    public function getPetugas(){
        $this->db->select('group_concat(tbl_pegawai.nama) as namaPetugas');
		$this->db->from('tbl_surattugas');
		$this->db->join('tbl_tugas','tbl_tugas.noSuratTugas = tbl_surattugas.noSuratTugas' );
		$this->db->join('tbl_pegawai','tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
        $this->db->group_by('tbl_tugas.noSuratTugas');
		$query = $this->db->get();
		return $query->result();
    }

}
