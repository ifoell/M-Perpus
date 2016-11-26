<?php 
include 'config/conn.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>M-Perpus ~ Katalog</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
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
						</div>
								<div class="col-md-1 login-do2">
									<label class="hvr-shutter-in-horizontal login-sub">
										<input type="submit" value="Cari" >
									</label>
								</div>
				</form>
								</div>
					<div class="panel-body">
						<?php $q=mysql_query("SELECT * FROM tbl_buku where judul LIKE '%$_GET[cari]%' || pengarang LIKE '%$_GET[cari]%' || penerbit LIKE '%$_GET[cari]%' order by judul"); ?>
						<table data-toggle="table">
							<tr>
								<?php

									$jml_colom=4;

									$cnt = 0;
									
									while($data=mysql_fetch_object($q))
									{
									    if ($cnt >= $jml_colom) 
									    {
										      echo "</tr><tr>";
										      $cnt = 0;
										}

										$cnt++;

									?>
									<td align=center>			 
				 <a href="katalog_detail.php?id=<?php echo $data->id; ?>"><div>
				 	<img height="240" width='180px' valign='bottom' src="modul/buku/gambar_buku/<?php echo $data->gambar; ?>">
				 </div>		 
				 <div>
				 	<?php echo $data->judul; ?></a>
				 </div>
				 </a>
			 </td>
			 
		<?php
		}
		?>

		</tr>
	</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-table.js"></script>
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
