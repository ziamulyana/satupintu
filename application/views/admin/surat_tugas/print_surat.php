<?php
header("Content-type:application/vnd.ms-word");
$filename = $idSurat.".doc";
header("Content-Disposition: attachment; Filename=suratTugas-".$filename)

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


	<p>Hello world</p>
	</body>
	</html>