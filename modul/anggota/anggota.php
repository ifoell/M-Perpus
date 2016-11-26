	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Data Anggota</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Anggota</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="id_anggota"  data-sortable="true">ID Anggota</th>
						        <th data-field="nama"  data-sortable="true">Nama</th>
						        <th data-field="jk" data-sortable="true">Jenis Kelamin</th>
						        <th data-field="tgl_lahir" data-sortable="true">Tanggal Lahir</th>
						        <th data-field="alamat" data-sortable="true">Alamat</th>
						        <th data-field="no_hp" data-sortable="true">No. Handphone</th>
						        <th data-field="aksi" data-sortable="true">Aksi</th>
						    </tr>
						    </thead>
						    <?php  
								// Perintah untuk menampilkan data
								$queri="Select * From tbl_anggota ORDER by nama" ;  //menampikan SEMUA data dari tabel Anggota

								$hasil=MySQL_query ($queri);    //fungsi untuk SQL

								// perintah untuk membaca dan mengambil data dalam bentuk array
								while ($data = mysql_fetch_array ($hasil)){
									if($data['jk']==L) {
										$jk = "Laki-Laki";
									} else {
										$jk = "Perempuan";
									}
								$id_anggota = $data['id_anggota'];
								 echo "    
							<tr>
							    <td></td>
							    <td>".$data['id_anggota']."</td>
							    <td>".$data['nama']."</td>
							    <td>".$data['jk']."</td>
							    <td>".$data['tgl_lahir']."</td>
							    <td>".$data['alamat']."</td>
							    <td>".$data['no_hp']."</td>"
							?>
							    <td align="center">
								   	<a href="?page=anggota_edit&no=<?php echo $data['no']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp&nbsp
								   	<a href="?page=anggota_hapus&no=<?php echo $data['no']; ?>" onclick="return confirm('Anda yakin ingin menghapus data anggota yang bernama <?php echo $data['nama']; ?> ?')"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
								</td>
							</tr>
								<?php } ?>

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>