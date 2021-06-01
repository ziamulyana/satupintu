<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratPerjadin_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
}

    public function getTugas(){
        $this->db->select('tbl_tugas.idTugas, tbl_tugas.idSuratTugas, tbl_surattugas.noSuratTugas');
        $this->db->from('tbl_tugas');
        $this->db->join('tbl_surattugas', 'tbl_tugas.idSuratTugas = tbl_surattugas.idSurat');
        $this->db->group_by('tbl_tugas.idSuratTugas');
        $query = $this->db->get('');
        return $query->result();
    }

    public function getPetugas($id){
        $this->db->select('tbl_tugas.idTugas,tbl_pegawai.nama');
        $this->db->from('tbl_tugas');
        $this->db->join('tbl_pegawai', 'tbl_tugas.idPetugas = tbl_pegawai.idPegawai');
        $this->db->where('tbl_tugas.idSuratTugas', $id);
        $query = $this->db->get('');
        $output = '<option value="">Pilih Petugas</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->idTugas.'">'.$row->nama.'</option>';
     }
     return $output;
    
    
    }

    public function getperjadin()
    {
        $this->db->select('*');
        $this->db->from('tbl_perjadin');
        $this->db->where('tempat_berangkat', $tempatberangkat);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function addSpd($table,$data)
    {
        $insert = $this->db->insert($table,$data);
        return $data;
    }


}
