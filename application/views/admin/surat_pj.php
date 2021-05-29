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
                          echo "<td class='dt-center'>"?>                             
                          <a href="" class="btn btn-success btn-sm" data-tooltip="tooltip" title="Edit"  id="editKwin" data-id = "<?=$row->idKwitansi ?>" data-tgl="<?=$row->tglKwitansi ?>"  data-toggle="modal" data-target="#editKw" 
                            ><i class="fa fa-edit"></i></a>

                            <a href="" class="btn btn-info btn-sm" data-tooltip="tooltip" title="Format DK" id="printDk" data-id = "<?=$row->idKwitansi ?>" data-toggle="modal" data-target="#printDakota"><i class="fa fa-print"></i></a>

                            <a href="" class="btn btn-warning btn-sm" data-tooltip="tooltip" title="Format DK" id="printLk" data-id = "<?=$row->idKwitansi ?>" data-toggle="modal" data-target="#printLukota"><i class="fa fa-print"></i></a>

                            <?php if($row->fileKwitansi !=0){ ?>
                              <a href="../assets/uploads/files/kwitansi/kwitansi-<?php echo $row ->idKwitansi ?>.pdf " data-tooltip="tooltip" title="Lihat" class="btn btn-primary btn-sm" target="_blank" ><i class="fa fa-eye"></i></a>

                            <?php  } else{
                              ?>
                              <a href="#" data-tooltip="tooltip" title="Lihat" class="btn btn-primary btn-sm" disabled><i class="fa fa-eye"></i></a>
                            <?php } ?>



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
<div id= "editKw" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="icon fa fa-edit"></i>  Form Edit Kwitansi</h4>
      </div>
      <div class="modal-body" id=editData >
        <form action="<?= base_url('admin/surat_pj/ubahPj')?>" method="post" enctype="multipart/form-data">
          <div class="box box-success">
            <div class="box-body">
             <div class="form-group">


              <div class="form-group">
                <input type="hidden" class="form-control" name="idKw" id="idKw" >
              </div>

              <!-- tanggal surat -->
              <div class="form-group ">
               <label for="tglEdit"><i class="fa fa-calendar"></i> Tanggal Surat Peringatan</label> <small class="text-danger">*</small>
               <input class="form-control" type="date" name="tglEdit" id="tglEdit" required >
             </div>

             <div class="mb-3">
              <label for="fileEdit">Soft File Kwitansi</label> <small class="text-danger">*</small>
              <input class="form-control" type="file" id="formFile" name="fileEdit" id="fileEdit" required>
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
  $(document).on("click","#editKwin",function(){
    var idKwin = $(this).data('id');
    var tglKwin = $(this).data('tgl');

    $("#editData #idKw").val(idKwin);
    $("#editData #tglEdit").val(tglKwin);
  });
</script>
<!-- /. Edit Modal -->

<!-- Print DK -->
<div id= "printDakota" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="icon fa fa-ban"></i> ALert !</h4>
      </div>
      <div class="modal-body" id="printDkt">
        <form role="form" method="post" action="<?= base_url('admin/surat_pj/printDk') ?>">
          <div class="box-body">
            <div class="form-group" style="text-align:center">Cetak Surat Kwitansi Format Dalam Kota </label>
              <input type="hidden" id="idKwitansi" name="idKwitansi">

            </div>                        
          </div><!-- /.box-body -->
          <div class="modal-footer">
            <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
            <button type="submit" class="btn btn-submit" name="delete"><i class="fa fa-check"></i> Ok</button>
          </div>
        </form>             
        <script src="<?php echo base_url();?>assets/js/jquery-1.10.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" >
          $(document).on("click","#printDk",function(){
            var idDk = $(this).data('id');
            $("#printDkt #idKwitansi").val(idDk);
          });
        </script>
      </div>

    </div>
  </div>
</div>
<!-- Print Dk -->


<!-- Print Lk -->
<div id= "printLukota" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="icon fa fa-ban"></i> ALert !</h4>
      </div>
      <div class="modal-body" id="printLkt">
        <form role="form" method="post" action="<?= base_url('admin/surat_pj/printLk') ?>">
          <div class="box-body">
            <div class="form-group" style="text-align:center">Cetak Surat Kwitansi Format Luar Kota </label>
              <input type="hidden" id="idKwitansi" name="idKwitansi">

            </div>                        
          </div><!-- /.box-body -->
          <div class="modal-footer">
            <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
            <button type="submit" class="btn btn-submit" name="delete"><i class="fa fa-check"></i> Ok</button>
          </div>
        </form>             
        <script src="<?php echo base_url();?>assets/js/jquery-1.10.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" >
          $(document).on("click","#printLk",function(){
            var id = $(this).data('id');
            $("#printLkt #idKwitansi").val(id);
          });
        </script>
      </div>

    </div>
  </div>
</div>
<!-- Print Lk -->

