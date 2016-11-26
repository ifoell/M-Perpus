	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<a href="?page=buku">
					<div class="panel panel-blue panel-widget ">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<div class="large">
									<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<?php $tampil=mysql_query("select * from tbl_buku");
	                        		$total_buku=mysql_num_rows($tampil);
	                    		?>
								<div class="large"><?php echo "$total_buku"; ?></div>
								<div class="text-muted">Buku</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<a href="?page=pengunjung">
					<div class="panel panel-orange panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<div class="large">
									<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<?php $tampil=mysql_query("SELECT * FROM tbl_pengunjung WHERE tgl_kunjung>=CURDATE()");
	                        		$total_pengunjung=mysql_num_rows($tampil);
	                    		?>
								<div class="large"><?php echo "$total_pengunjung"; ?></div>
								<div class="text-muted">Pengunjung</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<a href="?page=anggota">
					<div class="panel panel-teal panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<div class="large">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<?php $tampil=mysql_query("select * from tbl_anggota");
	                        		$total_anggota=mysql_num_rows($tampil);
	                    		?>
								<div class="large"><?php echo "$total_anggota"; ?></div>
								<div class="text-muted">Anggota</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<a href="?page=transaksi">
					<div class="panel panel-red panel-widget">
						<div class="row no-padding">
							<div class="col-sm-3 col-lg-5 widget-left">
								<div class="large">
									<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
								</div>
							</div>
							<div class="col-sm-9 col-lg-7 widget-right">
								<?php $tampil=mysql_query("select * from tbl_transaksi where status='Pinjam'");
	                        		$total_transaksi=mysql_num_rows($tampil);
	                    		?>
								<div class="large"><?php echo "$total_transaksi"; ?></div>
								<div class="text-muted">Transaksi</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Statistik Data Pengunjung</div>
					<div class="panel-body">

						<?php
							$january = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 1 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$february = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 2 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$march = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 3 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$april = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 4 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$may = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 5 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$june = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 6 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$july = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 7 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$august = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 8 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$september = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 9 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$october = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 10 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$november = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 11 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
							$december = mysql_num_rows(mysql_query("SELECT * FROM tbl_pengunjung WHERE MONTH(tgl_kunjung) = 12 AND YEAR(tgl_kunjung) = YEAR(NOW())"));
						?>

					 <script>
					 	var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};
	
						var lineChartData = {
							labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
								datasets : [
									{
										label: "Pengunjung per Bulan",
										fillColor : "rgba(48, 164, 255, 0.2)",
										strokeColor : "rgba(48, 164, 255, 1)",
										pointColor : "rgba(48, 164, 255, 1)",
										pointStrokeColor : "#fff",
										pointHighlightFill : "#fff",
										pointHighlightStroke : "rgba(48, 164, 255, 1)",
										data : [<?php echo $january.",".$february.",".$march.",".$april.",".$may.",".$june.",".$july.",".$august.",".$september.",".$october.",".$november.",".$december ?>]
									}
									
								]

						}

						window.onload = function(){
							var chart1 = document.getElementById("line-chart").getContext("2d");
							window.myLine = new Chart(chart1).Line(lineChartData, {
								responsive: true
							});
							
						};
					 </script>
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-heading">Data Pengunjung Hari Ini</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="tgl_kunjung" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" >ID</th>
						        <th data-field="id_anggota"  data-sortable="true">ID Anggota</th>
						        <th data-field="nama"  data-sortable="true">Nama</th>
						        <th data-field="tgl_kunjung" data-sortable="true">Tanggal & Jam Kunjung</th>
						    </tr>
						    </thead>
						    <?php  
								// Perintah untuk menampilkan data
								$queri="SELECT * FROM tbl_pengunjung WHERE tgl_kunjung>=CURDATE()" ;  //menampikan data dari tabel pengunjung pada hari ini

								$hasil=MySQL_query ($queri);    //fungsi untuk SQL

								// perintah untuk membaca dan mengambil data dalam bentuk array
								while ($data = mysql_fetch_array ($hasil)){
								$no = $data['no'];
								echo "    
							<tr>
							    <td></td>
							    <td>".$data['id_anggota']."</td>
							    <td>".$data['nama']."</td>
							    <td>".$data['tgl_kunjung']."</td>"
							?>
							</tr>
								<?php } ?>

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	
	</div>	<!--/.main-->