<section class="content-header">
  <h1>
    LHK Pemeriksaan
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
            <h3 class="box-title">Form Pembuatan Surat LHK</h3>
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
            <!-- nomor surat -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Nomor Surat Tugas<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                  <select class="form-control" name="idSuratTugas">
                    <option value="" disabled selected>- No. Surat Tugas -</option>
                    <option value="10">10.10.10.10</option>
                    <option value="11">11.11.11.11</option>
                    <option value="12">12.12.12.12</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- nama kegiatan -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Nama Kegiatan<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                  <input type="text" class="form-control" name="kegiatan" placeholder="Nama Kegiatan" required>
                </div>
              </div>
            </div>

            <!-- tanggal kegiatan -->
            <div class="form-group row">
              <label for="example-date-input" class="col-sm-4 col-form-label">Tanggal Periksa<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <input class="form-control <?php echo form_error('tglPemeriksaan') ? 'is-invalid' : '' ?>" type="date" name="tglPemeriksaan" required>
                <div class="invalid-feedback">
                  <?php echo form_error('tglPemeriksaan') ?>
                </div>
              </div>
            </div>

            <!-- alamat tujuan -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Tempat Kegiatan<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                  <select class="form-control" name="kota">
                    <option value="" disabled selected>- Kota -</option>
                    <option value="Natuna">Natuna</option>
                    <option value="Pinang">Pinang</option>
                    <option value="Karimun">Karimun</option>
                  </select>
                </div>
              </div>
            </div>

          </div>


          <div class="col-md-6">
            <br>

            <!-- petugas 1 -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Petugas 1<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                  <input type="text" class="form-control" name="petugas1" placeholder="Petugas 1" required>
                </div>
              </div>
            </div>

            <!-- petugas 2 -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Petugas 2<span class="wajib"> </span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                  <input type="text" class="form-control" name="petugas2" placeholder="Petugas 2">
                </div>
              </div>
            </div>

            <!-- petugas 3 -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Petugas 3<span class="wajib"> </span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                  <input type="text" class="form-control" name="petugas3" placeholder="Petugas 3">
                </div>
              </div>
            </div>

            <!-- petugas 4 -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Petugas 4<span class="wajib"> </span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                  <input type="text" class="form-control" name="petugas4" placeholder="Petugas 4">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <h4>Hasil Pemeriksaan</h4>
            <hr>
          </div>

          <div class="col-md-12">
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Jenis Sarana<span class="wajib"> </span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-tasks"></i></span>
                  <input type="text" class="form-control" name="jenisSarana" placeholder="Sarana" required>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Sarana<span class="wajib"> </span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-building"></i></span>
                  <input type="text" class="form-control" name="idSarana" placeholder="Sarana" required>
                </div>
              </div>
            </div>

          </div>

          <div class="col-md-3">
            <br>
            <fieldset class="kotak">
              <legend class="scheduler-border">Temuan (RHPK)</legend>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="temuanRHPK" value="Perizinan" class="minimal">
                  Perizinan
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="temuanRHPK" value="Pengadaan" class="minimal">
                  Pengadaan
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="temuanRHPK[]" value="CODB" class="minimal">
                  CODB
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="temuanRHPK[]" value="Produk TIE" class="minimal">
                  Produk TIE
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="temuanRHPK[]" value="Mutu/Label" class="minimal">
                  Mutu/Label
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="temuanRHPK[]" value="Produk Dilarang" class="minimal">
                  Produk Dilarang
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="temuanRHPK[]" value="Hygiene/Sanit" class="minimal">
                  Hygiene/Sanit
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="temuanRHPK[]" value="CPPB" class="minimal">
                  CPPB
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="temuanRHPK[]" value="Lain-Lain" class="minimal">
                  Lain-lain
                </label>
              </div>
            </fieldset>

          </div>
          <div class="col-md-3">
            <br>
            <fieldset class="kotak">
              <legend class="scheduler-border">--</legend>
              <input type="radio" name="isMk" value="MK">
              <label> MK</label><br>
              <input type="radio" name="isMk" value="TMK">
              <label> TMK</label>
            </fieldset>

          </div>
          <div class="col-md-3">
            <br>
            <fieldset class="kotak">
              <legend class="scheduler-border">Tindak Lanjut</legend>
              <div class="form-group">
                <label>
                  <input type="radio" name="tindakLanjut" value="Tidak TL" class="minimal">
                  Tidak TL
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="radio" name="tindakLanjut" value="Pembinaan" class="minimal">
                  Pembinaan
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="radio" name="ttindakLanjut" value="Peringatan" class="minimal">
                  Peringatan
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="radio" name="tindakLanjut" value="Peringatan Keras" class="minimal">
                  Peringatan Keras
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="radio" name="tindakLanjut" value="PSK" class="minimal">
                  PSK
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="radio" name="tindakLanjut" value="Penghentian" class="minimal">
                  Penghentian
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="radio" name="tindakLanjut" value="TL Ke Penyidikan" class="minimal">
                  TL ke Penyidikan
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="radio" name="tindakLanjut" value="Capa" class="minimal">
                  CAPA
                </label>
              </div>
              <i class="wajib">*Jika MK, kosongkan.</i>
            </fieldset>
          </div>
          <div class="col-md-3">
            <br>
            <fieldset class="kotak">
              <legend class="scheduler-border">Alasan Tidak Diperiksa</legend>
              <div class="form-group">
                <label>
                  <input type="radio" name="alasanTidakDiperiksa" value="Tutup" class="minimal">
                  Tutup
                </label>
              </div>
              <div class="form-group">
                <label>
                  <input type="radio" name="alasanTidakDiperiksa" value="Tidak Aktif" class="minimal">
                  Tidak Aktif
                </label>
              </div>
              <i class="wajib">*Jika diperiksa, kosongkan.</i>
            </fieldset>

          </div>
          <div class="col-md-12">
            <br>

            <legend>Keterangan</legend>


            <div class="box-body pad">
              <form>
                <textarea class="textarea" name="keterangan" placeholder="Keterangan." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
          <div class="col-md-12">
            <div class="box box-primary collapsed-box box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Pointer Hasil Kegiatan</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="col-md-12">
                  <h4>Pointer Hasil Kegiatan</h4>
                  <hr>
                </div>

                <div class="col-md-12">
                  <div class="form-group row">
                    <label for="noSurat" class="col-sm-4 col-form-label">Jenis Sarana<span class="wajib"> </span></label>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-tasks"></i></span>
                        <input type="text" class="form-control" name="jenisSarana" placeholder="Sarana" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="noSurat" class="col-sm-4 col-form-label">Sarana<span class="wajib"> </span></label>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                        <input type="text" class="form-control" name="idSarana" placeholder="Sarana" required>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-md-3">
                  <br>
                  <fieldset class="kotak">
                    <legend class="scheduler-border">Temuan (RHPK)</legend>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="minimal">
                        Perizinan
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="minimal">
                        Pengadaan
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="minimal">
                        CODB
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="minimal">
                        Produk TIE
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="minimal">
                        Mutu/Label
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="minimal">
                        Produk Dilarang
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="minimal">
                        Hygiene/Sanit
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="minimal">
                        CPPB
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="minimal">
                        Lain-lain
                      </label>
                    </div>
                  </fieldset>

                </div>
                <div class="col-md-3">
                  <br>
                  <fieldset class="kotak">
                    <legend class="scheduler-border">--</legend>
                    <input type="radio" name="status" value="MK">
                    <label> MK</label><br>
                    <input type="radio" name="status" value="TMK">
                    <label> TMK</label>
                  </fieldset>

                </div>
                <div class="col-md-3">
                  <br>
                  <fieldset class="kotak">
                    <legend class="scheduler-border">Tindak Lanjut</legend>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="tindakLanjut" value="Pembinaan" class="minimal">
                        Tidak TL
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="tindakLanjut" value="Pembinaan" class="minimal">
                        Pembinaan
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="tindakLanjut" value="Peringatan" class="minimal">
                        Peringatan
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="tindakLanjut" value="Peringatan Keras" class="minimal">
                        Peringatan Keras
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="tindakLanjut" value="PSK" class="minimal">
                        PSK
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="tindakLanjut" value="Penghentian" class="minimal">
                        Penghentian
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="tindakLanjut" value="TL Ke Penyidikan" class="minimal">
                        TL ke Penyidikan
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="tindakLanjut" value="Capa" class="minimal">
                        CAPA
                      </label>
                    </div>
                  </fieldset>
                </div>
                <div class="col-md-3">
                  <br>
                  <fieldset class="kotak">
                    <legend class="scheduler-border">Alasan Tidak Diperiksa</legend>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="alasan_tidakperiksa" value="Tutup" class="minimal">
                        Tutup
                      </label>
                    </div>
                    <div class="form-group">
                      <label>
                        <input type="radio" name="alasan_tidakperiksa" value="Tidak Aktif" class="minimal">
                        Tidak Aktif
                      </label>
                    </div>
                    <i class="wajib">*Jika diperiksa, kosongkan.</i>
                  </fieldset>

                </div>
                <div class="col-md-12">
                  <br>

                  <legend>Keterangan</legend>


                  <div class="box-body pad">
                    <form>
                      <textarea class="textarea" placeholder="Keterangan." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success"><i class="fa fa-share"></i>&nbsp Save</button>
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