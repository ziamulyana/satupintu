<?php
header("Content-type:application/vnd.ms-word");
$filename = $idKw.".doc";
header("Content-Disposition: attachment; Filename=kwDakota-".$filename)

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

		foreach($kwDakota->result() as $row){

			$tanggal  = strtotime($row->tglSurat);
			$tglKw =strtotime($row->tglKwitansi);

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


			?>
			<p align="center"><b>DAFTAR PENGELUARAN RILL</b></p>
			<br>
			<p>Yang bertanda tangan di bawah ini : </p>

			<table style="width:100%">
				<tr>
					<th class="a"><p class="satu" id="space2">Nama</p></th>
					<th class="b"><p class="satu">: <?php echo $row->nama; ?></p></th>
				</tr>

				<tr>
					<td><p id="space2">Pangkat/Gol</p></td>
					<td><p>: <?php echo $row->pangkat."     /".$row->golongan; ?></p></td>
				</tr>

				<tr>
					<td><p id="space2">NIP</p></td>
					<td><p>: <?php echo $row->nip; ?></p></td>
				</tr>

				<tr>
					<td><p id="space2">Jabatan</p></td>
					<td><p>: <?php echo $row->jabatan; ?></p></td>
				</tr>	

			</table>

			<br>

			<p>Berdasarkan Surat Tugas Nomor: <?php echo $row->noSuratTugas." ".$row->urutan;?> tanggal <?php echo convertDay($tanggal)."-".convertMonthB(convertMonthA($tanggal))."-".convertYear($tanggal) ; ?> dengan ini kami menyatakan dengan sesungguhnya bahwa : </p>

			<p>1. Biaya transpor pegawai dan/atau biaya penginapan di bawah ini yang tidak dapat diperoleh bukti-bukti pengeluarannya, meliputi:</p>

				<table style="width:100%" border="1">
					<tr>
											<th ><p>Nama</p></th>
					<th><p>Uraian Biaya</p></th>
					<th><p>Jumlah</p></th>
					</tr>

					<tr>
						<td><p>1</p></td>
						<td><p>Transport Dalam Kota 1 Hari </p></td>
						<td><p>Rp 150.000 </p></td>
					</tr>

					<tr>
						<td><p> </p></td>
						<td><p>	Jumlah</p></td>
						<td><p>Rp 150.000 </p></td>
					</tr>

				</table>

			


			<p>2. Jumlah uang tersebut pada angka 1 diatas benar-benar dikeluarkan untuk pelaksanaan dinas dimaksud dan apabila di kemudian hari terdapat kelebihan atas pembayaran, kami bersedia untuk menyetorkan kelebihan tersebut ke Kas Negara.</p>
			<br>

			<p>Demikian pernyataan ini kami buat dengan sebenarnya, untuk dipergunakan sebagimana mestinya.</p>


				<table style="width:100%">
				<tr>
					<th class="c"><p><b>Mengetahui/Menyetujui</b></p></th> 
					<th class="c"><p class="satu"><b>Batam, <?php echo convertDay($tglKw)."-".convertMonthB(convertMonthA($tglKw))."-".convertYear($tglKw) ;?></b></p></th> 
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
					<td><p><b><?php echo $row->nama ?></b></p></td> 
				</tr>

					<tr>
					<td><p><b>NIP. 19830820 200712 2 001</b></p></td> 
					<td><p><b><?php echo $row->nip ?></b></p></td> 
				</tr>

			</table>

			<?php 

			break;
		}
		?>



	

</body>
</html>