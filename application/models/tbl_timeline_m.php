<?php

defined('BASEPATH') or exit('No direct script access allowed');

class tbl_timeline_m extends CI_Model
{

  function __construct()
  {
      parent::__construct();
  }

  public function tampil_timeline()
    { 
      
      $this->db->select('*');
      $this->db->from('view_notif');
      $this->db->where('timeline <=',3);
      $query = $this->db->get();
  
      return $query;
      
    }
    public function tampil_total()
    { 
      
      $this->db->select('*');
      $this->db->from('view_timeline');
      $this->db->where('closed =',0);
      $query = $this->db->get();
  
      return $query;
      
    }
    public function tampil_total_admin()
    { 
      
      $this->db->select('*');
      $this->db->from('view_admin');
      $this->db->where('status =',0);
      $query = $this->db->get();
  
      return $query;
      
    }
  
  }
