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
      <form action="<?php echo site_url('petugas/lhk_pem_c/add') ?>" method="post" enctype="multipart/form-data" role="form">
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
              <!-- Jenis Sarana -->
              <div class="form-group row">
                <label for="noSurat" class="col-sm-6 col-form-label">Jenis Sarana<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                  <!-- no surat -->
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                    <select class="form-control category" name="suratTugas" id="suratTugas" style="width: 100%;">
                      <?php
                      foreach ($surat_tugas as $surat) {
                        echo "<option value=".$surat->idSurat.">".$surat->noSuratTugas."</option>";
                      }
                      ?>
                      <option selected="selected">- Pilih Surat Tugas -</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Jenis Komoditi -->
              <div class="form-group row">
                <label for="noSurat" class="col-sm-6 col-form-label">Jenis Komoditi<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                  <!-- no surat -->
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                    <select class="form-control category" name="suratTugas" id="suratTugas" style="width: 100%;">
                      <?php
                      foreach ($surat_tugas as $surat) {
                        echo "<option value=".$surat->idSurat.">".$surat->noSuratTugas."</option>";
                      }
                      ?>
                      <option selected="selected">- Pilih Surat Tugas -</option>
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
                  <input class="form-control <?php echo form_error('tglLhk') ? 'is-invalid' : '' ?>" type="date" name="tglLhk" required>
                  <div class="invalid-feedback">
                    <?php echo form_error('tglPemeriksaan') ?>
                  </div>
                </div>
              </div>

               <!-- pemeriksaan akhir -->
               <div class="form-group row">
                <label for="example-date-input" class="col-sm-6 col-form-label">Periode Pemeriksaan Akhir<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                  <input class="form-control <?php echo form_error('tglLhk') ? 'is-invalid' : '' ?>" type="date" name="tglLhk" required>
                  <div class="invalid-feedback">
                    <?php echo form_error('tglPemeriksaan') ?>
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

