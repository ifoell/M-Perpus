	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Data Pengunjung</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Pengunjung</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="tgl_kunjung" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="id_anggota"  data-sortable="true">ID Anggota</th>
						        <th data-field="nama"  data-sortable="true">Nama</th>
						        <th data-field="tgl_kunjung" data-sortable="true">Tanggal & Jam Kunjung</th>
						    </tr>
						    </thead>
						    <?php  
								// Perintah untuk menampilkan data
								$queri="Select * From tbl_pengunjung" ;  //menampikan SEMUA data dari tabel pengunjung

								$hasil=MySQL_query ($queri);    //fungsi untuk SQL

								// perintah untuk membaca dan mengambil data dalam bentuk array
								while ($data = mysql_fetch_array ($hasil)){
								$id = $data['id'];
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
	</div>