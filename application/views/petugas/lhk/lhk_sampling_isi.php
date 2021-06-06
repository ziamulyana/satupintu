<?php
header("Content-type:application/vnd.ms-word");
$filename = $idSurat.".doc";
header("Content-Disposition: attachment; Fi tanggal lename=lhk-".$filename)

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

		$nama_all = array();
		$nip_all = array();
		$pangkat_all = array();
		$golongan_all = array();
		$jabatan_all = array();
		$noSurat = ""
		$tglSurat = ""
		
		foreach($surat as $row){
			array_push($nama_all,$row->nama);
			array_push($nip_all,$row->nip);
			array_push($pangkat_all,$row->pangkat);
			array_push($golongan_all,$row->golongan);
			array_push($jabatan_all,$row->jabatan);
			$noSurat = $row->noSuratTugas;
			$tujuan = $row->kota;
			$tglSurat =strtotime($row->tglSurat);

		}



		?>
		<p align="center"><b>LAPORAN HASIL KEGIATAN</p></b>
		<p align="left"><b><u>Yth: </u></b>  Kepala Balai POM di Batam Melalui PPK</p>
		<p>Sehubungan dengan penugasan berdasarkan surat tugas dari Kepala Balai POM di Batam nomor <?php echo $noSurat; ?> tanggal <?php echo $tglSurat; ?> berikut ini kami sampaikan laporan hasil kegiatan yang telah dilaksanakan :  </p>

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

		<table style="width:100%;  border:1px solid black;border-collapse: collapse;">
			<tr>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center" >No.</p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center">Nama/NIP <br> Pangkat/Gol</p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center">Asal</p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center">Tujuan</p></th>
				<th class="a"><p class="satu" id="space2" align="center">Tanggal</p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" ></p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center">Lama Perjalanan</p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center">Rincian(Rp)</p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center"></p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center"></p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center">Jumlah (Rp)</p></th>
				<th class="a" style="border:1px solid black;"><p class="satu" id="space2" align="center" >Tanda Tangan</p></th>
			</tr>


			<tr>
				<td style="border:1px solid black;"><p></p></td>
				<td style="border:1px solid black;"><p></p></td>
				<td style="border:1px solid black;"><p></p></td>
				<td style="border:1px solid black;"><p></p></td>
				<td style="border:1px solid black;"><p align="center">Mulai</p></td>
				<td style="border:1px solid black;"><p align="center">Selesai</p></td>
				<td style="border:1px solid black;"><p></p></td>
				<td style="border:1px solid black;"><p>Transportasi</p></td>
				<td style="border:1px solid black;"><p>Uang Harian</p></td>
				<td style="border:1px solid black;"><p>Penginapan</p></td>
				<td style="border:1px solid black;"><p></p></td>
				<td style="border:1px solid black;"><p></p></td>
				
			</tr>

			<tr>
				<td style="border:1px solid black;"><p align="center">1</p></td>
				<td style="border:1px solid black;"><p align="center">2</p></td>
				<td style="border:1px solid black;"><p align="center">3</p></td>
				<td style="border:1px solid black;"><p align="center">4</p></td>
				<td style="border:1px solid black;"><p align="center">5</p></td>
				<td style="border:1px solid black;"><p align="center">6</p></td>
				<td style="border:1px solid black;"><p align="center">7</p></td>
				<td style="border:1px solid black;"><p align="center">8</p></td>
				<td style="border:1px solid black;"><p align="center">9</p></td>
				<td style="border:1px solid black;"><p align="center">10</p></td>
				<td style="border:1px solid black;"><p align="center">11</p></td>
				<td style="border:1px solid black;"><p align="center">12</p></td>
			</tr>
			<?php for ($i=0; $i < count($nama_nom) ; $i++) { 
				?>
			
				<tr>
				<td style="border:1px solid black;"><p align="center"><?php echo $i+1;?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo $nama_nom[$i]."<br>".$nip_nom[$i]."<br>".$surat; ?></p></td>
				<td style="border:1px solid black;"><p align="center">Batam</p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo $tujuan;?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo convertDay($tgl1)."-".convertMonthB(convertMonthA($tgl1))."-".convertYear($tgl1);?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo convertDay($tgl2)."-".convertMonthB(convertMonthA($tgl2))."-".convertYear($tgl2);?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo $lama;?> Hari</p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo $tr_nom[$i];?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo $uh_nom[$i];?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo $ht_nom[$i];?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo ($tr_nom[$i]+$uh_nom[$i]+$ht_nom[$i]);?></p></td>	

				<?php $total = $tr_nom[$i]+$uh_nom[$i]+$ht_nom[$i]; 
				array_push($total_nom,$total);
				?>
				<td style="border:1px solid black;"><p ><?php echo $i+1;?>.</p></td>
			</tr>

			<?php }?>

			<tr>
				<td style="border:1px solid black;"><p align="center"></p></td>
				<td style="border:1px solid black;"><p align="center"></p></td>
				<td style="border:1px solid black;"><p align="center"></p></td>
				<td style="border:1px solid black;"><p align="center"></p></td>
				<td style="border:1px solid black;"><p align="center"></p></td>

<td style="border:1px solid black;"><p align="center"></p></td>
				<td style="border:1px solid black;"><p align="center">Jumlah</p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo array_sum($tr_nom);?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo array_sum($uh_nom);?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo array_sum($ht_nom);?></p></td>
				<td style="border:1px solid black;"><p align="center"><?php echo array_sum($total_nom);?></p></td>
				<td style="border:1px solid black;"><p align="center"></p></td>
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