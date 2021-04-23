<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tbl_timeline_m extends CI_Model
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

  public function tampil_timeline()
    { 
      
      $this->db->select('*');
      $this->db->from('view_notif');
      $this->db->where('timeline <=',6);
      $query = $this->db->get();
  
      return $query;
      
    }
  
  }
