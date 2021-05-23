<section class="content-header">
  <h1>
    Buat Surat Pertanggung Jawaban Dalam Kota
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Daftar PJ Dalam Kota</a></li>
    <li><a href="#">Surat Pertanggung Jawaban Dalam Kota</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
   <div class="col-md-12">
     <form role="form" action="<?php echo base_url('petugas/surat_peringatan/surat_obat/surat')?>" method="post">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Pembuatan Surat Pertangung Jawaban Dalam Kota</h3>
          <p><span class="wajib">* wajib diisi</span></p>
        </div>

        <div class="col-md-6">
          <hr>
          
          <!-- nomor surat -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Nomor Surat Tugas<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="Nomor Surat Tugas" name="noSurat" id="noSurat" required>
              </div>
            </div>
          </div>

          <!-- nama pegawai -->
          <div class="form-group row">
            <label for="namaPegawai" class="col-sm-4 col-form-label">Nama Pegawai<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="namaPegawai" id="namaPegawai" placeholder="Nama Pegawai" required>
              </div>
            </div>
          </div>

          <!-- jumlah biaya -->
          <div class="form-group row">
            <label for="jumlahBiaya" class="col-sm-4 col-form-label">Jumlah Biaya<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="jumlahBiaya" id="jumlahBiaya" placeholder="Jumlah biaya" required>
              </div>
            </div>
          </div>

          <!-- Nominal terbilang -->
          <div class="form-group row">
            <label for="nominalTerbilang" class="col-sm-6 col-form-label">Terbilang<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="nominalTerbilang" id="nominalTerbilang" placeholder="Terbilang" required>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <hr>

          <!-- Tanggal Kwitansi -->
          <div class="form-group row">
            <label for="example-date-input" class="col-sm-5 col-form-label">Tanggal Kwitansi<span class="wajib"> *</span></label>
            <div class="col-sm-12"> 
              <input class="form-control" type="date" name ="tanggalKwitansi" id="tanggalKwitansi" placeholder="Tanggal" required>
            </div>
          </div>

          <!-- Nomor SPPD -->
          <div class="form-group row">
            <label for="nomorSPPD" class="col-sm-6 col-form-label">Nomor SPPD<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                <input type="text" class="form-control" name="nomorSPPD" id="nomorSPPD" placeholder="nomorSPPD" required>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-12">
              <div class="box box-primary">
      <div class="box-header with-border">

        <h3 class="box-title">Rincian Biaya</h3>
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
                  <table id="tbl" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="dt-center">No</th>
                        <th class="dt-center">Uraian Biaya</th>
                        <th class="dt-center">Jenis Biaya</th>
                        <th class="dt-center">Nominal Biaya</th>
                        <th class="dt-center">Aksi</th>
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

        <div class="box-footer">
         <button type="submit" value="submit" onclick="return chk_date()" class="btn btn-info"><i class="fa fa-print"></i> Save Document</button>
         <button type="reset"  value ="reset" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Reset Form</button>
       </div>
     </form>


   </div>



 </div>
</div>
<style>
  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #ca2e2e;
    border: 1px solid #aaa;
    border-radius: 4px;
    box-sizing: border-box;
    display: inline-block;
    margin-left: 5px;
    margin-top: 5px;
    padding: 0;
    padding-left: 20px;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: bottom;
    white-space: nowrap;
    font-size: 15px;
  }
</style>

<!-- /.row -->
</section>
<!-- /.content -->
