<section class="content-header">
  <h1>
    Buat Data Sarana
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Data Sarana</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
   <div class="col-md-12">
     <form role="form" action="<?php echo base_url('admin/Master/simpan_sarana')?>" method="post">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Pembuatan Data Sarana</h3>
          <p><span class="wajib">* wajib diisi</span></p>
        </div>

        <div class="col-md-12">
          <hr>
          
          <!-- nama sarana -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Nama Sarana<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <input type="text" class="form-control" placeholder="Nama Sarana" name="namas" id="namas" required>
              </div>
            </div>
          </div>

         <!-- Alamat Sarana -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Alamat Sarana<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <input type="text" class="form-control" placeholder="Alamat Sarana" name="alamats" id="alamats" required>
              </div>
            </div>
          </div>

          <!-- Pemilik -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Pemilik<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Nama Pemilik" name="pemiliks" id="pemiliks" required>
              </div>
            </div>
          </div>

          <!-- NoIzinSarana -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Nomor Izin Sarana<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="Nomor Izin Sarana" name="noIS" id="noIS" required>
              </div>
            </div>
          </div>

          <!-- Penanggung Jawab -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Penanggung Jawab<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Penangung Jawab" name="pJ" id="pJ" required>
              </div>
            </div>
          </div>

          <!-- NoIzinPj -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Nomor Izin Penanggung Jawab<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="No Izin Pj" name="noIPJ" id="noIPJ" required>
              </div>
            </div>
          </div>

          <!-- Kategori Sarana -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Kategori Sarana<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <input type="text" class="form-control" placeholder="Kategori Sarana" name="kS" id="kS" required>
              </div>
            </div>
          </div>

          <!-- Katagori Sarana -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Jenis Sarana<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <input type="text" class="form-control" placeholder="Jenis Sarana" name="jS" id="jS" required>
              </div>
            </div>
          </div>

          <!-- Kota -->
            <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Kota <span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <select class="form-control" name="kotas" id="kotas" required>
                  <option value="" disabled selected>- Pilih Kota -</option>
                  <option>Kota Batam</option>
                  <option>Kota Tanjung Pinang</option>
                  <option>Kabupaten Bintan</option>
                  <option>Kabupaten Karimun</option>
                  <option>Kabupaten Anambas</option>
                  <option>Kabupaten Lingga</option>
                  <option>Kabupaten Natuna</option>
                </select>
              </div>
            </div>
          </div>

          </div>



        <div class="box-footer">
         <button type="submit" value="submit"  class="btn btn-info"><i class="fa fa-print"></i> Save Document</button>
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