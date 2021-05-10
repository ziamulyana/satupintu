<section class="content-header">
<h1 small class="label label-primary">
    Welcome
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Petugas</a></li>
    <li><a href="#">Total</a></li>
  </ol>
</section>
<section class="content">
<div class="row">
<!-- BAR CHART -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><b>Grafik Capa</b></h3>
    <div class="box-body">
      

      <div class="box-body">
        <div class="chart">
          <canvas id="barChart" style="height:230px"></canvas>
        </div>
        <br>
        <div class="center">
          <small class="label label-danger"></i> TIMELINE</small>
          <small class="label label-warning"></i> WARNING</small>
          <small class="label label-success"></i> NEW CAPA</small>
        </div>
      </div>
      <div class="chart1">
        <canvas id="areaChart"></canvas>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </div>
  <!-- /.col (RIGHT) -->
</div>
<!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
       
          <div class="box box-primary collapsed-box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Tabel CAPA</h3>

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
                  <th class="dt-center">Nomor Surat</th>
                  <th class="dt-center">Sarana</th>
                  <th class="dt-center">Tanggal Surat</th>
                  <th class="dt-center">Tanggal Timeline</th>
                  <th class="dt-center">Timeline</th>
                  <th class="dt-center">Status</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php     
                 if(isset($total)){
                 foreach ($total->result() as $row){
                  if($row->timeline <= 3) {
                    $status='<small class="label label-danger"><i class="fa fa-exclamation-triangle"></i> TIMELINE</small>';
                } else if($row->timeline <= 7) {
                    $status='<small class="label label-warning"><i class="fa fa-clock-o"></i>&nbsp WARNING</small>';
                } else {
                    $status='<small class="label label-success"><i class="fa fa-check-circle"></i>&nbsp NEW CAPA</small>';
                }
                  echo "<tr>";
                  echo "<td class='dt-center'>".$row->no_surat."</td>";      
                  echo "<td class='dt-center'>".$row->sarana."</td>";
                  echo "<td class='dt-center'>".$row->tgl_surat."</td>";
                  echo "<td class='dt-center'>".$row->tanggal_timeline."</td>";
                  echo "<td class='dt-center'>".$row->timeline." Hari Tersisa</td>";
                  echo "<td class='dt-center'>".$status."</td>";
                 }
                 }else{
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
    </section>
    <!-- /.content -->
  </div>
  <style>
    th.dt-center, td.dt-center { text-align: center; }
  </style>
</section>
<style>
  .chart1{
    height:0px;
  }
  .center {
  margin: auto;
  width: 30%;
}
</style>
