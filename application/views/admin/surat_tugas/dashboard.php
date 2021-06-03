<section class="content-header">
 <h1>
   Surat Tugas
 </h1>
 <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Surat Tugas</a></li>
</ol>
</section>
<!-- Main content -->
<section class="content">

  <div class="box">
    <div class="box-header with-border">
       <h4>Hai <b>Admin..</b> </h4>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
  </div>

<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->

    <div class="box box-primary">
      <div class="box-header with-border">

        <h3 class="box-title">Daftar Surat Tugas</h3>
        <div class="pull-right">
          <ul>
            <a class= "btn btn-primary" href="<?php echo base_url('admin/surat_tugas/form_surattugas')?>">
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
                  <table id="tblsurat" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="dt-center">No Surat Tugas</th>
                        <th class="dt-center">Tgl Surat Tugas</th>
                        <th class="dt-center">Maksud & Tujuan</th>
                        <th class="dt-center">Kota</th>
                        <th class="dt-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(isset($surattugas)){
                       foreach ($surattugas->result() as $row){

                        echo "<tr>";
                        echo "<td class='dt-center'>".$row->noSuratTugas."</td>";
                        echo "<td class='dt-center'>".$row->tglSurat."</td>";
                        echo "<td class='dt-center'>".$row->maksud."</td>";
                        echo "<td class='dt-center'>".$row->kota."</td>";
                        echo "<td class='dt-center'>"?>
                        <a href="#" class="btn btn-success btn-sm" data-tooltip="tooltip" title="Edit" id="editSurat" data-id="<?=$row->idSurat ?>" data-tgl="<?=$row->tglSurat ?>" data-toggle="modal" data-target="#editSurat">
                          <i class="fa fa-edit"></i></a>

                         <a href="" data-tooltip="tooltip" title="Hapus" class="btn btn-danger btn-sm" id="delSurat" data-toggle="modal" data-target="#delSurat" data-id="<?=$row->idSurat ?>">
                          <i class="fa fa-trash"></i></a>

                         <a href="" class="btn btn-info btn-sm" data-tooltip="tooltip" title="printSurat" id="printSurat" data-toggle="modal" data-target="#printSurat" data-id="<?=$row->idSurat ?>">
                          <i class="fa fa-print"></i></a>
                            
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

<!-- Edit Surat Tugas -->
 <div id="editSurat" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ubah Surat Tugas</h4>
      </div>
      
      <div class="modal-body" id="editData">
        <form role="form" method="post" action="<?= site_url('admin/surat_tugas/surat_tugas/updatesurattugas') ?>">
          <div class="box box-success">
            <div class="box-body">
             <div class="form-group">


              <div class="form-group">
                <input type="hidden" class="form-control" name="idSurat" id="idSurat">
              </div>
              
              <div class="form-group">
                <label for="editnosurat">No Surat Tugas</label><span class="wajib"> *</span>
                <input type="text" class="form-control" name="noSurat" id="noSurat" placeholder="No Surat Tugas" required>
              </div> 
            
              <div class="form-group" id="sandbox-container">
                <label for="edittanggal">Tanggal </label><span class="wajib"> *</span>
                <div class="input-group date">
                  <input type="text" class="form-control" name="tglSurat" id="tglSurat" required>
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
              </div>

             </div><!-- /.box-body -->
             <div class="modal-footer">
              <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
              <button type="submit" name="update" class="btn btn-success"><i class="fa fa-check"></i> Update</button>
             </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

        <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-1.10.0.min.js" type="text/javascript">></script>
        <script type="text/javascript">
            $(document).on("click","#editSurat",function(){
              var idSurat = $(this).data('id');
              var noSurat = $(this).data('no');
              var tglSurat = $(this).data('tgl');
              $("editData #idSurat").val(idSurat);
              $("editData #noSurat").val(noSurat);
              $("editData #tglSurat").val(tglsurat);
              });
          </script>



    <!-- Hapus Surat -->
    <div id="delSurat" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times</button>
            <h4 class="modal-title">
              <i class="icon fa fa-ban"></i> Alert !</h4>
          </div>

          <div class="modal-body" id="delSurat">
            <form role="form" method="post" action="<?= site_url('admin/surat_tugas/surat_tugas/hapus_suratTugas') ?>">
              <div class="box-body">
                <div class="form-group" style="text-align:center">Anda yakin akan menghapus?</label>
                  <input type="hidden" id="nosurat_del" name="nosurat_del">
                </div>
              </div>

              <!-- /.box-body -->
              <div class="modal-footer">
                <button type="reset" class="btn btn-default pull-left" data-dismiss="modal">
                  <i class="fa fa-times"></i>Tutup</button>
                <button type="submit" class="btn btn-danger" name="delete">
                  <i class="fa fa-check"></i>Hapus</button>
              </div>
            </form>
              
            <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-1.10.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
              $(document).on("click","#delSurat",function(){
                var nosurat = $(this).data('nosurat');
                $("delsurat #nosurat_del").val(nosurat);
              });
              </script>
          </div>
        </div>
      </div>
    </div>



<div id= "printDakota" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="icon fa fa-ban"></i> ALert !</h4>
      </div>
      <div class="modal-body" id=panelDkt>
        <form role="form" method="post" action="<?= base_url('admin/surat_pj/printDk')?>">
          <div class="box-body">
            <div class="form-group" style="text-align:center">Anda Akan Mencetak Kwitansi Format Dalam Kota</label>
              <input type="hidden" id="idKw" name="idKw">

            </div>                        
          </div><!-- /.box-body -->
          <div class="modal-footer">
            <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
            <button type="submit" class="btn btn-success" name="delete"><i class="fa fa-print"></i> Cetak</button>
          </div>
        </form>             
        <script src="<?php echo base_url();?>assets/js/jquery-1.10.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" >
          $(document).on("click","#printSurat",function(){
            var id = $(this).data('id');
            $("#printSurat #idSurat").val(id);
          });
        </script>
      </div>
      </section>
    </div>
  </div>
</div>
