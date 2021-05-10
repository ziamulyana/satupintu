<section class="content-header">
  <h1>
    LHK Sampling
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
      <form role="form">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Form Pembuatan Surat LHK</h3>
            <p><span class="wajib">* wajib diisi</span></p>
          </div>

          <div class="col-md-6">

            <br>
            <!-- nomor surat -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Nomor Surat Tugas<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                  <select class="form-control" id="#" name="#" required>
                    <option value="" disabled selected>- No. Surat Tugas -</option>
                    <option value="#">10.10.10.10</option>
                    <option value="#">11.11.11.11</option>
                    <option value="#">12.12.12.12</option>
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
                  <input type="text" class="form-control" name="#" id="#" placeholder="Nama Kegiatan" required>
                </div>
              </div>
            </div>

            <!-- tanggal kegiatan -->
            <div class="form-group row">
              <label for="example-date-input" class="col-sm-4 col-form-label">Tanggal Kegiatan<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <input class="form-control" type="date" name="#" id="#" required>
              </div>
            </div>

            <!-- alamat tujuan -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Tempat Kegiatan<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                  <select class="form-control" id="#" name="#" required>
                    <option value="" disabled selected>- Tempat Kegiatan -</option>
                    <option value="#">Natuna</option>
                    <option value="#">Pinang</option>
                    <option value="#">Karimun</option>
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
                  <input type="text" class="form-control" name="#" id="#" placeholder="Petugas 1" required>
                </div>
              </div>
            </div>

            <!-- petugas 2 -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Petugas 2<span class="wajib"> </span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                  <input type="text" class="form-control" name="#" id="#" placeholder="Petugas 2" required>
                </div>
              </div>
            </div>
          </div>



          <div class="col-md-12">
            <h4>Pointer Hasil Kegiatan</h4>
            <hr>
          </div>

          <div class="col-md-5">
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Pemeriksaan<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-tasks"></i></span>
                  <select class="form-control" id="#" name="#" required>
                    <option value="" disabled selected>- Jenis Kegiatan Pemeriksaan -</option>
                    <option value="#">Natuna</option>
                    <option value="#">Pinang</option>
                    <option value="#">Karimun</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-5">
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Sarana<span class="wajib"> </span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-building"></i></span>
                  <input type="text" class="form-control" name="#" id="#" placeholder="Sarana" required>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">‎‎‎<span class="wajib"> </span></label>
              <div class="col-sm-12" id="forms">
                <button type="button" class="btn btn-primary" onclick="addField();"><i class="fa fa-plus-circle"></i>&nbsp Komoditi</button>
              </div>
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

                <div class="col-md-5">
                  <div class="form-group row">
                    <label for="noSurat" class="col-sm-4 col-form-label">Pemeriksaan<span class="wajib"> *</span></label>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-tasks"></i></span>
                        <select class="form-control" id="#" name="#" required>
                          <option value="" disabled selected>- Jenis Kegiatan Pemeriksaan -</option>
                          <option value="#">Natuna</option>
                          <option value="#">Pinang</option>
                          <option value="#">Karimun</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group row">
                    <label for="noSurat" class="col-sm-4 col-form-label">Sarana<span class="wajib"> </span></label>
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                        <input type="text" class="form-control" name="#" id="#" placeholder="Sarana" required>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group row">
                    <label for="noSurat" class="col-sm-4 col-form-label">‎‎‎<span class="wajib"> </span></label>
                    <div class="col-sm-12" id="forms1">
                      <button type="button" class="btn btn-primary" onclick="addField2();"><i class="fa fa-plus-circle"></i>&nbsp Komoditi</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label"><span class="wajib"> </span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-flask"> Total Sampel</i></span>
                  <input type="text" class="form-control" name="total_sampel" id="total_sampel" placeholder="0" disabled>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success"><i class="fa fa-share"></i>&nbsp Save</button>
          </div>
          <div class="col-md-4">
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label"><span class="wajib"> </span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><b>Rp.</b> Total Harga</span>
                  <input type="text" class="form-control" name="total_harga" id="total_harga" placeholder="0" disabled>
                </div>
              </div>
            </div>
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