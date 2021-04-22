<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor Surat</th>
                  <th>Sarana</th>
                  <th>Tanggal Surat</th>
                  <th>Tanggal Timeline</th>
                  <th>Timeline</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php 
                 if(isset($oke)){
                 foreach ($oke as $row){
                  echo "<tr>";
                  echo "<td>".$row->no_surat."</td>";
                  echo "<td>".$row->sarana."</td>";
                  echo "<td>".$row->tgl_surat."</td>";
                  echo "<td>".$row->tanggal_timeline."</td>";
                  echo "<td>".$row->timeline." Hari Tersisa</td>";
                 }
                 }else{
                  echo "no record found";
                 }

                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>