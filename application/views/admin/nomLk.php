<?php
header("Content-type:application/vnd.ms-word");
$filename = $idKw.".doc";
header("Content-Disposition: attachment; Filename=nominatifDakota-".$filename)

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

		$nama_nom = array();
		$nip_nom = array();
		$tr_nom = array();
		$uh_nom = array();
		$ht_nom = array();
		$tujuan = "";
		$tgl1 = "";
		$tgl2 = "";
		$lama = "";
		$mak  = "";
		$total_nom = array();
		
		foreach($nomLk->result() as $row){
			array_push($nama_nom,$row->nama);
			array_push($nip_nom,$row->nip);
			$surat = $row->noSuratTugas;
			$tujuan = $row->kota;
			$tgl1 =strtotime($row->tglMulai);
			$tgl2 = strtotime($row->tglSelesai);
			$lama = $row->lamaPerjalanan;
			$mak= $row->mak;

		}

		foreach ($uraian->result() as $row) {
			if($row->kategori == "uh"){
				array_push($uh_nom,$row->biaya);
			}elseif ($row->kategori == "tr") {
				array_push($tr_nom,$row->biaya);
			}else{
				array_push($ht_nom,$row->biaya);
			}
		}


		?>
		<p align="left">DAFTAR NOMINATIF PENGGUNAAN BIAYA PERJALANAN DINAS DALAM KOTA </p>
		<p align="left">PADA BALAI PENGAWAS OBAT DAN MAKANAN DI BATAM.</p>
		<p><b>MAK : <?php echo $mak;?></b></p>

		<table style="width:100%" border="1">
			<tr>
				<th class="a"><p class="satu" id="space2" align="center" >No.</p></th>
				<th class="a"><p class="satu" id="space2" align="center">Nama/Nip <br> Pangkat/Gol</p></th>
				<th class="a"><p class="satu" id="space2" align="center">Asal</p></th>
				<th class="a"><p class="satu" id="space2" align="center">Tujuan</p></th>
				<th class="a"><p class="satu" id="space2" align="center">Tanggal</p></th>
				<th class="a"><p class="satu" id="space2" ></p></th>
				<th class="a"><p class="satu" id="space2" align="center">Lama Perjalanan</p></th>
				<th class="a"><p class="satu" id="space2" align="center">Rincian(Rp)</p></th>
				<th class="a"><p class="satu" id="space2" align="center"></p></th>
				<th class="a"><p class="satu" id="space2" align="center"></p></th>
				<th class="a"><p class="satu" id="space2" align="center">Jumlah (Rp)</p></th>
				<th class="a"><p class="satu" id="space2" align="center" >Tanda Tangan</p></th>
			</tr>


			<tr>
				<td><p></p></td>
				<td><p></p></td>
				<td><p></p></td>
				<td><p></p></td>
				<td><p align="center">Mulai</p></td>
				<td><p align="center">Selesai</p></td>
				<td><p></p></td>
				<td><p>Transportasi</p></td>
				<td><p>Uang Harian</p></td>
				<td><p>Penginapan</p></td>
				<td><p></p></td>
				<td><p></p></td>
				
			</tr>

			<tr>
				<td><p align="center">1</p></td>
				<td><p align="center">2</p></td>
				<td><p align="center">3</p></td>
				<td><p align="center">4</p></td>
				<td><p align="center">5</p></td>
				<td><p align="center">6</p></td>
				<td><p align="center">7</p></td>
				<td><p align="center">8</p></td>
				<td><p align="center">9</p></td>
				<td><p align="center">10</p></td>
				<td><p align="center">11</p></td>
				<td><p align="center">12</p></td>
			</tr>
			<?php for ($i=0; $i < count($nama_nom) ; $i++) { 
				?>
			
				<tr>
				<td><p align="center"><?php echo $i+1;?></p></td>
				<td><p align="center"><?php echo $nama_nom[$i]."<br>".$nip_nom[$i]."<br>".$surat; ?></p></td>
				<td><p align="center">Batam</p></td>
				<td><p align="center"><?php echo $tujuan;?></p></td>
				<td><p align="center"><?php echo convertDay($tgl1)."-".convertMonthB(convertMonthA($tgl1))."-".convertYear($tgl1);?></p></td>
				<td><p align="center"><?php echo convertDay($tgl2)."-".convertMonthB(convertMonthA($tgl2))."-".convertYear($tgl2);?></p></td>
				<td><p align="center"><?php echo $lama;?> Hari</p></td>
				<td><p align="center"><?php echo $tr_nom[$i];?></p></td>
				<td><p align="center"><?php echo $uh_nom[$i];?></p></td>
				<td><p align="center"><?php echo $ht_nom[$i];?></p></td>
				<td><p align="center"><?php echo ($tr_nom[$i]+$uh_nom[$i]+$ht_nom[$i]);?></p></td>	

				<?php $total = $tr_nom[$i]+$uh_nom[$i]+$ht_nom[$i]; 
				array_push($total_nom,$total);
				?>
				<td><p ><?php echo $i+1;?>.</p></td>
			</tr>

			<?php }?>

			<tr>
				<td><p align="center"></p></td>
				<td><p align="center"></p></td>
				<td><p align="center"></p></td>
				<td><p align="center"></p></td>
				<td><p align="center"></p></td>

<td><p align="center"></p></td>
				<td><p align="center">Jumlah</p></td>
				<td><p align="center"><?php echo array_sum($tr_nom);?></p></td>
				<td><p align="center"><?php echo array_sum($uh_nom);?></p></td>
				<td><p align="center"><?php echo array_sum($ht_nom);?></p></td>
				<td><p align="center"><?php echo array_sum($total_nom);?></p></td>
				<td><p align="center"></p></td>
			</tr>

		</table>
		


		<table style="width:100%">
			<tr>
				<th><p class="satu">Mengetahui/Menyetujui</p></th> 
				<th><p class="satu">Batam, </p></th> 
			</tr>
			<tr>
				<td><p>Pejabat Pembuat Komitmen</p></td> 
				<td><p>Bendahara Pengeluaran</p></td> 
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
				<td><p><u>Paniyati, S.Farm., Apt</u></p></td> 
				<td><p><u>Deasy Mandasari, A.Md</u></p></td> 
			</tr>

			<tr>
				<td><p>NIP. 19830820 200712 2 001</p></td> 
				<td><p>NIP. 19891203 201012 2 005</p></td> 
			</tr>

		</table>


		





	</body>
	</html>