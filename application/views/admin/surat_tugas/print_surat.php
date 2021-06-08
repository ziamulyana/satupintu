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
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/style.css">
</head>


<body onload="window.print()">

	<div class="page2">

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
			$tahun = $year;
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
			$kendaaraan = $row->kendaraan;
			$tgl_surat = $row->tglSurat;
			$tgl_mulai =strtotime($row->tglMulai);
			$tgl_selesai = strtotime($row->tglSelesai);
			$mak = $row->mak;
			$nama_penandatangan = $row->namaPenandatangan;
			$jabatan_penandatangan = $row->jabatanPenandatangan;
		}
	
	
	?>

	<p align="center"><u><b>SURAT TUGAS</b></u></p>
	<p align="center"><b>Nomor : <?php echo $no_surat; ?></b></p>
		<br>
		<p>Yang bertanda tangan di bawah ini Kepala Balai POM di Batam memerintahkan kepada nama tersebut dibawah ini. </p>
			
		<table style="width:100%">

		<tr>
			<td><p><b>Menimbang</b></p></td>
			<td><p>:</p></td>
			<td><p>bahwa dalam rangka melaksanakan kebijakan di bidang pengawasan obat dan makanan Balai POM di Batam tahun 2021, maka dipandang perlu mengeluarkan surat tugas ini</p></td>
		</tr>

		<tr>
			<td><p><b>Dasar</b></p></td>
			<td><p>:</p></td>
			<td><p>1.</p></td>
			<td><p>Undang-undang Republik Indonesia No. 36 Tahun 2009 tentang Kesehatan</p></td>
		</tr>

		<tr>
			<td><p></p></td>
			<td><p>2.</p></td>
			<td></p>Undang-undang Republik Indonesia No. 8 Tahun 1999 tentang Perlindungan Konsumen</p></td>
		</tr>
	</body>
	</html>