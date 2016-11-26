	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Data Buku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Buku</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="judul" data-sort-order="asc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="isbn"  data-sortable="true">ISBN</th>
						        <th data-field="judul"  data-sortable="true">Judul</th>
						        <th data-field="pengarang" data-sortable="true">Pengarang</th>
						        <th data-field="penerbit" data-sortable="true">Penerbit</th>
						        <th data-field="stok" data-sortable="true">Stok</th>
						        <th data-field="lokasi" data-sortable="true">Lokasi</th>
						        <th data-field="tgl_input" data-sortable="true">Tanggal Input</th>
						        <th data-field="aksi" data-sortable="true">Aksi</th>
						    </tr>
						    </thead>
						    <?php  
								// Perintah untuk menampilkan data
								$queri="Select * From tbl_buku" ;  //menampikan SEMUA data dari tabel Anggota

								$hasil=MySQL_query ($queri);    //fungsi untuk SQL

								// perintah untuk membaca dan mengambil data dalam bentuk array
								while ($data = mysql_fetch_array ($hasil)){
								$id = $data['id'];
								 echo "    
							<tr>
							    <td></td>
							    <td>".$data['isbn']."</td>
							    <td>".$data['judul']."</td>
							    <td>".$data['pengarang']."</td>
							    <td>".$data['penerbit']."</td>
							    <td>".$data['stok']."</td>
							    <td>".$data['lokasi']."</td>
							    <td>".$data['tgl_input']."</td>"
							?>
							    <td align="center">
							    	<a href="?page=buku_detil&id=<?php echo $data['id']; ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>&nbsp&nbsp
								   	<a href="?page=buku_edit&id=<?php echo $data['id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp&nbsp
								   	<a href="?page=buku_hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
								</td>
							</tr>
								<?php } ?>

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>