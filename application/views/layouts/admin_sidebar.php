<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/uploads/images/foto_profil/1526456245974.png'); ?>" class="img-circle">
      </div>
      <div class="pull-left info">
        <p></p>
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
          <li class="treeview" style="height: auto;">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Surat Tugas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="<?php echo base_url('admin/surat_tugas/surat_tugas')?>"><i class="fa fa-circle-o"></i> Buat Surat Tugas</a></li>
            <li class="treeview" style="height: auto;">
              <a href="#"><i class="fa fa-circle-o"></i> Luar Kota
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="<?php echo base_url('admin/surat_tugaslukota/surat_perjadin')?>"><i class="fa fa-circle-o"></i> Surat Perjalanan Dinas</a></li>
            </li>
          </ul>
            <li class="active" style="height: auto;">
              <a href="#"><i class="fa fa-circle-o"></i> Dalam Kota
                <span class="pull-right-container">
                  </i>
                </span>
              </a>
            </li>
          </ul>
        </li>

         <li class="active"><a href="<?php echo base_url('admin/surat_tugasdakota/surat_pjdakota')?>"><i class="fa fa-money"></i> <span>Pertanggung Jawaban</span></a></li>

        <li class="active"><a href="<?php echo base_url('admin/Feedback')?>"><i class="fa fa-dashboard"></i> <span>Feedback CAPA</span></a></li>

    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
