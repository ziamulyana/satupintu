<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratObat_model extends CI_Model{


      function __construct()
    {
        parent::__construct();
    }


	public function getTemuanObat(){
        $query = $this->db->query("SELECT * FROM db_temuan_obat");
        return $query->result();
    }

	// public function getPasalRs($id_temuan){
	// 	$this->db->select('*');
	// 	$this->db->where('id_temuan', $id_temuan);
	// 	$query = $this->db->get('db_pasal_rs');
	// 	return $query->result();
	// }
}
