<section class="content-header">
    <h1>
        <div class="icon">
            <i class="glyphicon glyphicon-list-alt text-red"></i> Laporan Feedback CAPA Sarana
            <!-- <small>semua berawal dari sini</small> -->
        </div>        
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?=site_url('Admin/loglab') ?>"><i class="fa fa-user"></i> Feedback</a></li>

</section>

<section class="content">

  <div class="box">
        <div class="box-header with-border">
           <h4>Hai <b>Petugas!!</b> </h4>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
           <h5> Berikut laporan feedback CAPA Sarana. Terdapat <b><?php  echo $jumlah_confirm ; ?> </b> Feedback yang butuh verifikasi closed </h5>
        </div><!-- /.box-body -->
        <!-- <div class="box-footer">
            Footer
        </div>/.box-footer -->
    </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl" data-sort-name="closed" class="table table-bordered table-striped"  data-sort-order="asc">
                <thead>
                <tr>
                  <th>Nomor Surat Feedback</th>
                  <th>Tgl Feedback </th>
                  <th>Isi Feedback</th>
                  <th>File</th>
                  <th>Closed</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php     
                 if(isset($list_feedback)){
                 foreach ($list_feedback->result() as $row){
                  echo "<tr>";
                  echo "<td>".$row->noSuratFeedback."</td>";
                  echo "<td>".$row->tglFeedback."</td>";
                  echo "<td>".$row->isiFeedback."</td>";
                  echo "<td>".$row->file_feedback."</td>";
                 if($row->closed == -1) { ?>
                   <td> 

                   <a href="#" class="btn btn-success btn-sm" id="acceptClosed" data-tooltip="tooltip" title="Accept" data-id = "<?=$row->id ?>" data-closed = "1" data-toggle="modal" data-target="#accept"  ><i class="fa fa-check"></i></a> 

                  <a href="#" class="btn btn-danger btn-sm" id="rejectClosed" data-tooltip="tooltip" title="Reject" data-id = "<?=$row->id ?>" data-closed = "0"  data-toggle="modal" data-target="#reject" ><i class="fa fa-close "></i></a>

                 </td>

                  <?php
                }else{
                  echo "<td>".$row->closed."</td>";
                }
                  echo "</td>";
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

      <!-- accept -->
     <div id= "accept" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="icon fa fa-ban"></i>  ALert !</h4>
                </div>
                <div class="modal-body" id="acceptData">
                    <form action="<?=base_url('petugas/feedback/updateClosed') ?>" method="post">
                        <div class="box-body">
                            <div class="form-group" style="text-align:center">
                            Ini akan mengubah status feedback menjadi <b>closed</b>, apakah anda yakin ?</label>
                                <input type="hidden" class="form-control" name="id" id="id"> 
                                <input type="hidden" class="form-control" name="editclosed" id="editclosed" value="nonaktif"> 
                               
                            </div>                                                  
                        </div><!-- /.box-body -->                        
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            <button type="submit" name="hapus" class="btn btn-success"><i class="fa fa-check"></i> Accept</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" >
        $(document).on("click","#acceptClosed",function(){
            var id = $(this).data('id');
            var closed = $(this).data('closed');

            $("#acceptData #id").val(id);
            $("#acceptData #editclosed").val(closed);
        });
    </script>
<!-- /. Hapus Modal -->

       <div id= "reject" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="icon fa fa-ban"></i>  ALert !</h4>
                </div>
                <div class="modal-body" id="rejectData">
                    <form action="<?=base_url('petugas/feedback/updateClosed') ?>" method="post">
                        <div class="box-body">
                            <div class="form-group" style="text-align:center">
                            Ini akan mengubah status feedback menjadi <b>tidak closed</b>, apakah anda yakin ?</label>
                                <input type="hidden" class="form-control" name="id" id="id"> 
                                <input type="hidden" class="form-control" name="editclosed" id="editclosed" value="nonaktif"> 
                                
                            </div>                                                  
                        </div><!-- /.box-body -->                        
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            <button type="submit" name="hapus" class="btn btn-danger"><i class="fa fa-close"></i> Reject</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" >
        $(document).on("click","#rejectClosed",function(){
            var id = $(this).data('id');
            var closed = $(this).data('closed');

            $("#rejectData #id").val(id);
            $("#rejectData #editclosed").val(closed);
        });
    </script>
<!-- /. Hapus Modal -->
    </section>
