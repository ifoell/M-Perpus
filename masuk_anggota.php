<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>M-Perpus ~ Daftar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- Custom Theme files -->
		<link href="css/styles.css" rel='stylesheet' type='text/css' />
		<link href="css/font-awesome.min.css" rel="stylesheet"> 
		<script src="js/jquery-1.11.1.min.js"> </script>
		<script src="js/bootstrap.min.js"> </script>
	</head>
	<body>
		<div class="login">
			<h1><a href="index.php">M-Perpus</a></h1>
			<form action="config/masuk_anggota.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<input type="hidden" name="tgl_kunjung" value="<?php echo "".date("y-m-d H:i:s").""; ?>" />
				<div class="login-bottom">
					<h2><center>Masuk Anggota</center></h2>
					<div class="col-md-6">
						<label class="col-sm-12 control-label">No. Anggota</label><br>
						<div class="login-mail">
							<input type="text" name="id_anggota" id="id_anggota" placeholder="ID Anggota" required>
							<i class="fa fa-credit-card"></i>
						</div>
					</div>
					<div class="col-md-6">
						<label class="col-sm-12 control-label">Nama</label><br>
						<div class="login-mail">
							<input type="text" name="nama" id="nama" placeholder="Nama" required>
							<i class="fa fa-user"></i>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-12 login-do">
						<label class="hvr-shutter-in-horizontal login-sub">
							<input type="submit" value="Masuk" name="daftar" >
						</label>
						<p>Belum Menjadi Anggota?</p>
						<a href="daftar_anggota.php" class="hvr-shutter-in-horizontal">Daftar</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</form>
		</div>
		<!--
<div class="copy-right">
			<p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
		-->
	  
<!---->
	</body>
</html>
