  <section class="content-header">
  <h1>
    Buat Surat Peringatan untuk Rumah Sakit
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Peringatan</a></li>
    <li><a href="#">Surat Obat</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
   <div class="col-md-12">
     <form role="form" action="<?php echo base_url('petugas/surat_peringatan/surat_rs/surat')?>" method="post">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $title; ?></h3>
          <p><span class="wajib">* wajib diisi</span></p>

          <div class="col-md-6">
          <h4>Informasi Kepala Surat</h4>
          <hr>
          
  <!-- nomor surat tugas -->
                <div class="form-group row">
                  <label for="kendaraan" class="col-sm-4 col-form-label">No.Surat Tugas<span class="wajib"> *</span></label>
                  <div class="col-sm-12">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-newspaper-o"></i></span>
                      <select name="suratTugas" id= "suratTugas" class="selectpicker form-control" data-live-search="true" required>
                        <?php
                        foreach ($surat_tugas as $surat) {
                          echo "<option value=".$surat->idSurattl.">".$surat->noSuratTugas."</option>";
                        }
                        ?>
                        <option selected="selected">- Pilih Surat Tugas -</option>
                      </select>
                    </div>
                  </div>
                </div>
                
          <!-- tanggal surat -->
          <div class="form-group row">
            <label for="example-date-input" class="col-sm-4 col-form-label">Tanggal Surat<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <input class="form-control" type="date" name ="tanggal" id="tanggal" placeholder="Tanggal" required>
            </div>
          </div>

          <!-- nomor surat -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Nomor Surat<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="Nomor Surat" name="noSurat" id="noSurat" required>
              </div>
            </div>
          </div>

          <!-- tujuan surat -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Penerima Surat<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                <input type="text" class="form-control" name="penerimaSurat" id="penerimaSurat" placeholder="Penerima Surat" required>
              </div>
            </div>
          </div>

          <!-- alamat tujuan -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Kota Tujuan Surat<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="kotaSurat" id="kotaSurat" placeholder="Kota Tujuan Surat" required>
              </div>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <h4>Detail Sarana</h4>
          <hr>

          <!-- nama sarana -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Nama Sarana<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="namaSarana" id="namaSarana" placeholder="Nama Sarana" required>
              </div>
            </div>
          </div>

          <!-- alamat sarana -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Alamat Sarana<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="alamatSarana" id="alamatSarana" placeholder="Alamat Sarana" required>
              </div>
            </div>
          </div>



          <!-- tanggal periksa mulai -->
          <div class="form-group row">
            <label for="example-date-input" class="col-sm-4 col-form-label">Tanggal Mulai Periksa<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <input class="form-control" type="date" name ="tglMulaiperiksa" id="tglMulaiperiksa" placeholder="Tanggal Mulai Periksa" required>
            </div>
          </div>

          <!-- tanggal periksa selesai -->
          <div class="form-group row">
            <label for="example-date-input" class="col-sm-4 col-form-label">Tanggal Selesai Periksa</label>
            <div class="col-sm-12">
              <input class="form-control" type="date" name ="tglSelesaiperiksa" id="tglSelesaiperiksa" placeholder="Tanggal Selesai Periksa" onclick="return chk_date()">
            </div>
          </div>

          <script>
            function chk_date()
            {
              var durationstart = document.getElementById('tglMulaiperiksa').value;
              var durationend = document.getElementById('tglSelesaiperiksa').value;
              var st = durationstart.split("-");
              var en = durationend.split("-");
              var startDate = new Date(st[2], (+st[0] - 1), st[1]);                  
              var endDate = new Date(en[2], (+en[0] - 1), en[1]);
              if (startDate > endDate) {
                alert("Please enter proper duration range");
                return false;
              } else {
                return true;
              }
            }

          </script>


          <!-- no izin -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Nomor izin<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="noIzin" id="noIzin" placeholder="Nomor Izin" required>
              </div>
            </div>
          </div>



          <!-- nama PJ-->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-5 col-form-label">Nama Penanggung Jawab<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="namaPj" id="namaPj" placeholder="Nama Penanggung Jawab" required>
              </div>
            </div>
          </div>

          <!-- nomor SIPTTK-->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-5 col-form-label">No. SIPTTK<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="noSip" id="noSip" placeholder="No. SIPTTK" required>
              </div>
            </div>
          </div>

          <!-- nomor HP-->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-5 col-form-label">No. HP<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="noHp" id="noHp" placeholder="No. HP" required >
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-12">
          <h4>Detail Temuan</h4>
          <hr>

     <div class="form-group row">
           <label for="detailTemuan" class="col-sm-3 col-form-label">Detail Temuan<span class="wajib"> *</span></label>
           <div class="col-md-12">
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="">
                <textarea class="textarea" name="detailTemuan" id= "detailTemuan" placeholder="Rincian Detail Temuan" 
                style="width: 100%; height: 200px; font-size: 12px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required ></textarea>
              </div>
            </div>
          </div>
        </div>

        <hr>
        <h4>Detail Pasal Pelanggaran</h4>
        <hr>
        
 <!-- Pelanggaran -->
        <div class="form-group row">
          <label for="pilihPasal" class="col-sm-3 col-form-label">Pasal Pelanggaran<span class="wajib"> *</span></label>
          <div class="col-md-12">
            <select class="category related-post form-control" name="pilihPasal[]" id= "pilihPasal" multiple="multiple" data-placeholder="Pilih Pasal" style="width: 100%;" required>
              <?php
              foreach ($temuan_obat as $temuan) {
                echo "<option value=".$temuan->id.">".$temuan->temuan."</option>";
              }
              ?>

            </select>
          </div>
        </div>


        <div class="box-footer">
         <button type="submit" value="submit" onclick="return chk_date()" class="btn btn-info"><i class="fa fa-print"></i> Save Document</button>
         <button type="reset"  value ="reset" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Reset Form</button>
       </div>
          </div>
        </div>

         
     </form>

   </div>



 </div>
</div>

<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #3c8dbc;
        
        border-radius: 4px;
        cursor: default;
        float: left;
        margin-right: 5px;
        margin-top: 5px;
        padding: 0 5px;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #151515;
        cursor: pointer;
        display: inline-block;
        font-weight: bold;
        margin-right: 2px;
    }
</style>
<!-- /.row -->
</section>
<!-- /.content -->
