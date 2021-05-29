<?php
header("Content-type:application/vnd.ms-word");
$filename = "1".".doc";
header("Content-Disposition: attachment; Filename=SuratPeringatan-".$filename)
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
		<p>Hello world</p>
		</div>
</body>
</html>