<!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('login_assets/images/icons/favicon.ico');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login_assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login_assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login_assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login_assets//vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login_assets/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login_assets/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="judul"><h2 class="title">SURAT TUGAS PELAPORAN MONITORING EVALUASI TINDAK LANJUT</h2>
				<br>
				<h2 class="title">( E-SATUPINTU )</h2>
				</div>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('login_assets/images/logo.png');?>" alt="IMG">
				</div>

				<form method="post" action="<?php echo base_url('auth/login'); ?>" role="login" class="login100-form validate-form" action="<?php echo base_url('auth/login'); ?>" method="post">

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="username" placeholder="username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
						
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" value="login" class="login100-form-btn">
							Login
						</button>
					</div>
					<div id="myalert">
						<?php echo $this->session->flashdata('alert', true); ?>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
						
							<i class="" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url('login_assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('login_assets/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?php echo base_url('login_assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('login_assets/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('login_assets/vendor/tilt/tilt.jquery.min.js');?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('login_assets/js/main.js');?>"></script>

</body>
<style>
h1, h2, h3, h4, h5, h6 {
    margin-left: 100px;
    text-align: center;
    color: #001ba3;
    -webkit-text-stroke: medium;
}
.login100-form {
    width: 270px;
    padding-top: 145px;
}
.login100-pic img {
    max-width: 100%;
    padding-top: 95px;
}
.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    margin-top: 40px;
}
</style>

</html>