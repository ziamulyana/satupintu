<section class="content-header">
	<h1>
		Data Pegawai 
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Data Pegawai</a></li>
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

					<h3 class="box-title">Data Pegawai </h3>
					<div class="pull-right">
						<ul>
							<a class= "btn btn-primary" href="<?php echo base_url('admin/master/tambah_pegawai')?>">
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
													<th class="dt-center">Nama</th>
													<th class="dt-center">Jabatan</th>
													<th class="dt-center">NIP</th>
													<th class="dt-center">Pangkat</th>
													<th class="dt-center">Golongan</th>
													<th class="dt-center">Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php     
												if(isset($pegawai)){
													foreach ($pegawai as $row){

														echo "<tr>";
														echo "<td class='dt-left'>".$row->nama."</td>";      
														echo "<td class='dt-left'>".$row->jabatan."</td>";
														echo "<td class='dt-left'>".$row->nip."</td>";
														echo "<td class='dt-left'>".$row->pangkat."</td>";
														echo "<td class='dt-left'>".$row->golongan."</td>";
														echo "<td class='dt-left'>"?>                             

														<a href="#" class="btn btn-success btn-sm" data-tooltip="tooltip" title="Edit"  id="editPeg"
														data-id =  "<?=$row->idPegawai ?>" data-nama="<?=$row->nama ?>" data-jabatan="<?= $row->jabatan ?>" data-nip="<?= $row->nip ?>" data-pangkat="<?= $row->pangkat ?>" data-golongan="<?= $row->golongan ?>" data-toggle="modal" data-target="#editPegawai" ><i class="fa fa-edit"></i></a>

														<a href="#" data-tooltip="tooltip" title="Hapus" class="btn btn-danger btn-sm" id="hapusPeg" data-id =  "<?=$row->idPegawai ?>" data-toggle="modal" data-target="#hapusPegawai"><i class="fa fa-trash"></i></a>

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

<!-- Edit Peringatan -->
<div id= "editPegawai" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="icon fa fa-edit"></i>  Edit Data Pegawai</h4>
			</div>
			<div class="modal-body" id=editData >
				<form action="<?= base_url('admin/Master/ubahPegawai')?>" method="post">
					<div class="box box-success">
						<div class="box-body">

							<div class="form-group">
								<input type="hidden" class="form-control" name="idPg" id="idPg" >
							</div>

							<div class="form-group">
								<label for="noEdit">Nama Pegawai</label> <small class="text-danger">*</small>
								<input type="text" class="form-control" name="nama" id="nama" required >
							</div>

							<div class="form-group">
								<label for="noEdit">Jabatan</label> <small class="text-danger">*</small>
								<input type="text" class="form-control" name="jabatan" id="jabatan" required >
							</div>

							<div class="form-group">
								<label for="noEdit">NIP</label> <small class="text-danger">*</small>
								<input type="text" class="form-control" name="nip" id="nip" required >
							</div>

							<div class="form-group">
								<label for="noEdit">Pangkat</label> <small class="text-danger">*</small>
								<input type="text" class="form-control" name="pangkat" id="pangkat" required >
							</div>

							<div class="form-group">
								<label for="noEdit">Golongan</label> <small class="text-danger">*</small>
								<input type="text" class="form-control" name="golongan" id="golongan" required >
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
	$(document).on("click","#editPeg",function(){
		var idPeg = $(this).data('id');
		var namaPeg = $(this).data('nama');
		var jabatanPeg = $(this).data('jabatan');
		var nipPeg = $(this).data('nip');
		var pangkatPeg = $(this).data('pangkat');
		var golPeg = $(this).data('golongan');

		$("#editData #idPg").val(idPeg);
		$("#editData #nama").val(namaPeg);
		$("#editData #jabatan").val(jabatanPeg);
		$("#editData #nip").val(nipPeg);
		$("#editData #pangkat").val(pangkatPeg);
		$("#editData #golongan").val(golPeg);

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