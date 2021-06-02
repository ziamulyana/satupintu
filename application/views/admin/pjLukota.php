<?php
header("Content-type:application/vnd.ms-word");
$filename = $idKw.".doc";
header("Content-Disposition: attachment; Filename=kwLukota-".$filename)

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="">
	<!-- CSS buatan sendiri -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/style.css">
</head>


<body onload="window.print()">

	<div class="page">
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
		$nama = "";
		$nip = "";
		$tujuan = "";
		$tglMulai = "";
		$tglSelesai = "";
		$maksud = "";
		$tglKw  = "";
		$uraian_kw = array();
		$biaya_kw = array();
		foreach($kwLukota->result() as $row){
			$nama = $row->nama;
			$nip = $row->nip;
			$tujuan = $row->kota;
			$tglMulai =$row->tglMulai;
			$tglSelesai = $row->tglSelesai;
			$maksud = $row->maksud;
			$tglKw= strtotime($row->tglKwitansi);
			array_push($uraian_kw,$row->uraian);
			array_push($biaya_kw,$row->biaya);

		}

		$jumlahPerjalanan = 0;

		?>
		<p align="center"><b>BIAYA PERJALANAN DINAS</b></p>
		<p align="center"><b><?php  echo $maksud; ?></b></p>

		<table style="width:100%">
			<tr>
				<th class="a"><p class="satu" id="space2">Nama</p></th>
				<th class="b"><p class="satu">: <?php echo $nama; ?></p></th>
			</tr>


			<tr>
				<td><p id="space2">NIP</p></td>
				<td><p>: <?php echo $nip; ?></p></td>
			</tr>

			<tr>
				<td><p id="space2">Tujuan</p></td>
				<td><p>: <?php echo $tujuan; ?></p></td>
			</tr>	

			<tr>
				<td><p id="space2">Waktu Pelaksanaan</p></td>
				<td><p>: <?php echo $tglMulai."-".$tglSelesai; ?></p></td>
			</tr>	

			<tr>
				<td><p id="space2">Maksud Perjalanan</p></td>
				<td><p>: <?php echo $maksud; ?></p></td>
			</tr>	

		</table>

		<?php

		$no=1;

		?>	

		<br>


		<table style="width:100%" border="1">
			<tr>
				<th ><p>No</p></th>
				<th><p>Perincian Biaya</p></th>
				<th><p>Jumlah</p></th>
			</tr>

			<?php for($i=0;$i<count($biaya_kw);$i++){ ?>

				<tr>
					<td><p><?php echo $i+1; ?></p></td>
					<td><p><?php echo $uraian_kw[$i]; ?></p></td>
					<td><p><?php echo "Rp       ".$biaya_kw[$i]; ?></p></td>
				</tr>

			<?php }?>
			<td><p><?php echo ""; ?></p></td>
			<td><p><?php echo "Jumlah"; ?></p></td>
			<td><p><?php echo "Rp       ".array_sum($biaya_kw); ?></p></td>

		</table>
		<br>
		<table style="width:100%">
			<tr>
				<th><p><b>Mengetahui/Menyetujui</b></p></th> 
				<th><p class="satu"><b>Batam, <?php echo convertDay($tglKw)."-".convertMonthB(convertMonthA($tglKw))."-".convertYear($tglKw) ;?></b></p></th> 
			</tr>
			<tr>
				<td><p><b>Pejabat Pembuat Komitmen</b></p></td> 
				<td><p><b>Petugas</b></p></td> 
			</tr>
			<tr>
				<td><p id="hilang">Cobacabicobacabicobacabicobacabi</p></td> 
				<td><p id="hilang">Cobacabicobacabicobacabicobacabi</p></td> 
			</tr>
			<tr>
				<td><p id="hilang">Cobacabicobacabicobacabicobacabi</p></td> 
				<td><p id="hilang">Cobacabicobacabicobacabicobacabi</p></td> 
			</tr>
			<tr>
				<td><p id="hilang">Cobacabicobacabicobacabicobacabi</p></td> 
				<td><p id="hilang">Cobacabicobacabicobacabicobacabi</p></td> 
			</tr>
			<tr>
				<td><p><b>Paniyati, S.Farm., Apt</b></p></td> 
				<td><p><b><?php echo $nama; ?></b></p></td> 
			</tr>

			<tr>
				<td><p><b>NIP. 19830820 200712 2 001</b></p></td> 
				<td><p><b><?php echo $nip; ?></b></p></td> 
			</tr>

		</table>


		





	</body>
	</html>