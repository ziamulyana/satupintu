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
    
        <div class="col-md-6">
          <hr>
          
      
          <div class="form-group">
            <label>Surat Tugas</label><span class="wajib"> *</span></label>
            <select name="category_item" id="category_item" class="form-control input-sm" data-live-search="true" title="Select Category">

            </select>
          </div>
          <div class="form-group">
            <label>Nama Petugas</label><span class="wajib"> *</span></label>
            <select name="sub_category_item" id="sub_category_item" class="form-control input-sm" data-live-search="true" title="Select Sub Category">
            </select>
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

                 <!-- Nominal terbilang -->
          <div class="form-group row">
            <label for="nominalTerbilang" class="col-sm-6 col-form-label">Terbilang<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="nominalTerbilang" id="nominalTerbilang" placeholder="Terbilang" required>
              </div>
            </div>
          </div>`

        </div>
           

        <div class="col-md-12">
              <div class="box box-primary">
      <div class="box-header with-border">

        <h3 class="box-title">Rincian Biaya</h3>
         
          <div class="row">
            <div class="col-xs-12">
              
               <hr>
                  <table class="table table-bordered table-hover" id="dynamic_field">
              <tr>
                <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                 <td><select name="sub_category_item" id="sub_category_item" class="form-control input-sm" data-live-search="true" title="Select Sub Category">
            </select></td>
                 <td><input type="text" name="email[]" placeholder="Enter your Email" class="form-control name_email"/></td>
             
                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>  
              </tr>
            </table>
     
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  




  <!-- /.box-header -->

        <div class="box-footer">
         <button type="submit" value="submit" onclick="return chk_date()" class="btn btn-info"><i class="fa fa-print"></i> Save Document</button>
         <button type="reset"  value ="reset" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Reset Form</button>
       </div>

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
