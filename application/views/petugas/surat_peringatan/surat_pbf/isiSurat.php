<?php
header("Content-type:application/vnd.ms-word");
$filename = "suratTes.doc";
header("Content-Disposition: attachment; Filename=word.docx".$filename)

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- CSS buatan sendiri -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/style.css">
</head>

<body onload="window.print()">

	<div class="page">
		<!-- formatting date -->
		<?php

			$tanggal  = strtotime($tanggal);
			$tglMulaiperiksa = strtotime($tglMulaiperiksa);
			$tglSelesaiperiksa = strtotime($tglSelesaiperiksa);


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

		?>
		<!-- tabel kop surat -->
		<table style="width:100%">
			<tr>
				<!-- nomor surat -->
				<th class="satu"><p>Nomor	: <?php echo $noSurat ?></p></th>
				<!-- tanggal pembuatan surat -->
				<th class="dua"><p>Batam, <?php echo convertDay($tanggal)." ".convertMonthB(convertMonthA($tanggal))." ".convertYear($tanggal) ?></p></th> 
			</tr>
			<tr>
				<td><p>Lampiran: </p></td> 
			</tr>
			<tr>
				<td><p>Hal		: Peringatan</p></td>
			</tr>
			<tr>
				<td><p><?php echo " " ?></p></td>
			</tr>
		</table>

		<!--  tabel alamat tujuan -->
		<br>
		<table style="width:100%">
			<tr>
				<th><p class="satu"><b>Yth.</b></p></th> 
			</tr>
			<tr>
				<td><p><b>Pimpinan / Penanggung Jawab</b></p></td> 
			</tr>
			<tr>
				<td><p><b><?php echo $penerimaSurat; ?></b></p></td>
			</tr>
			<tr>
				<td><p><b>di</b></p></td>
			</tr>
			<tr>
				<td><p id="space1"><b><?php echo " ". $kotaSurat ?></b></p></td>
			</tr>
		</table>
		<!-- paragraf 1 -->
		<br>
		<p class="paragraf">Berdasarkan hasil pemeriksaan petugas Balai POM di Batam pada tanggal <?php echo convertDay($tglMulaiperiksa)." ". convertMonthB(convertMonthA($tglMulaiperiksa))." ". convertYear($tglMulaiperiksa) ?> 
		<?php if(convertYear($tglSelesaiperiksa)!=convertYear($tglMulaiperiksa)){
			echo "";
		}else{
			echo "dan ".convertDay($tglSelesaiperiksa)." ". convertMonthB(convertMonthA($tglSelesaiperiksa))." ". convertYear($tglSelesaiperiksa);
		}
		?>	
	, terhadap sarana:  </p>
	<!-- paragraf 2 -->
	<table style="width:100%">
		<tr>
			<th class="a"><p class="satu" id="space2">Nama</p></th>
			<th class="b"><p class="satu">: <?php echo $namaSarana; ?></p></th>
		</tr>

		<tr>
			<td><p id="space2">Alamat</p></td>
			<td><p>: <?php echo $alamatSarana; ?></p></td>
		</tr>

		<tr>
			<td><p id="space2">Nomor Izin</p></td>
			<td><p>: <?php echo $noIzin; ?></p></td>
		</tr>

		<tr>
			<td><p id="space2">Nama Pimpinan</p></td>
			<td><p>: <?php echo $namaPimpinan; ?></p></td>
		</tr>

		<tr>
			<td><p id="space2">Nama Penanggung Jawab</p></td>
			<td><p>: <?php echo $namaPj; ?></p></td>
		</tr>

		<tr>
			<td><p id="space2">Nomor SIPA</p></td>
			<td><p>: <?php echo $noSip; ?></p></td>
		</tr>

		<tr>
			<td><p id="space2">Nomor Telepon </p></td>
			<td><p>: <?php echo $noHp; ?></p></td>
		</tr>		

	</table>
	<!-- paragraf 3 -->
		<br>
		<p class="paragraf">Ditemukan pelanggaran sebagai berikut: </p>
		<p class="paragraf"><?php echo "<p class='paragraf'>".$detailTemuan."</p>" ?></p>
	<!-- paragraf 4 -->
		<p class="paragraf">Hal ini merupakan pelanggaran terhadap: </p>
		<p class="paragraf"><ol>
			<?php 
			foreach ($pilihPasal as $value) {
				foreach ($value as $item) {
					foreach ($item as $key) {
						echo "<li><p class='paragraf'>".$key->uu." tentang ".$key->tentang." ".$key->pasal."</p></li>";
					}
				}
			}
			?>
		</ol></p>
	<!-- paragraf 5 -->
		<p class="paragraf">Sehubungan dengan temuan tersebut di atas, kami memberikan sanksi 
			<b>PERINGATAN</b> dan kepada Saudara agar: </p>
			<p id="space1"><ol>
				<li><p class="paragraf">Melakukan tindak lanjut terhadap temuan dengan membuat <i>Corrective Action</i> dan <i>Preventive Action</i> (CAPA)</p></li>
				<li><p class="paragraf">Melaporkan hasil tindak lanjut dan CAPA tersebut paling lambat 21 (dua puluh satu) hari kerja sejak dilakukan pemeriksaan sarana dengan disertai data/dokumen pendukung Dinas Kesehatan Kota Batam
				</p></li>
				<li><p class="paragraf">Apabila CAPA tidak dilaporkan sesuai ketentuan dapat dikenakan sanksi bertingkat sesuai prosedur yang berlaku.</p></li>
				<li><p class="paragraf">Agar mentaati peraturan perundang-undangan yang berlaku untuk jaminan mutu, keamanan dan khasiat obat</p></li>
			</ol></p>
		<!-- paragraf 6 -->
		<p class="paragraf">Demikian disampaikan untuk dilaksanakan.</p>
		<!-- paragraf 7 -->
		<br>
		<table style="width:100%">
			<tr>
				<th class="c"><p class="satu" id="hilang">Cobacabicobacabicobacabicobacabi</p></th> 
				<th class="c"><p class="satu"><b>Kepala Balai Pengawas Obat dan Makanan</b></p></th> 
			</tr>
			<tr>
				<td><p id="hilang">Cobacabicobacabicobacabicobacabi</p></td> 
				<td><p><b>Di Batam</b></p></td> 
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
				<td><p id="hilang">Cobacabicobacabicobacabicobacabi</p></td> 
				<td><p><b>Bagus Heri Purnomo, S.Si., Apt.</b></p></td> 
			</tr>
			
		</table>

		<!-- paragraf 8 -->
		<?php

		function walikota($kotaSurat){
			$kalimat="";
			if($kotaSurat == "Batam"){
				$kalimat = "<li>Walikota Batam di - <b>Batam</b></li>";
			}elseif($kotaSurat == "Lingga"){
				$kalimat = "<li>Bupati Lingga di - <b>Daik</b></li>";
			}elseif($kotaSurat == "Natuna"){
				$kalimat = "<li>Bupati Kabupaten Natuna di - <b>Ranai</b></li>";
			}elseif($kotaSurat == "Bintan"){
				$kalimat = "<li>Bupati Kabupaten Bintan di - <b>Bintan</b></li>";
			}elseif($kotaSurat == "Anambas"){
				$kalimat = "<li>Bupati Kabupaten Anambas di - <b>Tarempa</b></li>";
			}else{
				$kalimat = "<li>Bupati Kabupaten Karimun di - <b>Tanjung Balai Karimun</b></li>";
			}

			return $kalimat;

		}

		function dinkes($kotaSurat){
			$kalimat="";
			if($kotaSurat ==  "Batam"){
				$kalimat = "<li>Kepala Dinas Kesehatan Kota Batam di - <b>Batam</b></li>";
			}elseif($kotaSurat == "Lingga"){
				$kalimat = "<li>Kepala Dinas Kesehatan Kabupaten Lingga di - <b>Daik</b></li>";
			}elseif($kotaSurat== "Natuna"){
				$kalimat = "<li>Kepala Dinas Kesehatan Kabupaten Natuna di - <b>Ranai</b></li>";
			}elseif($kotaSurat == "Bintan"){
				$kalimat = "<li>Kepala Dinas Kesehatan Kabupaten Bintan di - <b>Bintan</b></li>";
			}elseif($kotaSurat== "Anambas"){
				$kalimat = "<li>Kepala Dinas Kesehatan Kabupaten Anambas di - <b>Tarempa</b></li>";
			}else{
				$kalimat = "<li>Kepala Dinas Kesehatan Kabupaten Karimun di - <b>Tanjung Balai Karimun</b></li>";
			}

			return $kalimat;

		}

		function din_industri($kotaSurat){
			$kalimat="";
			if($kotaSurat ==  "Batam"){
				$kalimat = "<li>Kepala Dinas Perindustrian, Perdagangan dan Energi Sumber Daya Mineral Kota Batam di - <b>Batam</b></li>";
			}elseif($kotaSurat == "Lingga"){
				$kalimat = "<li>Kepala Dinas Perindustrian, Perdagangan dan Energi Sumber Daya Mineral Kabupaten Lingga di - <b>Daik</b></li>";
			}elseif($kotaSurat== "Natuna"){
				$kalimat = "<li>Kepala Dinas Perindustrian, Perdagangan dan Energi Sumber Daya Mineral Kabupaten Natuna di - <b>Ranai</b></li>";
			}elseif($kotaSurat == "Bintan"){
				$kalimat = "<li>Kepala Dinas Perindustrian, Perdagangan dan Energi Sumber Daya Mineral Kabupaten Bintan di - <b>Bintan</b></li>";
			}elseif($kotaSurat== "Anambas"){
				$kalimat = "<li>Kepala Dinas Perindustrian, Perdagangan dan Energi Sumber Daya Mineral Kabupaten Anambas di - <b>Tarempa</b></li>";
			}else{
				$kalimat = "<li>Kepala Dinas Perindustrian, Perdagangan dan Energi Sumber Daya Mineral Kabupaten Karimun di - <b>Tanjung Balai Karimun</b></li>";
			}

			return $kalimat;
		}

		function dinper($kotaSurat){
			$kalimat="";
			if($kotaSurat ==  "Batam"){
				$kalimat = "<li>Kepala Dinas Perindustrian dan Perdagangan Kota Batam di - <b>Batam</b></li>";
			}elseif($kotaSurat == "Lingga"){
				$kalimat = "<li>KKepala Dinas Perindustrian dan Perdagangan Kabupaten Lingga di - <b>Daik</b></li>";
			}elseif($kotaSurat== "Natuna"){
				$kalimat = "<li>Kepala Dinas Perindustrian dan Perdagangan Kabupaten Natuna di - <b>Ranai</b></li>";
			}elseif($kotaSurat == "Bintan"){
				$kalimat = "<li>Kepala Dinas Perindustrian dan Perdagangan Kabupaten Bintan di - <b>Bintan</b></li>";
			}elseif($kotaSurat== "Anambas"){
				$kalimat = "<li>Kepala Dinas Perindustrian dan Perdagangan Kabupaten Anambas di - <b>Tarempa</b></li>";
			}else{
				$kalimat = "<li>Kepala Dinas Perindustrian dan Perdagangan Kabupaten Karimun di - <b>Tanjung Balai Karimun</b></li>";
			}

			return $kalimat;
		}
		echo "<br>";
		echo "<p class='paragraf'>Tembusan disampaikan Kepada Yth : </p>";
		echo "<p class='paragraf'>";
		echo "<ol>";
		echo "<li>Direktur Pengawasan Distribusi dan Pelayanan Obat, Narkotika, Psikotropika, dan Prekursor Badan POM RI di - <b>Jakarta</b></li>";
		echo "<li>Kepala Dinas Kesehatan Provinsi Kepulauan Riau di - <b>Dompak</b></li>";
		echo "<li>Ketua PD Ikatan Apoteker Provinsi Kepri di - <b>Batam</b></li>";
		echo "<li>Arsip</li>";
		echo "</ol>";
		echo "</p>";

		?>
	</div>
</body>
</html>