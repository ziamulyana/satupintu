<?php
header("Content-type:application/vnd.ms-word");
$filename = $idSurat . ".doc";
header("Content-Disposition: attachment; Filename=SPD-" . $filename)

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

	<div class="page2">
	</div>


	<?php

	function convertDay($day)
	{
		$day = date('d', $day);
		return $day;
	}
	function convertMonthA($month)
	{
		$month = date('m', $month);
		return $month;
	}

	function convertMonthB($month)
	{
		if ($month == "01") {
			$month = "Januari";
		} elseif ($month == "02") {
			$month = "Februari";
		} elseif ($month == "03") {
			$month = "Maret";
		} elseif ($month == "04") {
			$month = "April";
		} elseif ($month == "05") {
			$month  = "Mei";
		} elseif ($month == "06") {
			$month = "Juni";
		} elseif ($month == "07") {
			$month = "Juli";
		} elseif ($month == "08") {
			$month = "Agustus";
		} elseif ($month == "09") {
			$month = "September";
		} elseif ($month == "10") {
			$month = "Oktober";
		} elseif ($month == "11") {
			$month = "November";
		} else {
			$month = "Desember";
		}
		return $month;
	}

	function convertYear($year)
	{
		$year = date('y', $year);
		$tahun = "20" . $year;
		return $tahun;
	}

	$no_surat = "";
	$nama_peg = "";
	$nip_peg = "";
	$pangkat_peg = "";
	$golongan_peg = "";
	$jabatan_peg = "";
	$urutan_peg = "";
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
	$nama_ppk = "";
	$nip_ppk = "";
	$nama_pejabat = "";
	$jabatan_pejabat = "";
	$nip_pejabat = "";

	foreach ($printS->result() as $row) {
		$nama_peg =  $row->nama;
		$nip_peg = $row->nip;
		$pangkat_peg = $row->pangkat;
		$golongan_peg = $row->golongan;
		$jabatan_peg =  $row->jabatan;
		$urutan_peg = $row->urutan;
		$no_surat = $row->noSuratTugas;
		$maksud = $row->maksud;
		$tujuan = $row->kota;
		$kendaraan = $row->kendaraan;
		$tgl_surat = strtotime($row->tglSurat);
		$tgl_mulai = strtotime($row->tglMulai);
		$tgl_mulai2 = $row->tglMulai;
		$tgl_selesai2 = $row->tglSelesai;
		$tgl_selesai = strtotime($row->tglSelesai);
		$mak = $row->mak;
	}

	foreach ($pejabatPpk as $row) {
		$nama_ppk = $row->nama;
		$nip_ppk = $row->nip;
	}

	foreach ($pejabatTtd as $row) {
		$nama_pejabat = $row->nama;
		$jabatan_pejabat = $row->jabatan;
		$nip_pejabat = $row->nip;
	}


	?>

	<table style="font-family:bookman old style;font-size: 10px;">

		<tr>
			<td>
				<p id="hilang">aaaaaaaaaaaaaaaaaazazazazazazazazazazazazazazaz</p>
			</td>
			<td>
				<p style="line-height: 1px;">PERATURAN DIREKTUR JENDERAL PERBENDAHARAAN
					<br />
					NOMOR-22/PB/2013 TENTANG KETENTUAN LEBIH LANJUT
					<br />
					PELAKSANAAN PERJALANAN DINAS DALAM NEGERI BAGI PEJABAT
					<br />
					NEGARA, PEGAWAI NEGERI DAN PEGAWAI TIDAK TETAP
				</p>
			</td>
		</tr>
	</table>

	<br />


	<table style="width:100%;font-size: 14px;">
		<tr>
			<td>
				<p style="font-family:bookman old style;" align="center">Kementerian Negara/Lembaga
					<br />
					<b>BALAI PENGAWAS OBAT DAN MAKANAN DI
						<br />
						BATAM
						<br />
						Jalan Hang Jebat Batu Besar Nongsa
						<br />
						BATAM</b>
				</p>
			</td>
			<td>
				<p style="font-family:bookman old style;" align="left">Lembar Ke<br />Kode No<br />Nomor</p>
			</td>
			<td>
				<p style="font-family:bookman old style;" align="left">:<br />:<br />:</p>
			</td>
			<td>
				<p style="font-family:bookman old style;" align="left"><br /><br /><?php echo $no_surat; ?></p>
		</tr>
	</table>



	<p style="font-family:bookman old style;" align="center"><b>SURAT PERJALANAN DINAS (SPD)</u></p>

	<table style="width:100%;font-size: 14px;" border="1">
		<tr>
			<td>
				<p style="font-family:bookman old style;">1. Pejabat Pembuat Komitmen</p>
			</td>
			<td>
				<p style="font-family:bookman old style;"><b><?php echo $nama_ppk; ?></b></p>
				<p style="font-family:bookman old style;"><b><?php echo $nip_ppk; ?></b></p>
			</td>
		</tr>

		<tr>
			<td>
				<p style="font-family:bookman old style;">2. Nama / NIP Pegawai yang melaksanakan perjalanan dinas</p>
			</td>
			<td>
				<p style="font-family:bookman old style;"><?php echo $nama_peg; ?> &nbsp;&nbsp;&nbsp;&nbsp;/<?php echo $nip_peg; ?></p>
			</td>
		</tr>


		<tr>
			<td valign="top">
				<p style="font-family:bookman old style;">3. a. Pangkat dan Golongan
					<br />&nbsp;&nbsp;&nbsp;&nbsp;b. Jabatan/Instansi
					<br />&nbsp;&nbsp;&nbsp;&nbsp;c. Tingkat Biaya Perjalanan Dinas
				</p>
			</td>
			<td valign="top">
				<p style="font-family:bookman old style;">a. <?php echo $pangkat_peg; ?> / <?php echo $golongan_peg; ?>
					<br />b. <?php echo $jabatan_peg; ?>
					<br />c.
				</p>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<p style="font-family:bookman old style;">4. Maksud Perjalanan Dinas</p>
			</td>
			<td valign="top">
				<p style="font-family:bookman old style;"><?php echo $maksud; ?></p>
			</td>
		</tr>

		<tr>
			<td>
				<p style="font-family:bookman old style;">5. Alat angkut yang dipergunakan</p>
			</td>
			<td>
				<p style="font-family:bookman old style;"><?php echo $kendaraan; ?></p>
			</td>
		</tr>

		<tr>
			<td>
				<p style="font-family:bookman old style;">6. a. Tempat Berangkat
					<br />&nbsp;&nbsp;&nbsp;&nbsp;b. Tempat Tujuan
				</p>
			</td>

			<td>
				<p style="font-family:bookman old style;">a. Kota Batam
					<br />b. <?php echo $tujuan; ?>
				</p>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<p style="font-family:bookman old style;">7. a. Lama perjalanan Dinas
					<br />&nbsp;&nbsp;&nbsp;&nbsp;b. Tanggal berangkat
					<br />&nbsp;&nbsp;&nbsp;&nbsp;c. Tanggal harus kembali/tiba di tempat *)
				</p>
			</td>

			<td valign="top">
				<?php
				$datetime1 = new DateTime($tgl_mulai2);
				$datetime2 = new DateTime($tgl_selesai2);
				$difference = $datetime2->diff($datetime1)->days + 1;
				?>
				<p style="font-family:bookman old style;">a. <?php echo $difference . " Hari" ?>
					<br />b. <?php echo  convertDay($tgl_mulai) . " " . convertMonthB(convertMonthA($tgl_mulai)) . " " . convertYear($tgl_mulai) ?>
					<br />c. <?php echo convertDay($tgl_selesai) . " " . convertMonthB(convertMonthA($tgl_selesai)) . " " . convertYear($tgl_selesai) ?>
				</p>
			</td>
		</tr>

	</table>

	<table style="width:100%;font-size: 14px;" border="1">
		<tr>
			<td>
				<p style="font-family:bookman old style;">8. Pengikut : Nama
					<br />&nbsp;&nbsp;&nbsp;&nbsp;1.
					<br />&nbsp;&nbsp;&nbsp;&nbsp;2.
					<br />&nbsp;&nbsp;&nbsp;&nbsp;3.
				</p>
			</td>

			<td valign="top">
				<p style="font-family:bookman old style;">Tanggal Lahir</p>
			</td>
			<td valign="top">
				<p style="font-family:bookman old style;">Keterangan</p>
			</td>
		</tr>

	</table>

	<table style="width:100%;font-size: 14px;" border="1">
		<tr>
			<td>
				<p style="font-family:bookman old style;">9. Pembebanan Anggaran
					<br />&nbsp;&nbsp;&nbsp;&nbsp;a. Instansi
					<br />&nbsp;&nbsp;&nbsp;&nbsp;b. Mata Anggaran
				</p>
			</td>

			<td>
				<p style="font-family:bookman old style;">
					<br />a. Balai Pengawas Obat dan Makanan di Batam
					<br />b. <?php echo $mak; ?>
				</p>
			</td>
		</tr>

		<tr>
			<td>
				<p style="font-family:bookman old style;">10. Keterangan Lain-Lain</p>
			</td>
			<td></td>
		</tr>
	</table>
	<br />

	<table style="width:100%;font-size: 14px;">
		<tr>
			<td>
				<p id="hilang">Cobacabicobacabicobacabicobacabi</p>
			</td>
			<td>
				<p style="font-family:bookman old style;" align="left">Dikeluarkan di : Batam
					<br />Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  convertDay($tgl_surat) . " " . convertMonthB(convertMonthA($tgl_surat)) . " " . convertYear($tgl_surat) ?>
					<br /><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
					<br />Pejabat Pembuat Komitmen
					<br />
					<br />
					<br />
					<br />
					<br />
					<br /><b>Paniyati, S.Farm., Apt
						<br />NIP. 19830820 200712 2 001</b>
				</p>
			</td>
		</tr>

	</table>

	<table style="width:100%;font-size: 14px;" border="1">
		<tr>
			<td>
				<p id="hilang">Cobacabicobacabicobacabicobacabi</p>
			</td>
			<td>
				<p style="font-family:bookman old style;" align="left">Berangkat dari &nbsp;&nbsp;&nbsp; : Batam
					<br />Pada Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  convertDay($tgl_surat) . " " . convertMonthB(convertMonthA($tgl_surat)) . " " . convertYear($tgl_surat) ?>
					<br />Tempat Tujuan &nbsp;&nbsp;&nbsp;: <?php echo $tujuan; ?>
					<br /><?php echo $jabatan_pejabat; ?>
					<br />
					<br />
					<br />

					<br /><b><?php echo $nama_pejabat; ?>
						<br /><?php echo $nip_pejabat; ?></b>
				</p>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<p style="font-family:bookman old style;" align="left">II. Tiba di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
					<br />&nbsp;&nbsp;&nbsp;&nbsp;Pada Tanggal :
				</p>
			</td>
			<td>
				<p style="font-family:bookman old style;" align="top-left">Berangkat dari :
					<br />Ke &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
					<br />Pada Tanggal &nbsp;&nbsp;:
				</p>
				<br />
				<br />
				<br />
				<br />
				<br />

			</td>
		</tr>

		<tr>
			<td valign="top">
				<p style="font-family:bookman old style;" align="left">III. Tiba di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
					<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada Tanggal :
				</p>
			</td>
			<td>
				<p style="font-family:bookman old style;" align="top-left">Berangkat dari :
					<br />Ke &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
					<br />Pada Tanggal &nbsp;&nbsp;:
				</p>
				<br />
				<br />
				<br />
				<br />
				<br />
			</td>
		</tr>

		<tr>
			<td valign="top">
				<p style="font-family:bookman old style;" align="left">IV. Tiba di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
					<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada Tanggal :
				</p>
			</td>
			<td>
				<p style="font-family:bookman old style;" align="top-left">Berangkat dari :
					<br />Ke &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
					<br />Pada Tanggal &nbsp;&nbsp;:
				</p>
				<br />
				<br />
				<br />
				<br />
				<br />
			</td>
		</tr>

		<tr>
			<td valign="top">
				<p style="font-family:bookman old style;" align="left">Tiba Kembali &nbsp;&nbsp;&nbsp; : Batam
					<br />(Tempat Kedudukan)
					<br />Pada Tanggal &nbsp;&nbsp;&nbsp;&nbsp;:
					<br />
					<br />Pejabat Pembuat Komitmen
					<br />
					<br />
					<br />
					<br /><b><?php echo $nama_ppk; ?>
						<br /><?php echo $nip_ppk; ?></b>
				</p>
			</td>

			<td valign="top">
				<p style="font-family:bookman old style;" align="left">Telah diperiksa dengan keterangan bahwa perjalanan tersebut diatas benar dilakukan atas perintahnya dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya
					<br />Pejabat Pembuat Komitmen
					<br />
					<br />
					<br />
					<br /><b><?php echo $nama_ppk; ?>
						<br /><?php echo $nip_ppk; ?></b>
				</p>
			</td>
		</tr>
	</table>

	<table style="width:100%;font-size: 14px;" border="1">
		<tr>
			<td valign="top">
				<p style="font-family:bookman old style;" align="left">VI. Keterangan Lain-Lain
			</td>
		</tr>

		<tr>
			<td valign="top">
				<p style="font-family:bookman old style;" align="left">VII. PERHATIAN :</p>
				<p style="font-family:bookman old style;" align="left">PPK yang menerbitkan SPD, pegawai yang melakukan perjalanan dinas, para pejabat yang mengesahkan tanggal berangkat/tiba, serta bendahara bertanggung jawab berdasarkan peraturan-peraturan keuangan Negara apabila negara menderita rugi akibat kesalahan, kelalaian dan kealpaannya.</p>
			</td>
		</tr>
	</table>




	</div>
</body>

</html>