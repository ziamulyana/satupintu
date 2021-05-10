<!-- Main content -->
<section class="content">
  <div class="row" id="bg">
    <div class="col-lg-3 col-lg-12">

      <form action="<?php echo base_url('petugas/umpan_balik/tracking') ?>" method="post">
                <!-- nomor surat -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-12 col-form-label">No surat Tugas<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="Nomor Surat" name="noSuratTugas" id="noSuratTugas" required>
              </div>
            </div>
          </div>

                    <!-- nomor surat -->
          <div class="form-group row">
            <label for="namaSarana" class="col-sm-12 col-form-label">Nama Sarana<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="Nomor Surat" name="namaSarana" id="namaSarana" required>
              </div>
            </div>
          </div> 

          <button type="submit" value="submit" onclick="" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
      </form>

    </div>
  </div>
    
  </div>
      </section>