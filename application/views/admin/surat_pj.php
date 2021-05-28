<section class="content-header">
 <h1>
   Surat Pertanggung Jawaban 
 </h1>
 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Surat Pertanggung Jawaban</a></li>
</ol>
</section>
<!-- Main content -->
<section class="content">

  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->

    <div class="box box-primary">
      <div class="box-header with-border">

        <h3 class="box-title">Daftar Surat Pertanggung Jawaban </h3>
          <div class="pull-right">
            <ul>
              <a class= "btn btn-primary" href="<?php echo base_url('admin/form_pj')?>">
                  <i class="fa fa-plus"></i>&nbsp; Tambah Data 
                </a> </span>
            </ul>
                  </div>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">

                <!-- /.box-header -->
                <div class="box-body">
                  <table id="tbl" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="dt-center">No Surat Tugas</th>
                        <th class="dt-center">Petugas</th>
                         <th class="dt-center">Tgl Kwitansi</th>
                          <th class="dt-center">File Kwitansi</th>
                        <th class="dt-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php     
                      if(isset($kwitansi)){
                       foreach ($kwitansi->result() as $row){
                        
                        echo "<tr>";
                        echo "<td class='dt-center'>".$row->noSuratTugas."</td>";      
                        echo "<td class='dt-center'>".$row->nama."</td>";
                        echo "<td class='dt-center'>".$row->tglKwitansi."</td>";
                         echo "<td class='dt-center'>".$row->fileKwitansi."</td>";
                        echo "<td class='dt-center'>"?>                             
                           
                            </td>
                            
                            <?php 
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
    <style>
      th.dt-center, td.dt-center { text-align: center; }
    </style>

  </div>
  <!-- /.box-header -->
  <!-- form start -->


</div>
</div>

</div>
<!-- /.box -->
</div>

</div>
<!-- /.row -->

<!-- Edit Modal -->
    <div id= "editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="icon fa fa-edit"></i>  Form Edit Data Surat Peringatan</h4>
                </div>
                <div class="modal-body" id=#editData >
                    <form action="<?= base_url('petugas/surat_peringatan/c_surat_peringatan/ubah_suratPeringatan')?>" method="post">
                    <div class="box box-success">
                        <div class="box-body">
                           <div class="form-group">
                                
                                <input type="hidden" class="form-control" name="id" id="id" >
                            </div>

                            <div class="form-group">
                                <label for="tglEdit">Tanggal Surat Peringatan</label> <small class="text-danger">*</small>
                                <input type="text" class="form-control" name="tglEdit" id="tglEdit" placeholder="Tanggal Surat Peringatan" required>
                            </div>
                          <div class="form-group">
                                <label for="noEdit">No. Surat Peringatan</label> <small class="text-danger">*</small>
                                <input type="text" class="form-control" name="noEdit" id="noEdit" placeholder="Tanggal Surat Peringatan" required>
                            </div>

                            <div class="form-group">
                                <label for="fileEdit">File Peringatan</label> <small class="text-danger">*</small>
                                <input type="text" class="form-control" name="fileEdit" id="fileEdit" placeholder="" required>
                            </div>
                                   
                        </div><!-- /.box-body -->                        
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            <button type="submit" name="update" class="btn btn-success"><i class="fa fa-edit"></i> Update</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-1.10.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" >
        $(document).on("click","#editDataPeringatan",function(){
            var id = $(this).data('id');
            var tglEdit = $(this).data('tglPeringatan');
            var noEdit = $(this).data('noSuratPeringatan');
            var fileEdit = $(this).data('filePeringatan');

      
            $("#editData #id").val(id);
            $("#editData #tglEdit").val(tglEdit);
            $("#editData #noEdit").val(noEdit);
            $("#editData #fileEdit").val(fileEdit);
          
        });
    </script>
<!-- /. Edit Modal -->
</section>