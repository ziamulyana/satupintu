<section class="content-header">
  <h1>
    Tarik Data Pemeriksaan Sarana
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Petugas</a></li>
    <li><a href="#">LHK</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <form action="<?php echo site_url('petugas/eksporData/cetakReport') ?>" method="post" role="form">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Form Tarik Data Sarana</h3>
            <p><span class="wajib">* wajib diisi</span></p>
          </div>
          <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php elseif ($this->session->flashdata('failed')) : ?>
              <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('failed'); ?>
              </div>
            <?php endif; ?>

            <div class="col-md-6">

              <br>
              Jenis Sarana
              <div class="form-group row">
                <label for="noSurat" class="col-sm-6 col-form-label">Jenis Sarana<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                  <!-- no surat -->
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                    <select class="form-control category" name="kategori" id="kategori" style="width: 100%;">
                    <option value="Apotek">Apotek</option>
                    <option value="Toko Obat">Toko Obat</option>
                    <option value="Rumah Sakit">Rumah Sakit</option>
                    <option value="Puskesmas">Puskesmas</option>
                    <option value="PBF">PBF</option>
                    <option value="Klinik">Klinik</option>
                    <option value="IFK">IFK</option>
                    <option value="Toko Kosmetik">Toko Kosmetik</option>
                    <option value="Pemilik Notifikasi">Pemilik Notifikasi</option>
                    <option value="Konter Kosmetik">Konter Kosmetik</option>
                    <option value="Klinik Kecantikan/Salon/Spa">Klinik Kecantikan/Salon/Spa</option>
                    <option value="Industri Kosmetik Golongan B">Industri Kosmetik Golongan B</option>
                    <option value="Industri Kosmetik Golongan A">Industri Kosmetik Golongan A</option>
                    <option value="Importir Kosmetik">Importir Kosmetik</option>
                    <option value="Distributor Kosmetik">Distributor Kosmetik</option>
                    <option value="Agen/Stokis MLM">Agen/Stokis MLM</option>
                    <option value="Retail Suplemen Kesehatan">Retail Suplemen Kesehatan</option>
                    <option value="Retail Obat Tradisional">Retail Obat Tradisional</option>
                    <option value="Importir Suplemen Kesehatan">Retail Obat Tradisional</option>
                      <option selected="selected">- Pilih Jenis Sarana -</option>
                    </select>
                  </div>
                </div>
              </div>

              Jenis Komoditi
              <div class="form-group row">
                <label for="noSurat" class="col-sm-6 col-form-label">Jenis Komoditi<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                  <!-- no surat -->
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                    <select class="form-control category" name="komoditi" id="komoditi" style="width: 100%;">
                    <option value="Obat">Obat</option>
                    <option value="Kosmetik">Kosmetik</option>
                    <option value="Obat Tradisional">Obat Tradisional</option>
                    <option value="Suplemen Kesehatan">Suplemen Kesehatan</option>
                    <option value="Produksi Pangan">Produksi Pangan</option>
                    <option value="Pangan">Pangan</option>
                      <option selected="selected">- Pilih Jenis Komoditi -</option>
                    </select>
                  </div>
                </div>
              </div>


              <!-- Status -->
              <div class="form-group row">
                <label for="noSurat" class="col-sm-6 col-form-label">Status Hasil Pemeriksaan<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                  <!-- no surat -->
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                    <select class="form-control " name="status" id="status" style="width: 100%;">
                    <option value="1">MK</option>
                    <option value="0">TMK</option>
                      <option selected="selected">- Pilih Status Hasil Pemeriksaan -</option>
                    </select>
                  </div>
                </div>
              </div>



            </div>


            <div class="col-md-6">
              <br>

               <!-- pemeriksaan awal -->
               <div class="form-group row">
                <label for="example-date-input" class="col-sm-6 col-form-label">Periode Pemeriksaan Awal<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                  <input class="form-control" type="date" name="tglAwal" required>
                  <div class="invalid-feedback">
                    <?php echo form_error('tglPemeriksaan') ?>
                  </div>
                </div>
              </div>

               <!-- pemeriksaan akhir -->
               <div class="form-group row">
                <label for="example-date-input" class="col-sm-6 col-form-label">Periode Pemeriksaan Akhir<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                  <input class="form-control <?php echo form_error('tglAwal') ? 'is-invalid' : '' ?>" type="date" name="tglAkhir" required>
                  <div class="invalid-feedback">
                    <?php echo form_error('tglAkhir') ?>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-md-12">
              
            
            <button type="submit" class="btn btn-success"><i class="fa  fa-get-pocket"></i>&nbsp Proses</button>
          </div>
          <!-- /.box-body -->
        </div>

      </div>

      <div class="box-footer">

      </div>
    </form>
  </div>
</div>
</div>
<!-- /.row -->
</section>
<!-- /.content -->
<style>
  .wajib {
    color: red;
  }

  .kotak {
    border: 1px groove #ffffffba !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow: 0px 0px 0px 0px #000;
    box-shadow: 0px 0px 0px 0px #000;
  }

  legend.scheduler-border {
    width: inherit;
    /* Or auto */
    padding: 0 10px;
    /* To give a bit of padding on the left and right */
    border-bottom: none;
    font-size: 16px;
  }

  
</style>

