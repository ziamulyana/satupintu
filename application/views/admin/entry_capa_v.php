<section class="content-header">
  <h1>
    CAPA
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Admin</a></li>
    <li><a href="#">Feedback CAPA</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <form role="form">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Form Feedback CAPA</h3>
          </div>

          <div class="col-md-6">

            <br>

          
            <!-- nomor Surat Peringatan -->
            <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Surat Peringatan<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                  <select class="form-control" id="#" name="#" required>
                    <option value="" disabled selected>- No. Surat Peringatan -</option>
                    <option value="#">10.10.10.10</option>
                    <option value="#">11.11.11.11</option>
                    <option value="#">12.12.12.12</option>
                  </select>
                </div>
              </div>
            </div>
            
            <br><br>

            <!-- Nomor Surat CAPA -->
            <div class="form-group row">
                <label for="noSurat" class="col-sm-4 col-form-label">Nomor Feedback CAPA<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                    <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-building"></i></span>
                     <input type="text" class="form-control" name="#" id="#" placeholder="Nomor Feedback CAPA" required>
                    </div>
                 </div>
            </div>

            <!-- tanggal terima surat -->
            <div class="form-group row">
              <label for="example-date-input" class="col-sm-4 col-form-label">Tanggal Terima Surat<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <input class="form-control" type="date" name="#" id="#" required>
              </div>
            </div>

            <!-- Perihal Feedback CAPA -->
            <div class="form-group row">
                <label for="noSurat" class="col-sm-4 col-form-label">Perihal Feedback CAPA<span class="wajib"> *</span></label>
                <div class="col-sm-12">
                    <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-building"></i></span>
                     <input type="text" class="form-control" name="#" id="#" placeholder="Perihal Feedback CAPA" required>
                    </div>
                 </div>
            </div>
            
            <!-- Upload File -->
            <div class="form-group">
                  <label for="exampleInputFile">Lampiran Feedback CAPA<span class="wajib"> *</span></label>
                  <input type="file" id="exampleInputFile">
            </div>

            <br>

                        
          </div>


          <div class="col-md-6">
            <br>

           <!-- Sarana -->
           <div class="form-group row">
              <label for="noSurat" class="col-sm-4 col-form-label">Sarana<span class="wajib"> *</span></label>
              <div class="col-sm-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                  <select class="form-control" id="#" name="#" required>
                    <option value="" disabled selected>- Nama Sarana -</option>
                    <option value="#">Sarana 01</option>
                    <option value="#">Sarana 02</option>
                    <option value="#">Sarana 03</option>
                  </select>
                </div>
              </div>
              
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


<!-- get data with ajax jquery -->
<script>
$(document).ready(function(){
  getDataForm()
})
function getDataForm(){
  $.ajax({
    type: "GET",
    url: "http://localhost/satupintu/admin/entry_capa_c/getData",
    // success: function (url) {
    //     alert(url);

    // }
});
}
</script>