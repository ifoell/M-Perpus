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
			<form action="config/daftar_anggota.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<input type="hidden" name="tgl_kunjung" value="<?php echo "".date("y-m-d H:i:s").""; ?>" />
				<div class="login-bottom">
					<h2><center>Daftar Anggota</center></h2>
					<div class="col-md-6">
						<div class="form-group">
                                    <label>ID Anggota</label>
						<?php
							include('config/conn.php');

							$n = '';
							$get_maxanggota = mysql_query("select max(no) as mxanggota from tbl_anggota");
							$r = mysql_fetch_array($get_maxanggota);
							if(empty($r['mxanggota'])){
								$n =1;
							}
							else{
								$n = ($r['mxanggota'])+1;
							}
						?>
                                    <input class="form-control" name="id_anggota" id="id_anggota" placeholder="ID Anggota" value="<?php echo "".date("yn")."$n"."".date("i").""; ?>" readonly required="">
                                </div>
                        <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" name="nama" id="nama" placeholder="Nama" required="">
                                </div>
						<div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option>Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="p">Perempuan</option>                 
                                    </select>
                                </div>
						</div>
					<div class="col-md-6">
						<div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required="">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" name="alamat" id="alamat" placeholder="Alamat" required="">
                                </div>
                                <div class="form-group">
                                    <label>No. Handphone</label>
                                    <input class="form-control" name="no_hp" id="no_hp" placeholder="No. Handphone" required="">
                                </div>
						</div>
					<div class="clearfix"> </div>
					<div class="col-md-12 login-do">
						<label class="hvr-shutter-in-horizontal login-sub">
							<input type="submit" value="Daftar" name="daftar" >
						</label>
						<p>Sudah Daftar Menjadi Anggota?</p>
						<a href="masuk_anggota.php" class="hvr-shutter-in-horizontal">Masuk</a>
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
	  
	</body>
</html>