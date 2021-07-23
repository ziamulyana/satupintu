<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/uploads/images/foto_profil/petugas.png'); ?>" class="img-circle">
      </div>
      <div class="pull-left info">
        <p>Petugas</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="<?=base_url()?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
       <li class="active"><a href="<?php echo base_url('petugas/lhk/list_lhk_c')?>"><i class="fa fa-book"></i> <span>LHK</span></a></li>

   
      <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa fa-share"></i> <span>Tindak Lanjut</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="<?=base_url('petugas/surat_peringatan/c_surat_peringatan')?>"><i class="fa fa-circle-o"></i>Buat Tindak Lanjut</a></li>
          <li><a href="<?=base_url('petugas/surat_capa') ?>"><i class="fa fa-circle-o"></i>Buat Feedback CAPA</a></li>
        </ul>
      </li>

       <!-- sub 5 -->
       <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa fa-history"></i> <span>UMPAN BALIK</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="<?=base_url('petugas/feedback')?>"><i class="fa fa-circle-o"></i>Lihat Feedback</a></li>
          <li><a href="<?=base_url('petugas/umpan_balik')?>"><i class="fa fa-circle-o"></i>Lihat Riwayat CAPA</a></li>
 
        </ul>
      </li>

     <!--  <li class="active"><a href="<?php echo base_url('petugas/eksporData')?>"><i class="fa fa-download"></i> <span>Ekspor Data</span></a></li> -->

    <!--    <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa fa-share"></i> <span>REPORT</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="#"><i class="fa fa-circle-o"></i>CAPA</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Anggaran</a></li>
 
        </ul>
      </li> -->

      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
