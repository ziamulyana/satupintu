 <section class="content-header">
 <h1>
   Menu Surat Peringatan
 </h1>
 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Peringatan</a></li>
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

          <h3 class="box-title">Buat Surat Peringatan
          </h3>

        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box-body">
         <div class="row">
          <!-- obat -->
          <div class="col-lg-3 col-xs-5">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>1</h3>

                <h2><b>Obat</b></h2>
              </div>
              <div class="icon">
                <i class="fa fa-plus-square"></i>
              </div>
              <a href="<?php echo base_url('petugas/surat_peringatan/c_surat_peringatan/sub_obat')?>" class="small-box-footer">
                Buat Surat Peringatan <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <!-- pangan -->
          <div class="col-lg-3 col-xs-5">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>2</h3>

                <h2><b>Pangan</b></h2>
              </div>
              <div class="icon">
                <i class="fa fa-magic"></i>
              </div>
              <a href="<?php echo base_url('petugas/surat_peringatan/surat_pangan')?>" class="small-box-footer">
                Buat Surat Peringatan <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          
          <!-- kosmetik -->
          <div class="col-lg-3 col-xs-5">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>3</h3>

                <h2><b>Kosmetik</b></h2>
              </div>
              <div class="icon">
                <i class="fa fa-briefcase"></i>
              </div>
              <a href="<?php echo base_url('petugas/surat_peringatan/surat_kosmetik')?>" class="small-box-footer">
                Buat Surat Peringatan <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <!-- kemasan pangan -->
          <div class="col-lg-3 col-xs-5">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3>4</h3>

                <h2><b>Kem. Pangan</b></h2>
              </div>
              <div class="icon">
                <i class="fa fa-building"></i>
              </div>
              <a href="<?php echo base_url('petugas/surat_peringatan/surat_kemasan')?>" class="small-box-footer">
                Buat Surat Peringatan <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="box box-primary">
      <div class="box-header with-border">

        <h3 class="box-title">Daftar Surat Peringatan
        </h3>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">

                <!-- /.box-header -->
                <div class="box-body">
                  <table id="tbl" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="dt-center">Nomor Surat Peringatan</th>
                        <th class="dt-center">Tanggal Surat</th>
                        <th class="dt-center">Soft File</th>
                        <th class="dt-center">Edit</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php     
                      if(isset($list_peringatan)){
                       foreach ($list_peringatan->result() as $row){
                        
                        echo "<tr>";
                        echo "<td class='dt-center'>".$row->noSuratPeringatan."</td>";      
                        echo "<td class='dt-center'>".$row->tglSuratPeringatan."</td>";
                        echo "<td class='dt-center'>".$row->filePeringatan."</td>";
                        echo "<td class='dt-center'>"?>                             
                            <a href="#" class="btn btn-success btn-sm" data-tooltip="tooltip" title="Edit"  id="editDataPeringatan"
                            data-id = "<?= $row->id ?>" data-tglPeringatan="<?= $row->tglSuratPeringatan ?>" data-noSuratPeringatan="<?=  $row->noSuratPeringatan ?>" data-filePeringatan ="<?=  $row->filePeringatan ?>" data-toggle="modal" data-target="#editModal" ><i class="fa fa-edit"></i></a>

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


