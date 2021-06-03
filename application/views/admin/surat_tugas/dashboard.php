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
            <a class= "btn btn-primary" href="<?php echo base_url('admin/surat_tugas/surat_tugas/tambah_surat')?>">
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
                        <th class="dt-center">Tgl Surat Tugas</th>
                        <th class="dt-center">Maksud & Tujuan</th>
                        <th class="dt-center">Kota</th>
                        <th class="dt-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(isset($surattugas)){
                       foreach ($surattugas as $row){

                        echo "<tr>";
                        echo "<td class='dt-center'>".$row->noSuratTugas."</td>";
                        echo "<td class='dt-center'>".$row->tglSurat."</td>";
                        echo "<td class='dt-center'>".$row->maksud."</td>";
                        echo "<td class='dt-center'>".$row->kota."</td>";
                        echo "<td class='dt-center'>"?>
                        <a href="#" class="btn btn-success btn-sm" data-tooltip="tooltip" title="Edit" id="editSur"
                        data-idsurat="<?=$row->idSurat ?>" data-nosurat="<?=$row->noSuratTugas ?>"  data-tglsurat="<?=$row->tglSurat ?>" data-maksud="<?=$row->maksud ?>" data-kota="<?=$row->kota ?>" data-toggle="modal" data-target="#editSurat">
                          <i class="fa fa-edit"></i></a>

                         <a href="#" data-tooltip="tooltip" title="Hapus" class="btn btn-danger btn-sm" id="hapusSur" data-id="<?$row->idSurat ?>" data-toggle="modal" data-target="#hapusSurat">
                          <i class="fa fa-trash"></i></a>

                         <a href="#" class="btn btn-info btn-sm" data-tooltip="tooltip" title="printSurat" id="printSurat" data-toggle="modal" data-target="#printSurat" data-id="<?=$row->idSurat ?>">
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
<div id= "editSurat" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="icon fa fa-edit"></i>  Edit Surat Tugas</h4>
			</div>
			<div class="modal-body" id=editData >
				<form action="<?= base_url('admin/surat_tugas/surat_tugas/ubah_surat')?>" method="post">
					<div class="box box-success">
						<div class="box-body">

							<div class="form-group">
								<input type="hidden" class="form-control" name="idSur" id="idSur" >
							</div>

							<div class="form-group">
								<label for="noEdit">No. Surat Tugas</label> <small class="text-danger">*</small>
								<input type="text" class="form-control" name="noSurat" id="noSurat" required >
							</div>

							<div class="form-group">
								<label for="noEdit">Tanggal Surat </label> <small class="text-danger">*</small>
								<input type="text" class="form-control" name="tglSurat" id="tglSurat" required >
							</div>

							<div class="form-group">
								<label for="noEdit">Maksud</label> <small class="text-danger">*</small>
								<input type="text" class="form-control" name="maksud" id="maksud" required >
							</div>

							<div class="form-group">
								<label for="noEdit">Kota</label> <small class="text-danger">*</small>
								<input type="text" class="form-control" name="kota" id="kota" required >
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
<script type="text/javascript">
	$(document).on("click","#editSuratTugas",function(){
		var idSur = $(this).data('id');
		var noSurat = $(this).data('nosurat');
		var tglSurat = $(this).data('tglsurat');
		var maksud = $(this).data('maksud');
		var kota = $(this).data('kota');

		$("#editData #id").val(idSur);
		$("#editData #nosurat").val(noSurat);
		$("#editData #tglsurat").val(tglSurat);
		$("#editData #maksud").val(maksud);
		$("#editData #kota").val(kota);
	});
  </script>

 <!-- Hapus Pegawai -->
 <div id= "hapusPegawai" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="icon fa fa-ban"></i> ALert !</h4>
                </div>
                <div class="modal-body" id=hapusData>
                    <form role="form" method="post" action="<?= base_url('admin/Master/hapus_dataPegawai') ?>">
                        <div class="box-body">
                            <div class="form-group" style="text-align:center">Anda yakin akan menghapus Data Pegawai ini ?</label>
                                <input type="hidden" id="idPg" name="idPg">
                              
                            </div>                        
                        </div><!-- /.box-body -->
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            <button type="submit" class="btn btn-danger" name="delete"><i class="fa fa-check"></i> Hapus</button>
                        </div>
                    </form>             
                        <script src="<?php echo base_url();?>assets/js/jquery-1.10.0.min.js" type="text/javascript"></script>
                        <script type="text/javascript" >
                            $(document).on("click","#hapusPeg",function(){
                                var id = $(this).data('id');
                                $("#hapusData #idPg").val(id);
                            });
                        </script>
                </div>
                
            </div>
        </div>
    </div>