<!-- Main content -->
<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $this->db->count_all('view_notif'); ?></h3>

              <p>Total Data</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <a href="<?php echo base_url('petugas/tbl_total_c')?>" class="small-box-footer">Lihat Total <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>belum</h3>

              <p>Green Zone</p>
            </div>
            <div class="icon">
              <i class="ion ion-checkmark"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>belum</h3>

              <p>Warning</p>
            </div>
            <div class="icon">
              <i class="ion ion-alert"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> <?php echo $this->db->where('timeline <=',6)->from("view_notif")->count_all_results(); ?></h3>

              <p>Timeline</p>
            </div>
            <div class="icon">
              <i class="ion ion-alert-circled"></i>
            </div>
            <a href="<?php echo base_url('petugas/tbl_timeline_c')?>" class="small-box-footer">Lihat Timeline <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div> 