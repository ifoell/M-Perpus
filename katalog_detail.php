<?php 
include 'config/conn.php';

	$id		= $_GET['id'];
	
	$query = "SELECT * FROM tbl_buku WHERE id=$id";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	$id = $data['id'];
	$isbn = $data['isbn'];
	$judul = $data['judul'];
	$pengarang = $data['pengarang'];
	$penerbit = $data['penerbit'];
	$thn_terbit = $data['thn_terbit'];
	$stok = $data['stok'];
	$lokasi = $data['lokasi'];
	$gambar = $data['gambar'];
	$deskripsi = $data['deskripsi'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>M-Perpus ~ Katalog</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				
				<a class="navbar-brand" href="index.php"><span>M-</span>Perpus</a>
				
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
		<div class="col-lg-10 col-lg-offset-1 main">			
		<div class="row">
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><center>Katalog Buku M-Perpus</center></h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-heading">
				<form action="katalog.php" method="get">
					
				<div class="login-mail2 col-md-11">
							<input type="text" placeholder="Judul, Pengarang, Penerbit,.." name="cari">
							<i class="fa fa-mobile"></i>
						</div>
								<div class="col-md-1 login-do2">
									<label class="hvr-shutter-in-horizontal login-sub">
										<input type="submit" value="Cari" >
									</label>
								</div>
				</form>
								</div>
					<div class="panel-body"><br>
						<div class="col-lg-4 col-lg-offset-1">
							<img height="340" width='240px' valign='bottom' src="modul/buku/gambar_buku/<?php echo $gambar; ?>">
						</div>
						<div class="col-lg-7">
							<div class="col-md-3">
								<h4>Judul</h4>
								<h4>Pengarang</h4>
								<h4>Penerbit</h4>
								<h4>Tahun Terbit</h4>
								<h4>Stok</h4>
								<h4>Lokasi</h4>
								<h4>Deskripsi</h4>
							</div>
							<div class="col-md-9">
								<h4> : <?php echo $judul; ?></h4>
								<h4> : <?php echo $pengarang; ?></h4>
								<h4> : <?php echo $penerbit; ?></h4>
								<h4> : <?php echo $thn_terbit; ?></h4>
								<h4> : <?php echo $stok; ?></h4>
								<h4> : <?php echo $lokasi; ?></h4>
								<h4> : <?php echo $deskripsi; ?></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>