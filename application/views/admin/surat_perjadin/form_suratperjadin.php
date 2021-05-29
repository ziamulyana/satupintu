<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<section class="content-header">
  <h1>
    Buat Surat Perjalanan Dinas Luar Kota
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Surat Perjalanan Dinas Luar Kota</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
   <div class="col-md-12">
     <form role="form" action="<?php echo base_url('admin/surat_perjalanandinas/form')?>" method="post">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Pembuatan Surat Perjalanan Dinas Luar Kota</h3>
          <p><span class="wajib">* wajib diisi</span></p>
       

        <div class="col-md-6">
          <hr>
          
          <!-- nomor surat -->
          <div class="form-group">
              <label>Surat Tugas</label><span class="wajib"> *</span></label>
              <select name="surattugas" id="surattugas" class="form-control input-sm" data-live-search="true" title="Select Category" required>

                <option value="">Pilih Surat Tugas</option>

                <?php
                foreach ($tugas as $tg) {
                  echo "<option value=".$tg->idSuratTugas.">".$tg->noSuratTugas."</option>";
                }
                ?>

              </select>
            </div>

          <!-- nama pegawai -->
          <div class="form-group">
              <label>Nama Petugas</label><span class="wajib"> *</span></label>
              <select name="petugas" id="petugas" class="form-control input-sm" data-live-search="true" title="Pilih Petugas">

                   <option value="">Pilih Petugas</option>
              </select> 
            </div>

          </div>
          <div class="col-md-6">

          <!-- tempat berangkat -->
          <div class="form-group row">
            <label for="tempatBerangkat" class="col-sm-4 col-form-label">Tempat Berangkat<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                <input type="text" class="form-control" name="tempatBerangkat" id="tempatBerangkat" placeholder="Tempat Berangkat" required>
              </div>
            </div>
          </div>

          <!-- tempat tujuan -->
          <div class="form-group row">
            <label for="tempatTujuan" class="col-sm-4 col-form-label">Tempat Tujuan<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                <input type="text" class="form-control" name="tempatTujuan" id="tempatTujuan" placeholder="Tempat Tujuan" required>
              </div>
            </div>
          </div>

          <!-- berangkat dari -->
          <div class="form-group row">
            <label for="berangkatDari" class="col-sm-4 col-form-label">Berangkat Dari<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                <input type="text" class="form-control" name="berangkatDari" id="berangkatDari" placeholder="Berangkat Dari" required>
              </div>
            </div>
          </div>

          <!-- tiba di -->
          <div class="form-group row">
            <label for="tibaDi" class="col-sm-4 col-form-label">Tiba Di<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                <input type="text" class="form-control" name="tibaDi" id="tibaDi" placeholder="Tiba Di" required>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-12">

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