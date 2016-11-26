<?php include 'transaksi_fungsi.php'; ?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Data Transaksi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Transaksi</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-heading">Tabel Peminjaman</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="id_anggota"  data-sortable="true">ID Anggota</th>
						        <th data-field="nama"  data-sortable="true">Nama</th>
						        <th data-field="no_hp"  data-sortable="true">Nomor Handphone</th>
						        <th data-field="buku" data-sortable="true">Buku</th>
						        <th data-field="tgl_pinjam" data-sortable="true">Tanggal Pinjam</th>
						        <th data-field="tgl_kembali" data-sortable="true">Tanggal Kembali</th>
						        <th data-field="terlambat" data-sortable="true">Terlambat</th>
						        <th data-field="status" data-sortable="true">Status</th>
						        <th data-field="aksi" data-sortable="true">Aksi</th>
						    </tr>
						    </thead>
						    <?php
						    	
								// Perintah untuk menampilkan data
								$queri="Select * From tbl_transaksi WHERE status='Pinjam'" ;  //menampikan SEMUA data dari tabel Transaksi

								$hasil=MySQL_query ($queri);    //fungsi untuk SQL

								// perintah untuk membaca dan mengambil data dalam bentuk array
								while ($data = mysql_fetch_array ($hasil)){
								$id = $data['id'];
								 echo "
							<tr>
							    <td></td>
							    <td>".$data['id_anggota']."</td>
							    <td>".$data['nama']."</td>
							    <td>".$data['no_hp']."</td>
							    <td>".$data['judul']."</td>
							    <td>".$data['tgl_pinjam']."</td>
							    <td>".$data['tgl_kembali']."</td>
							    <td>";
										$tgl_dateline=$data['tgl_kembali'];
										$tgl_kembali=date('Y-m-d');
										$lambat=terlambat($tgl_dateline, $tgl_kembali);
										$denda=$lambat*'500';
										if ($lambat>0) {
											echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
										}
										else {
											echo $lambat." hari";
										}
								echo "</td>
							    <td>".$data['status']."</td>"
							?>
							    <td align="center">
								   	<a href="?page=transaksi_proses_kembali&id=<?php echo $data['id']?>&judul=<?php echo $data['judul']?>" class="btn btn-primary">Kembali</a>&nbsp&nbsp
								   	<?php 
								   	$sekarang		= strtotime(date("Y-m-d"));
								   	$enam_hari		= mktime(0,0,0,date("n"),date("j")+6,date("Y"));
								   	
									$tgl1 = date('Y-m-d', strtotime('+6 days', strtotime($data['tgl_pinjam']))); //operasi penjumlahan tanggal sebanyak 6 hari
									$tgl2 = strtotime($tgl1);
									if ($sekarang >= $tgl2) { ?>
										<a href="?page=transaksi_proses_ingat&id=<?php echo $data['id'] ?>" class="btn btn-warning">Ingatkan</a> &nbsp&nbsp
									<?php } ?>
								   	<a href="?page=transaksi_proses_perpanjang&id=<?php echo $data['id'] ?>&judul=<?php echo $data['judul'] ?>&tgl_kembali=<?php echo $data['tgl_kembali']; ?>&lambat=<?php echo $data['lambat']; ?>" class="btn btn-danger">Perpanjang</a>
								</td>
							</tr>
								<?php } ?>

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-heading">Tabel Buku Kembali</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="id_anggota"  data-sortable="true">ID Anggota</th>
						        <th data-field="nama"  data-sortable="true">Nama</th>
						        <th data-field="judul" data-sortable="true">Judul</th>
						        <th data-field="tgl_pinjam" data-sortable="true">Tanggal Pinjam</th>
						        <th data-field="tgl_kembali" data-sortable="true">Tanggal Kembali</th>
						        <th data-field="status" data-sortable="true">Status</th>
						    </tr>
						    </thead>
						    <?php
						    	
								// Perintah untuk menampilkan data
								$queri="Select * From tbl_transaksi WHERE status='Kembali'" ;  //menampikan SEMUA data dari tabel Transaksi

								$hasil=MySQL_query ($queri);    //fungsi untuk SQL

								// perintah untuk membaca dan mengambil data dalam bentuk array
								while ($data = mysql_fetch_array ($hasil)){
								$id = $data['id'];
								 echo "
							<tr>
							    <td></td>
							    <td>".$data['id_anggota']."</td>
							    <td>".$data['nama']."</td>
							    <td>".$data['judul']."</td>
							    <td>".$data['tgl_pinjam']."</td>
							    <td>".$data['tgl_kembali']."</td>
							    <td>".$data['status']."</td>"
							?>
							</tr>
								<?php } ?>

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->

	</div>