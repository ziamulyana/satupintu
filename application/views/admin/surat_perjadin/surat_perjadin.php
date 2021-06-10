<section class="content-header">
   <h1>
    Surat Perjalanan Dinas
   </h1>
   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Surat Perjalanan Dinas</a></li>
  </ol>
</section>  
<!-- Main content -->
<section class="content">

  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">

          <h3 class="box-title"><i class="fa fa-file"></i> Cetak Surat Perjalanan Dinas
          </h3>

          <hr>

           <form action="<?php echo base_url('admin/surat_perjadin/surat_perjadin') ?>" method="post">
                <!-- nomor surat -->
         <div class="form-group">
              <label>Surat Tugas</label><span class="wajib"> *</span></label>
              <select name="idSurat"  id="idSurat" class="form-control category" data-live-search="true" title="Select Category" required>

                <option value="" disabled selected>Pilih Surat Tugas</option>

                <?php
                foreach ($tugas as $row) {
                  echo "<option value=".$row->idSurat.">".$row->noSuratTugas."</option>";
                }
                
                ?>

              </select>
            </div>

                    <!-- nomor surat -->
           <div class="form-group">
              <label>Petugas</label>
              <select name="idPetugas" id="idPetugas" class="form-control input-sm" data-live-search="true" title="Pilih Petugas">
                   <option value="" disabled selected>Pilih Petugas</option>
              </select> 
            </div>

          <button type="submit" value="submit" onclick="" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
      </form>

        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <div class="box-body">
         <div class="row">
          

     
     </div>
   </div>
 </div>

 <script type="text/javascript">
  $(document).ready(function()
  {
    $('#idSurat').change(function()
    {
      var idPer=$('#idSurat').val();
      if(idPer!=''){
        $.ajax({
          url: "<?php echo base_url();?>petugas/umpan_balik/getSarana", 
          method: "POST",
          data: {idPer:idPer},
          success: function(data)
          {
            $('#sarana').html(data);
          } 
        });
      }else{
        $('#sarana').html('<option value="">Pilih Surat Tugas Doloe</option>');
      }


    });
  });
</script>

