 <section class="content-header">
   <h1>
     Menu Surat Tindak Lanjut
   </h1>
   <ol class="breadcrumb">
     <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
     <li><a href="#">Tindak Lanjut</a></li>
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

           <h3 class="box-title"><i class="fa fa-file"></i> Buat Surat Tindak Lanjut
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
                 <a href="<?php echo base_url('petugas/surat_peringatan/c_surat_peringatan/sub_obat') ?>" class="small-box-footer">
                   Buat Surat Tindak Lanjut <i class="fa fa-arrow-circle-right"></i>
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
                 <a href="<?php echo base_url('petugas/surat_peringatan/surat_pangan') ?>" class="small-box-footer">
                   Buat Surat Tindak Lanjut<i class="fa fa-arrow-circle-right"></i>
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
                 <a href="<?php echo base_url('petugas/surat_peringatan/surat_kosmetik') ?>" class="small-box-footer">
                   Buat Surat Tindak Lanjut<i class="fa fa-arrow-circle-right"></i>
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
                 <a href="<?php echo base_url('petugas/surat_peringatan/surat_kemasan') ?>" class="small-box-footer">
                   Buat Surat Tindak Lanjut <i class="fa fa-arrow-circle-right"></i>
                 </a>
               </div>
             </div>
           </div>
         </div>
       </div>

       <div class="box box-primary">
         <div class="box-header with-border">

           <h3 class="box-title"><i class="fa fa-list"></i> Daftar Surat Tindak Lanjut
           </h3>

           <br>

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
                         <th class="dt-center">Nomor Surat Peringatan</th>
                         <th class="dt-center">Tanggal Surat</th>
                         <th class="dt-center">Nama Sarana</th>
                         <th class="dt-center">Jenis TL</th>
                         <th class="dt-center">Aksi</th>

                       </tr>
                     </thead>
                     <tbody>
                       <?php


                        if (isset($list_peringatan)) {
                          foreach ($list_peringatan->result() as $row) {

                            echo "<tr>";
                            echo "<td class='dt-center'>" . $row->noSuratPeringatan . "</td>";
                            echo "<td class='dt-center'>" . $row->tglSuratPeringatan . "</td>";
                            echo "<td class='dt-center'>" . $row->namaSarana . "</td>";
                            echo "<td class='dt-center'>" . $row->jenisTl . "</td>";
                            echo "<td class='dt-center'>" ?>
                           <a href="#" class="btn btn-success btn-sm" data-tooltip="tooltip" title="Edit" id="editPer" data-id="<?= $row->idPeringatan ?>" data-tgl="<?= $row->tglSuratPeringatan ?>" data-nomor="<?= $row->noSuratPeringatan ?>" data-toggle="modal" data-target="#editPeringatan"><i class="fa fa-edit"></i></a>

                           <a href="#" data-tooltip="tooltip" title="Hapus" class="btn btn-danger btn-sm" id="hapusPer" data-id="<?= $row->idPeringatan ?>" data-toggle="modal" data-target="#hapusPeringatan"><i class="fa fa-trash"></i></a>

                           <!-- <?php if ($row->filePeringatan != 0) { ?>
                             <a href="../../assets/uploads/files/peringatan/suratPeringatan-<?php echo $row->idPeringatan ?>.pdf " data-tooltip="tooltip" title="Lihat" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>

                           <?php  } else {
                            ?>
                             <a href="#" data-tooltip="tooltip" title="Lihat" class="btn btn-primary btn-sm" disabled><i class="fa fa-eye"></i></a>
                           <?php } ?> -->


                           </td>

                       <?php
                          }
                        } else {
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
         th.dt-center,
         td.dt-center {
           text-align: center;
         }
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
   <div id="editPeringatan" class="modal fade" role="dialog">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title"><i class="icon fa fa-edit"></i> Edit Data Surat Peringatan</h4>
         </div>
         <div class="modal-body" id=editData>
           <form action="<?= base_url('petugas/surat_peringatan/c_surat_peringatan/ubah_suratPeringatan') ?>" method="post" enctype="multipart/form-data">
             <div class="box box-success">
               <div class="box-body">

                 <div class="form-group">
                   <input type="hidden" class="form-control" name="idPeringatan" id="idPeringatan">
                 </div>

                 <div class="form-group">
                   <label for="noEdit">No. Surat Peringatan</label> <small class="text-danger">*</small>
                   <input type="text" class="form-control" name="noEdit" id="noEdit" required>
                 </div>

                 <!-- tanggal surat -->
                 <div class="form-group ">
                   <label for="tglEdit"><i class="fa fa-calendar"></i> Tanggal Surat Peringatan</label> <small class="text-danger">*</small>
                   <input class="form-control" type="date" name="tglEdit" id="tglEdit" required>

                 </div>


                 <!-- <div class="mb-3">
                   <label for="fileEdit">Soft File Surat Peringatan</label> <small class="text-danger">*</small>
                   <input class="form-control" type="file" id="formFile" name="fileEdit" id="fileEdit" required>
                 </div> -->

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
   <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-1.10.0.min.js" type="text/javascript"></script>
   <script type="text/javascript">
     $(document).on("click", "#editPer", function() {
       var idPer = $(this).data('id');
       var tglPer = $(this).data('tgl');
       var noPer = $(this).data('nomor');

       $("#editData #idPeringatan").val(idPer);
       $("#editData #noEdit").val(noPer);
       $("#editData #tglEdit").val(tglPer);


     });
   </script>
   <!-- /. Edit Peringatan -->

   <!-- Hapus Peringatan -->
   <div id="hapusPeringatan" class="modal fade" role="dialog">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title"><i class="icon fa fa-ban"></i> ALert !</h4>
         </div>
         <div class="modal-body" id="hapusData">
           <form role="form" method="post" action="<?= base_url('petugas/surat_peringatan/c_surat_peringatan/hapus_suratPeringatan') ?>">
             <div class="box-body">
               <div class="form-group" style="text-align:center">Anda yakin akan menghapus Surat Peringatan ini ?</label>
                 <input type="hidden" id="idPeringatan" name="idPeringatan">

               </div>
             </div><!-- /.box-body -->
             <div class="modal-footer">
               <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
               <button type="submit" class="btn btn-danger" name="delete"><i class="fa fa-check"></i> Hapus</button>
             </div>
           </form>
           <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.0.min.js" type="text/javascript"></script>
           <script type="text/javascript">
             $(document).on("click", "#hapusPer", function() {
               var id = $(this).data('id');
               $("#hapusData #idPeringatan").val(id);
             });
           </script>
         </div>

       </div>
     </div>
   </div>
   <!-- Hapus Peringatan -->
 </section>