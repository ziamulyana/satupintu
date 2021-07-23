<section class="content-header">
    <h1>
        Edit LHK Pemeriksaan
  </h1>
  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Petugas</a></li>
        <li><a href="#">Edit LHK</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo base_url('petugas/lhk/lhk_pem_c/edit') ?>" method="post"  role="form">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form Edit Surat LHK</h3>
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

                 <?php
 $sarana = array();
 $idSarana= array();
 $statusBalai = array();
 $temuan = array();
 $deskripsiTemuan = array();
 $jenisTl = array();
 foreach($lhk as $row){
  $noSuratTugas = $row->noSuratTugas;
  $tglLhk = $row->tglLhk;
  $pejabat = $row->pejabatDituju;
  $pengesahSppd = $row->pengesahSppd;
  $pengesahKwitansi = $row->pengesahKwitansi;
  $pengesahForm = $row->pengesahForm;
  $idSuratTugas = $row->idSurat;
  array_push($sarana, $row->namaSarana);
  array_push($statusBalai, $row->statusBalai);
  array_push($temuan, $row->temuan);
  array_push($deskripsiTemuan, $row->deskripsiTemuan);
  array_push($jenisTl, $row->jenisTl);
  array_push($idSarana, $row->idSarana);


 }?>

  <div class="form-group">
                  <input type="hidden" class="form-control" name="idSuratTugas" id="idSuratTugas" value="<?=$idSuratTugas?>">
                </div>

                <br>
                <!-- nomor surat -->
                 <div class="form-group">
                <label>Surat Tugas</label><span class="wajib"> *</span></label>
                <input type="text" class="form-control" placeholder="Nomor Surat Tugas" name="surattugas" id="surattugas" value="<?=$noSuratTugas?>" readonly>
              </div>

      <!-- tanggal kegiatan -->
      <div class="form-group row">
        <label for="example-date-input" class="col-sm-4 col-form-label">Tanggal LHK<span class="wajib"> *</span></label>
        <div class="col-sm-12">
            <input class="form-control <?php echo form_error('tglLhk') ? 'is-invalid' : '' ?>" type="date" name="tglLhk" value="<?=$tglLhk?>" required>
            <div class="invalid-feedback">
                <?php echo form_error('tglPemeriksaan') ?>
          </div>
    </div>
</div>


</div>


<div class="col-md-6">
    <br>

    <!-- sppd -->
    <div class="form-group row">
        <label for="noSurat" class="col-sm-6 col-form-label">SPPD disahkan oleh :<span class="wajib"> *</span></label></label>
        <div class="col-sm-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                <input type="text" class="form-control" name="sppd" id="sppd" value="<?=$pengesahSppd?>" required>
          </div>
    </div>
</div>


<!-- kwitansi -->
<div class="form-group row">
  <label for="noSurat" class="col-sm-6 col-form-label">Kwitansi disahkan oleh :<span class="wajib"> *</span></label></label>
  <div class="col-sm-12">
      <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
          <input type="text" class="form-control" name="kwitansi" id="kwitansi" value="<?=$pengesahKwitansi?>" required>
    </div>
</div>
</div>


<!-- form 8 jam  -->
<div class="form-group row">
  <label for="noSurat" class="col-sm-6 col-form-label">Form 8 jam disahkan oleh :<span class="wajib"> *</span></label></label>
  <div class="col-sm-12">
      <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
          <input type="text" class="form-control" name="form" id="form" value="<?=$pengesahForm?>" required>
    </div>
</div>
</div>


</div>

<div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">

            <h3 class="box-title">Hasil Pemeriksaan</h3>

            <div class="row">
                <div class="col-xs-12">
                   <hr>

                   <!-- sarana -->


                   <label for="pilihPasal" class="col-sm-6 col-form-label">Pilih Nama Sarana Terlebih Dahulu<span class="wajib"> *</span></label>
                   <div class="col-md-12">
                        <select  name="sarana[]" id= "sarana" multiple="multiple"  style="width: 100%;" required>
                              <?php 

                              foreach ($data_sarana as $sr) {
                                ?>
                                <option value="<?=$sr->idSarana?>"  ><?php echo $sr->namaSarana; ?></option>
                                <?php
                          }

                              for($i = 0; $i<count($sarana);$i++){?> 
                                  <option value="<?=$idSarana[$i]?>"  selected><?php echo $sarana[$i]; ?></option>
                                  <?php 
                                }

                            
                          ?>


              </select>

              <hr>




              <div>
               <!--  <button type="button" class="btn btn-success repeater-add-btn"><i class="fa fa-plus"></i>&nbsp Tambah Rincian LHK</button>
                <div class="items" data-group="programming_languages"> -->
                    <div class="item-content">
                        <div class="form-group">
                            <div class="row">
                               <table class="table table-bordered table-hover" id="dynamic_field" name="myform">
                                 <tr>
                                        <td><button type="button" name="row-add" id="row-add" class="row-add"><i class="fa fa-plus"> </button></td>
                        </tr>

                                <?php
                                for($i = 0; $i<count($temuan);$i++){
                                    ?>

                                  <!-- temuan -->
                                  <tr class="line_items">
                                 
                                  <td colspan="1"> <textarea  placeholder="Temuan" name="temuan[]"  id="temuan[]" style="width: 100%; height: 40px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $temuan[$i] ?></textarea></td>

                            <td><select data-skip-name="true" name="tl[]" id="tl[]" class="form-control sm" title="Tindak lanjut">
                                <option value="<?=$jenisTl[$i]?>"  selected><?php echo $jenisTl[$i]; ?></option>
                                <option value="Tidak TL">Tidak TL</option>
                                <option value="Pembinaan">Pembinaan</option>
                                <option value="Tindak Lanjut Hasil Pemeriksaan">Tindak Lanjut Hasil Pemeriksaan</option>
                                <option value="Pembinaan Teknis">Pembinaan Teknis</option>
                                <option value="Peringatan">Peringatan</option>
                                <option value="Peringatan Keras">Peringatan Keras</option>
                                <option value="Penghentian Sementara Kegiatan">PSK</option>
                                <option value="Rekomendasi Pencabutan Izin">Rekomendasi Pencabutan Izin</option>
                                <option value="TL ke Penyidikan">TL ke Penyidikan</option>
                          </select></td>

                          <td><select data-skip-name="true" name="kesimpulan[]" id="kesimpulan[]" class="form-control sm" title="Kesimpulan">
                            <?php 
                            if($statusBalai[$i] == 1){
                            $kesimpulan  = "MK";
                           }else{
                             $kesimpulan  = "TMK";
                           }
                          ?>
                            ?>
                                <option value="<?=$statusBalai[$i]?>"  selected><?php echo $kesimpulan; ?></option>
                                <option value="1">MK</option>
                                <option value="0">TMK</option>

                          </select></td>



                  

                      <td colspan="5"> <textarea  placeholder="Keterangan." name="keterangan[]" id="keterangan[]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $deskripsiTemuan[$i] ?></textarea></td>

          
             
                          <td><button class="row-remove"><i class="fa fa-close"></button></td>
                  </tr>


<?php 
                                    }?>

                                        
                                  <!-- temuan -->
                                  <tr class="line_items">
                                 
                                  <td colspan="1"> <textarea  placeholder="Temuan" name="temuan[]" id="temuan[]" style="width: 100%; height: 40px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>

                            <td><select data-skip-name="true" name="tl[]" id="tl[]" class="form-control sm" title="Tindak lanjut">
                                <option>Tindak Lanjut</option>
                                <option value="Tidak TL">Tidak TL</option>
                                <option value="Pembinaan">Pembinaan</option>
                                <option value="Tindak Lanjut Hasil Pemeriksaan">Tindak Lanjut Hasil Pemeriksaan</option>
                                <option value="Pembinaan Teknis">Pembinaan Teknis</option>
                                <option value="Peringatan">Peringatan</option>
                                <option value="Peringatan Keras">Peringatan Keras</option>
                                <option value="Penghentian Sementara Kegiatan">PSK</option>
                                <option value="Rekomendasi Pencabutan Izin">Rekomendasi Pencabutan Izin</option>
                                <option value="TL ke Penyidikan">TL ke Penyidikan</option>
                          </select></td>

                          <td><select data-skip-name="true" name="kesimpulan[]" id="kesimpulan[]" class="form-control sm" title="Kesimpulan">
                                <option>Kesimpulan</option>
                                <option value="1">MK</option>
                                <option value="0">TMK</option>

                          </select></td>



                  

                      <td colspan="5"> <textarea  placeholder="Keterangan." name="keterangan[]" id="keterangan[]" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>

          
             
                          <td><button class="row-remove"><i class="fa fa-close"></button></td>
                  </tr>

      </table>
</div>
</div>
</div>
</div>
</div>


<!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-success"><i class="fa fa-share"></i>&nbsp Save</button>
</div>
&nbsp;
</div>
</form>
</div>
</div>
</section>
<!-- <script>
      $(document).ready(function() {
          $('#repeater').createRepeater();

    });
</script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- <script>
      $(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
});
</script> -->

<script type="text/javascript">
  $(function() {

   

    $('button.row-remove').on("click", function(e) {
      e.preventDefault();

      var form = $(this).parents('form')
      $(this).parents('tr').remove();
      

    });

    $('button.row-add').on("click", function(e) {
      e.preventDefault();

      var $table = $(this).parents('table');
      var $top = $table.find('tr.line_items').last();
      var $new = $top.clone(true);

       $new.insertAfter($top);
      $new.find('input[type=text]').val('');
    });

  });
</script>

<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css" rel="stylesheet"/>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.js"></script>

<script >
    $("select").select2();

$("select").on("select2:select", function (evt) {
  var element = evt.params.data.element;
  var $element = $(element);
  
  $element.detach();
  $(this).append($element);
  $(this).trigger("change");
});
</script>

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