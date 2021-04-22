<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tbl_timeline_model extends CI_Model
{
  private $_table   = 'view_notif';
  
  public $no_surat;
  public $sarana;
  public $tgl_surat;
  public $tanggal_timeline;
  public $timeline;

  function __construct()
  {
      parent::__construct();
  }

  public function getAll()
    { 
      return $this->db->get($this->_table)->result();
    }
    

}
