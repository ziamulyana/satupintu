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
                        <th class="dt-center">No</th>
                        <th class="dt-center">No Surat Tugas</th>
                        <th class="dt-center">Tgl Surat Tugas</th>
                        <th class="dt-center">
                        Maksud & Tujuan</th>
                        <th class="dt-center">Kota</th>
                        <th class="dt-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;     
                       foreach($rowsurattugas as $data) { ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $data['noSuratTugas'] ?></td>
                          <td><?= date("d F Y", strtotime($data['tglSurat'])); ?></td>
                          <td><?= $data['maksud'] ?></td>
                          <td><?= $data['kota'] ?></td>
                            <td class="text-center" width="100px">
                              <a href="#" class="btn btn-success btn-sm" id="edit_surat" data-tooltip="tooltip" data-toggle="modal" title="Edit" data-target="#editSurat" data-id="<?= $data['idSurat'] ?>" data-surat="<?= $data['noSuratTugas'] ?>" data-tgl="<?=date("d F Y", strtotime($data['tglSurat'])) ?>" data-maksud="<?= $data['maksud'] ?>" data-kota="<?= $data['kota'] ?>">
                              <i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                      <?php } ?>

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

        <form role="form" method="post" action="<?= site_url('admin/surat_tugas/surat_tugas/updatesurattugas') ?>">
        <div class="modal-body" id="ubahSurat">
          <div class="box-body">
            <div class="form-group">
              <label for="editnosurat">No Surat Tugas</label><span class="wajib"> *</span>
              <input type="text" class="form-control" name="editnosurat" id="editnourat" placeholder="No Surat Tugas" required>
            </div> 
            
            <div class="form-group" id="sandbox-container">
              <input type="hidden" name="idsurat" id="idsurat">
              <label for="edittanggal">Tanggal </label><span class="wajib"> *</span>
              <div class="input-group date">
                <input type="text" class="form-control" name="edittanggal" id="edittanggal" required>
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="maksud">Maksud</label><span class="wajib"> *</span>
              <input type="text" class="form-control" name="maksud" id="maksud" placeholder="Maksud" required>
            </div>

            <div class="form-group">
              <label for="kota">Kota</label><span class="wajib"> *</span>
              <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota" required>
            </div>
          </div>
        </div><!-- /.box-body -->
        <div class="modal-footer">
          <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
          <button type="submit" name="update" class="btn btn-success"><i class="fa fa-check"></i> Update</button>
        </div>

        <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-1.10.0.min.js" type="text/javascript">></script>
        
        <script type="text/javascript">
            $(document).on("click","#editSurat",function(){
              var id = $(this).data('id');
              var nosurat = $(this).data('nosurat');
              var tglsurat = $(this).data('tglsurat');
              var maksud = $(this).data('maksud');
              var kota = $(this).data('kota');
              $("ubahsurat #idsurat").val(id);
              $("ubahsurat #editnosurat").val(nosurat);
              $("ubahsurat #edittglsurat").val(tglsurat);
              $("ubahsurat #editmaksud").val(maksud);
              $("ubahsurat #editkota").val(kota);
              });
          </script>
        </div>
      </form>
    </div>
  </div>
  </div>            

</section>


