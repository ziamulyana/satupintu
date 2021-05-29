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


}
