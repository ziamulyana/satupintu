<?php
header("Content-type:application/vnd.ms-word");
$filename = $idSurat.".doc";
header("Content-Disposition: attachment; Filename=SuratTugas-".$filename)

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="">
	<!-- CSS buatan sendiri -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/print.css">
</head>


<body onload="window.print()">



	<?php

		function convertDay($day){
			$day = date('d',$day);
			return $day;
		}
		function convertMonthA($month){
			$month = date('m',$month);
			return $month;
		}

		function convertMonthB($month){
			if($month=="01"){
				$month = "Januari";
			}elseif($month=="02"){
				$month ="Februari";
			}elseif($month=="03"){
				$month = "Maret";
			}elseif($month=="04"){
				$month ="April";
			}elseif($month=="05"){
				$month  = "Mei";
			}elseif($month=="06"){
				$month = "Juni";
			}elseif($month=="07"){
				$month = "Juli";
			}elseif($month=="08"){
				$month = "Agustus";
			}elseif($month=="09"){
				$month = "September";
			}elseif($month=="10"){
				$month="Oktober";
			}elseif($month=="11"){
				$month="November";
			}else{
				$month="Desember";
			}
			return $month;
		}

		function convertYear($year){
			$year = date('y',$year);
			$tahun = "20".$year;
			return $tahun;
		}

		$no_surat = "";
		$nama_peg = array();
		$nip_peg = array();
		$pangkat_peg = array();
		$golongan_peg = array();
		$jabatan_peg = array();
		$maksud = "";
		$tujuan = "";
		$kendaraan = "";
		$tgl_surat = "";
		$tgl_mulai = "";
		$tgl_selesai = "";
		$tgl_mulai2;
		$tgl_selesai2;
		$mak = "";
		$nama_penandatangan = "";
		$jabatan_penandatangan = "";

		foreach($printS->result() as $row){
			array_push($nama_peg,$row->nama);
			array_push($nip_peg,$row->nip);
			array_push($pangkat_peg,$row->pangkat);
			array_push($golongan_peg,$row->golongan);
			array_push($jabatan_peg,$row->jabatan);
			$no_surat = $row->noSuratTugas;
			$maksud = $row->maksud;
			$tujuan = $row->kota;
			$kendaraan = $row->kendaraan;
			$tgl_surat =strtotime($row->tglSurat);
			$tgl_mulai =strtotime($row->tglMulai);
			$tgl_mulai2 = $row->tglMulai;
			$tgl_selesai2 = $row->tglSelesai;
			$tgl_selesai = strtotime($row->tglSelesai);
			$mak = $row->mak;
			$nama_penandatangan = $row->namaPenandatangan;
			$jabatan_penandatangan = $row->jabatanPenandatangan;
		}
	
	
	?>


	<p style="line-height: 1px;" align="center" style="font-family:bookman old style;"><u><b>SURAT TUGAS</u>
	<br/>
	Nomor : <?php echo $no_surat; ?></font></b></p>
		
		<p style="font-family:bookman old style;">Yang bertanda tangan di bawah ini Kepala Balai POM di Batam memerintahkan kepada nama tersebut dibawah ini. </p>
			
		<table style="width:100%">

		<tr>
			<td><p style="font-family:bookman old style;"><b>Menimbang</b></p></td>
			<td><p style="font-family:bookman old style;">:</p></td>
			<td></td>
			<td><p style="font-family:bookman old style;">bahwa dalam rangka melaksanakan kebijakan di bidang pengawasan obat dan makanan Balai POM di Batam tahun 2021, maka dipandang perlu mengeluarkan surat tugas ini</p></td>
		</tr>

		<tr>
			<td><p style="font-family:bookman old style;"><b>Dasar</b></p></td>
			<td><p style="font-family:bookman old style;">:</p></td>
			<td><p style="font-family:bookman old style;">1.</p></td>
			<td><p style="font-family:bookman old style;">Undang-undang Republik Indonesia No. 36 Tahun 2009 tentang Kesehatan</p></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><p style="font-family:bookman old style;">2.</p></td>
			<td><p style="font-family:bookman old style;">Undang-undang Republik Indonesia No. 8 Tahun 1999 tentang Perlindungan Konsumen</p></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><p style="font-family:bookman old style;">3.</p></td>
			<td><p style="font-family:bookman old style;">Undang-undang Republik Indonesia No. 35 Tahun 2009 tentang Narkotika</p></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><p style="font-family:bookman old style;">4.</p></td>
			<td><p style="font-family:bookman old style;">Undang-undang Republik Indonesia No. 5 Tahun 1997 tentang Psikotropika</p></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><p style="font-family:bookman old style;">5.</p></td>
			<td><p style="font-family:bookman old style;">Instruksi Presiden Republik Indonesia No. 3 Tahun 2017 tentang Peningkatan Efektivitas Pengawasan Obat dan Makanan</p></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><p style="font-family:bookman old style;">6.</p></td>
			<td><p style="font-family:bookman old style;">Peraturan Pemerintah No. 72 Tahun 1998 tentang Pengamanan Sediaan Farmasi dan Alat Kesehatan</p></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><p style="font-family:bookman old style;">7.</p></td>
			<td><p style="font-family:bookman old style;">Peraturan Kepala Badan Pengawas Obat dan Makanan Republik Indonesia Nomor 12 Tahun 2018 tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis di Lingkungan Badan Pengawas Obat dan Makanan</p></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><p style="font-family:bookman old style;">8.</p></td>
			<td><p style="font-family:bookman old style;">DIPA Balai Pengawas Obat dan Makanan di Batam Tahun Anggaran 2021</p></td>
		</tr>

		</table>

		

		<p style="font-family:bookman old style;" align="center"><b>Memberi Tugas Kepada :</b></p>
		<table style="width:100%" border="1">

		<tr>
		<th><b><p style="font-family:bookman old style;" align="center">No</p></b></th>
		<th><b><p style="font-family:bookman old style;" align="center">Nama</p></b></th>
		<th><b><p style="font-family:bookman old style;" align="center">Pangkat</p></b></th>
		<th><b><p style="font-family:bookman old style;" align="center">Golongan</p></b></th>
		<th><b><p style="font-family:bookman old style;" align="center">NIP</p></b></th>
		<th><b><p style="font-family:bookman old style;" align="center">Jabatan</p></b></th>
		</tr>

		<?php
		$huruf = array('1','2','3','4','5');
		for($i=0;$i<count($nama_peg);$i++){
		?>

		<tr>
			<td><p style="font-family:bookman old style;" align="center"><?php echo $huruf[$i]; ?></p></td>
			<td><p style="font-family:bookman old style;"><?php echo $nama_peg[$i]; ?></P></td>
			<td><p style="font-family:bookman old style;" align="center"><?php echo $pangkat_peg[$i]; ?></p></td>
			<td><p style="font-family:bookman old style;" align="center"><?php echo $golongan_peg[$i]; ?></p></td>
			<td><p style="font-family:bookman old style;" align="center"><?php echo $nip_peg[$i]; ?></p></td>
			<td><p style="font-family:bookman old style;" align="center"><?php echo $jabatan_peg[$i]; ?></p></td>
		</tr>

		<?php }?>
		</table>

		

	<p style="font-family:bookman old style;"><b>Untuk </b> : 1. <?php echo $maksud; ?> </p></td>
		
		<table style="width:100%">

		<tr>
		<td></td>
		<td></td>
		<td><p style="font-family:bookman old style;" align="left">2.</p></td>
		<td><p style="font-family:bookman old style;" align="left">Tujuan</p></td>
		<td><p style="font-family:bookman old style;" align="left">:</p></td>
		<td><p style="font-family:bookman old style;" align="left"><?php echo $tujuan; ?></p></td>
		</tr>

		<tr>
		<td></td>
		<td></td>
		<td><p style="font-family:bookman old style;" align="left">3.</p></td>
		<td><p style="font-family:bookman old style;" align="left">Kendaraan</p></td>
		<td><p style="font-family:bookman old style;" align="left">:</p></td>
		<td><p style="font-family:bookman old style;" align="left"><?php echo $kendaraan; ?></p></td>
		</tr>

		<tr>
		<td></td>
		<td></td>
		<td valign="top"><p style="font-family:bookman old style;" align="left">4.</p></td>
		<td><p style="font-family:bookman old style;" align="left">Waktu</p></td>
		<td><p style="font-family:bookman old style;" align="left">:</p></td>
		<td><p style="font-family:bookman old style;" >
		<?php
		 $datetime1 = new DateTime($tgl_mulai2);
	     $datetime2 = new DateTime($tgl_selesai2);
	     $difference = $datetime2->diff($datetime1)->days + 1;
		 echo $difference. " "; 
		?>Hari mulai tgl.<?php echo  convertDay($tgl_mulai)." ".convertMonthB(convertMonthA($tgl_mulai))." ".convertYear($tgl_mulai)?> sampai dengan <?php echo convertDay($tgl_selesai)." ".convertMonthB(convertMonthA($tgl_selesai))." ".convertYear($tgl_selesai)?></p></td>
		</tr>

		<tr>
		<td></td>
		<td></td>
		<td><p style="font-family:bookman old style;" align="left">5.</p></td>
		<td><p style="font-family:bookman old style;" align="left">Biaya</p></td>
		<td><p style="font-family:bookman old style;" align="left">:</p></td>
		<td><p style="font-family:bookman old style;" align="left">DIPA Balai Pengawas Obat dan Makanan di Batam Tahun Anggaran 2021</p></td>
		</tr>

		<tr>
		<td></td>
		<td></td>
		<td><p style="font-family:bookman old style;" align="left"></p></td>
		<td><p style="font-family:bookman old style;" align="left"></p></td>
		<td><p style="font-family:bookman old style;" align="left"></p></td>
		<td><p style="font-family:bookman old style;"align="left">MAK <?php echo $mak; ?></p></td>
		</tr>

		</table>

		<br/>

		<table style="width:100%">
		<tr>
		<td><p id="hilang">Cobacabicobacabicobacabicobacabi</p></td>
		<td>
			<p style="font-family:bookman old style;" align="left">Batam, <?php echo convertDay($tgl_surat)." ".convertMonthB(convertMonthA($tgl_surat))." ".convertYear($tgl_surat)?>
			<br/><?php echo $jabatan_penandatangan; ?>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			<?php echo $nama_penandatangan; ?></p>
			</td>
			</tr>
		</table>

	<p style="line-height: 1px;" align="center" style="font-family:bookman old style;"><b>Petugas Balai POM di Batam Tidak Menerima Gratifikasi Dalam Bentuk Apapun
	<br/>
	Laporkan Pelanggaran Melalui Layanan Lapor BPOM di bit.ly/laporbpombatam
	<br/>
	LIHAT, LAWAN, LAPOR</b></p>

	</body>
	</html>