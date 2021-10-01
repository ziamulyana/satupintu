<section class="content">
  <div class="row">
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4>Hi, Admin. Selamat Datang di E-SatuPintu!</h4>
      Elektronik Surat Tugas.
    </div>
    <div class="row">
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $this->db->where('timeline >', 7)->where('status =', 0)->from("view_admin")->count_all_results(); ?></h3>

            <p>AKTIF</p>
          </div>
          <div class="icon">
            <i class="small fa fa-check-square-o"  style="font-size:70px;"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $this->db->where('timeline >=', 4)->where('timeline <=', 7)->where('status =', 0)->from("view_admin")->count_all_results(); ?></h3>

            <p>TENGGANG</p>
          </div>
          <div class="icon">
            <i class="fa  fa-clock-o" style="font-size:70px;"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php echo $this->db->where('timeline <=', 3)->where('status =', 0)->from("view_admin")->count_all_results(); ?></h3>

            <p>EXPIRED</p>
          </div>
          <div class="icon">
            <i class="fa fa-exclamation-circle" style="font-size:70px;"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    
    <!-- /.row -->
    <div class="row">
      <div class="col-xs-12">

        <div class="box box-primary collapsed-box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Feedback CAPA</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <table id="tbl" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="dt-center">No. Surat Peringatan</th>
                  <th class="dt-center">Nama Sarana</th>
                  <th class="dt-center">Tanggal Surat Peringatan</th>
                  <th class="dt-center">Timeline</th>
                  <th class="dt-center">Status</th>

                </tr>
              </thead>
              <tbody>
                <?php
                if (isset($total)) {
                  foreach ($total->result() as $row) {
                    if ($row->timeline <= 3) {
                      $status = '<small class="label label-danger"><i class="fa fa-exclamation-triangle"></i> EXPIRED</small>';
                    } else if ($row->timeline <= 7) {
                      $status = '<small class="label label-warning"><i class="fa fa-clock-o"></i>&nbsp TENGGANG</small>';
                    } else {
                      $status = '<small class="label label-success"><i class="fa fa-check-circle"></i>&nbsp AKTIF</small>';
                    }
                    echo "<tr>";
                    echo "<td class='dt-center'>" . $row->noSuratPeringatan . "</td>";
                    echo "<td class='dt-center'>" . $row->namaSarana . "</td>";
                    echo "<td class='dt-center'>" . $row->tglSuratPeringatan . "</td>";
                    echo "<td class='dt-center'>" . $row->timeline . " Hari Tersisa</td>";
                    echo "<td class='dt-center'>" . $status . "</td>";
                  }
                } else {
                  echo "no record found";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- tabel -->
        <div class="row">
      <div class="col-xs-12">

        <div class="box box-primary collapsed-box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Tabel Pemeriksaan </h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Komoditi</th>
      <th scope="col">Jumlah Pemeriksaan</th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>PBF</td>
      <td><?php  echo $pbf; ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Apotek</td>
      <td><?php  echo $apotek; ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Toko Obat</td>
      <td><?php  echo $toko_obat; ?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Klinik</td>
      <td><?php  echo $klinik; ?></td>
    </tr>

    <tr>
      <th scope="row">5</th>
      <td>Rumah Sakit</td>
      <td><?php  echo $rs; ?></td>
    </tr>

    <tr>
      <th scope="row">6</th>
      <td>IFK</td>
      <td><?php  echo $ifk; ?></td>
    </tr>

        <tr>
      <th scope="row">7</th>
      <td>Produksi OT</td>
      <td><?php  echo $prod_ot; ?></td>
    </tr>

      <tr>
      <th scope="row">8</th>
      <td>Distribusi OT</td>
      <td><?php  echo $dist_ot; ?></td>
    </tr>
  
      <tr>
      <th scope="row">9</th>
      <td>Produksi Kosmetik</td>
      <td><?php  echo $prod_kos; ?></td>
    </tr>

      <tr>
      <th scope="row">10</th>
      <td>Distribusi Kosmetik</td>
      <td><?php  echo $dist_kos; ?></td>
    </tr>

       <tr>
      <th scope="row">11</th>
      <td>Produksi Pangan</td>
      <td><?php  echo $prod_pangan; ?></td>
    </tr>

       <tr>
      <th scope="row">11</th>
      <td>Distribusi Pangan</td>
      <td><?php  echo $dist_pangan; ?></td>
    </tr>

  </tbody>
</table>
          </div>
        </div>

        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
</section>
<!-- /.content -->
</div>
<style>
  th.dt-center,
  td.dt-center {
    text-align: center;
  }
</style>
</section>
<style>
  .chart1 {
    height: 0px;
  }

  .mid {
    margin: auto;
    width: 17%;
  }
</style>