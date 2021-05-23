<section class="content-header">
  <h1>
    Buat Surat Tugas
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Surat Tugas</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
   <div class="col-md-12">
     <form role="form" action="<?php echo base_url('admin/surat_tugas/surat_tugas')?>" method="post">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Pembuatan Surat Tugas</h3>
          <p><span class="wajib">* wajib diisi</span></p>
        </div>

        <div class="col-md-6">
          <hr>
          
          <!-- nomor surat -->
          <div class="form-group row">
            <label for="noSurat" class="col-sm-4 col-form-label">Nomor Surat Tugas<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="Nomor Surat Tugas" name="noSurat" id="noSurat" required>
              </div>
            </div>
          </div>

          <!-- tanggal surat -->
          <div class="form-group row">
            <label for="example-date-input" class="col-sm-5 col-form-label">Tanggal Surat Tugas<span class="wajib"> *</span></label>
            <div class="col-sm-12"> 
              <input class="form-control" type="date" name ="tanggalSurat" id="tanggalSurat" placeholder="Tanggal" required>
            </div>
          </div>

          <!-- alamat tujuan -->
          <div class="form-group row">
            <label for="kota" class="col-sm-4 col-form-label">Kota Tujuan<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <select class="form-control" name="kotaTujuan" id="kotaTujuan" required>
                <?php
                foreach ($nama_kota as $kota) {
                  echo "<option value=".$kota->id_kota.">".$kota->nama."</option>";
                }
                ?>
                <option selected="selected">- Select -</option>
                </select>
              </div>
            </div>
          </div>

          <!-- jumlah petugas -->
          <div class="form-group row">
            <label for="jumlahPetugas" class="col-sm-4 col-form-label">Jumlah Petugas<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select class="form-control" name="jumlahPetugas" id="jumlahPetugas" required>
                      <option selected="selected">- Select -</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Anggaran -->
          <div class="form-group row">
            <label for="anggaran" class="col-sm-4 col-form-label">Anggaran<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <input type="text" class="form-control" name="anggaran" id="anggaran" placeholder="Anggaran" required>
              </div>
            </div>
          </div>

          <!-- Maksud -->
          <div class="form-group row">
            <label for="maksud" class="col-sm-4 col-form-label">Maksud<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                <textarea class="form-control" name="maksud" id="maksud" placeholder="Enter.." required></textarea>
              </div>
            </div>
          </div>

        </div>


        <div class="col-md-6">
          <hr>
          
          <!-- tanggal mulai tugas -->
          <div class="form-group row">
            <label for="example-date-input" class="col-sm-5 col-form-label">Tanggal Mulai Tugas<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <input class="form-control" type="date" name ="tglMulaitugas" id="tglMulaitugas" placeholder="Tanggal Mulai Tugas" required>
            </div>
          </div>

          <!-- lama tugas -->
          <div class="form-group row">
            <label for="lamaTugas" class="col-sm-4 col-form-label">Lama Tugas<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                <input type="text" class="form-control" name="lamaTugas" id="lamaTugas" placeholder="Lama Tugas" required>
              </div>
            </div>
          </div>

          <!-- tanggal selesai tugas -->
          <div class="form-group row">
            <label for="example-date-input" class="col-sm-5 col-form-label">Tanggal Selesai Tugas<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <input class="form-control" type="date" name ="tglSelesaitugas" id="tglSelesaitugas" placeholder="Tanggal Selesai Tugasa" onclick="return chk_date()">
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

          <!-- beban biaya -->
          <div class="form-group row">
            <label for="bebanBiaya" class="col-sm-4 col-form-label">Beban Biaya<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                <input type="text" class="form-control" name="bebanBiaya" id="bebanBiaya" placeholder="Beban Biaya" required>
              </div>
            </div>
          </div>

          <!-- kendaraan -->
          <div class="form-group row">
            <label for="kendaraan" class="col-sm-4 col-form-label">Kendaraan<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-taxi"></i></span>
                <select class="form-control" name="kendaraan" id="kendaraan" required>
                  <option selected="selected">- Select -</option>
                  <option>Pesawat</option>
                  <option>Kapal laut</option>
                  <option>Roda empat</option>
                  <option>Kendaraan umum</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Nama Penanda Tangan ST -->
          <div class="form-group row">
            <label for="namaPenandatanganst" class="col-sm-6 col-form-label">Nama Penanda Tangan ST<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select class="form-control" name="namaPenandatanganst" id="namaPenandatanganst" required>
                  <option selected="selected">- Select -</option>
                  <option>Bagus Heri Purnomo, S.Si., Apt</option>
                  <option>Larasati Setyaningtyas, S.Farm., Apt</option>
                  <option>Dyah Ayu Novi Hapsari, S.Farm., Apt</option>
                  <option>Ruth Deseyanti Purba, S.Si., Apt</option>
                  <option>Irdiansyah, SH</option>
                  <option>Paniyati, S.Farm., Apt
                </select>
              </div>
            </div>
          </div>

          <!-- Jabatan Penanda Tangan ST -->
          <div class="form-group row">
            <label for="jabatanPenandatanganst" class="col-sm-6 col-form-label">Jabatan Penanda Tangan ST<span class="wajib"> *</span></label>
            <div class="col-sm-12">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select class="form-control" name="jabatanPenandantanganst" id="jabatanPenandantanganst" required>
                      <option selected="selected">- Select -</option>
                      <option>Kepala Balai POM di Batam</option>
                      <option>PLH Kepala Balai POM di Batam Koordinator Substansi Informasi dan Komunikasi</option>
                      <option>PLH Kepala Balai POM di Batam Koordinatitor Substansi Pengujian</option>
                      <option>PLH Kepala Balai POM di Batam Koordinator Substansi Pemeriksaan</option>
                      <option>PLH Kepala Balai POM di Batam Koordinator Substansi Penindakan</option>
                      <option>PLH Kepala Balai POM di Batam Kepala SUB Bagian Tata Usaha</option>
                </select>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->

    <div class="box box-primary">
      <div class="box-header with-border">

        <h3 class="box-title">Daftar Surat Tugas</h3>
          <div class="pull-right">
            <ul>
              <a class= "btn btn-primary" href="<?php echo base_url('admin/surat_tugas/form_surattugas')?>">
                  <i class="fa fa-plus"></i>&nbsp; Tambah Data 
                </a> </span>
            </ul>
                  </div>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">

                <!-- /.box-header -->
                <div class="box-body">
                  <table id="tbl" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="dt-center">No</th>
                        <th class="dt-center">Nama Petugas</th>
                        <th class="dt-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;     
                      if(isset($list_surattugas)){
                       foreach ($list_surattugas->result() as $row){
                        
                        echo "<tr>";
                        echo "<td class='dt-center'>".$no++."</td>"; 
                        echo "<td class='dt-center'>".$row->noSuratTugas."</td>";      
                        echo "<td class='dt-center'>".$row->tglSurat."</td>";
                        echo "<td class='dt-center'>".$row->maksud."</td>";
                         echo "<td class='dt-center'>".$row->kota."</td>";
                        echo "<td class='dt-center'>"?>                             
                            <a href="#" class="btn btn-success btn-sm" data-tooltip="tooltip" title="Edit"  id="editDataSuratTugas"
                            " data-noSuratTugas="<?= $row->noSuratTugas ?>" data-tglSurat="<?=  $row->tglSurat ?>" data-maksud="<?=  $row->maksud ?>" data-kota="<?=  $row->kota ?>" data-toggle="modal" data-target="#editModal" ><i class="fa fa-edit"></i></a>

                            </td>
                            
                            <?php 
                      }
                    }else{
                      echo "no record found";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <style>
      th.dt-center, td.dt-center { text-align: center; }
    </style>

  </div>
 

        <div class="box-footer">
         <button type="submit" value="submit" onclick="return chk_date()" class="btn btn-info"><i class="fa fa-print"></i> Save Document</button>
         <button type="reset"  value ="reset" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Reset Form</button>
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
