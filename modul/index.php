<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {
	include "../config/conn.php";
	$level=$_SESSION['level'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>M-Perpus ~ Administrator</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-table.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="../js/lumino.glyphs.js"></script>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span>M-</span>Perpus</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION['nama']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="../logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="form-group">
			</div>
		<ul class="nav menu">
			<li><a href="index.php"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></span> Buku 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="?page=buku">
							<span class="glyphicon glyphicon-book" aria-hidden="true"></span> Data Buku
						</a>
					</li>
					<li>
						<a class="" href="?page=buku_input">
							<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah Buku
						</a>
					</li>
				</ul>
			</li>
			<li><a href="?page=anggota"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Data Anggota</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></span> Transaksi 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="?page=transaksi">
							<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Data Transaksi
						</a>
					</li>
					<li>
						<a class="" href="?page=transaksi_input">
							<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah Transaksi
						</a>
					</li>
				</ul>
			</li>
			
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-5"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></span> Laporan 
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li>
						<a class="" href="laporan/lapor_buku.php" target="_blank">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Laporan Buku
						</a>
					</li>
					<li>
						<a class="" href="laporan/lapor_anggota.php" target="_blank">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Laporan Anggota
						</a>
					</li>
					<li>
						<a class="" href="laporan/lapor_transaksi.php" target="_blank">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Laporan Transaksi
						</a>
					</li>
				</ul>
			</li>
			<li><a href="?page=pengunjung"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Pengunjung</a></li>
			<?php if ($level=='Admin' or $level=='Manajer') { ?>
				
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-4"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></span> Admin 
				</a>
				<ul class="children collapse" id="sub-item-4">

					<li>
						<a class="" href="?page=admin">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Data Admin
						</a>
					</li>
					<li>
						<a class="" href="?page=admin_input">
							<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah Admin
						</a>
					</li>
				</ul>
			</li>
			<?php } ?>
			<li><a href="?page=tentang"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Tentang</a></li>
		</ul>
	</div><!--/.sidebar-->

		<?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
				 		default:
						include "home.php";
						break;
												
						// menu buku				
						case "buku";
						include "buku/buku.php";
						break;
						case "buku_detil";
						include "buku/buku_detil.php";
						break;
						case "buku_input";
						include "buku/buku_input.php";
						break;
						case "buku_proses";
						include "buku/buku_proses.php";
						break;
						case "buku_edit";
						include "buku/buku_edit.php";
						break;
						case "buku_proses_edit";
						include "buku/buku_proses_edit.php";
						break;
						case "buku_hapus";
						include "buku/buku_hapus.php";
						break;

						// menu pengunjung				
						case "pengunjung";
						include "pengunjung.php";
						break;
												
						// anggota
						case "anggota";
						include "anggota/anggota.php";
						break;
						case "anggota_detil";
						include "anggota/anggota_detil.php";
						break;
						case "anggota_input";
						include "anggota/anggota_input.php";
						break;
						case "anggota_proses";
						include "anggota/anggota_proses.php";
						break;
						case "anggota_edit";
						include "anggota/anggota_edit.php";
						break;
						case "anggota_proses_edit";
						include "anggota/anggota_proses_edit.php";
						break;
						case "anggota_hapus";
						include "anggota/anggota_hapus.php";
						break;
						
						
						// transaksi
						case "transaksi";
						include "transaksi/transaksi.php";
						break;
						case "transaksi_input";
						include "transaksi/transaksi_input.php";
						break;
						case "transaksi_proses";
						include "transaksi/transaksi_proses.php";
						break;
						case "transaksi_proses_kembali";
						include "transaksi/transaksi_proses_kembali.php";
						break;
						case "transaksi_proses_perpanjang";
						include "transaksi/transaksi_proses_perpanjang.php";
						break;
						case "transaksi_proses_ingat";
						include "transaksi/transaksi_proses_ingat.php";
						break;

						// User
						case "admin";
						include "admin/admin.php";
						break;
						case "admin_input";
						include "admin/admin_input.php";
						break;
						case "admin_proses";
						include "admin/admin_proses.php";
						break;
						case "admin_edit";
						include "admin/admin_edit.php";
						break;
						case "admin_proses_edit";
						include "admin/admin_proses_edit.php";
						break;
						case "admin_hapus";
						include "admin/admin_hapus.php";
						break;

						// Tentang
						case "tentang";
						include "tentang.php";
						break;
					
					}
			?>
			


	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/bootstrap-table.js"></script>
	<script>
		$(function () {
			$('#hover, #striped, #condensed').click(function () {
			var classes = 'table';
							
			if ($('#hover').prop('checked')) {
				classes += ' table-hover';
			}
			if ($('#condensed').prop('checked')) {
				classes += ' table-condensed';
			}
			$('#table-style').bootstrapTable('destroy')
			.bootstrapTable({
				classes: classes,
				striped: $('#striped').prop('checked')
			});
			});
		});
						
		function rowStyle(row, index) {
			var classes = ['active', 'success', 'info', 'warning', 'danger'];
		
			if (index % 2 === 0 && index / 2 < classes.length) {
				return {
					classes: classes[index / 2]
				};
			}
			return {};
		}
	</script>
</body>

</html>
<?php } ?>