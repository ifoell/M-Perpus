	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Data Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Admin</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" data-checkbox="true" ></th>
						        <th data-field="nama"  data-sortable="true">Nama</th>
						        <th data-field="username"  data-sortable="true">Username</th>
						        <th data-field="alamat" data-sortable="true">Alamat</th>
						        <th data-field="level" data-sortable="true">Level</th>
						        <?php if ($level=='Admin') { ?>
						        <th data-field="aksi" data-sortable="true">Aksi</th>
						        <?php } ?>
						    </tr>
						    </thead>
						    <?php  
								// Perintah untuk menampilkan data
								$queri="Select * From tbl_user ORDER by level" ;  //menampikan SEMUA data dari tabel Admin

								$hasil=MySQL_query ($queri);    //fungsi untuk SQL

								// perintah untuk membaca dan mengambil data dalam bentuk array
								while ($data = mysql_fetch_array ($hasil)){
								$id = $data['id'];
								 echo "    
							<tr>
							    <td></td>
							    <td>".$data['nama']."</td>
							    <td>".$data['username']."</td>
							    <td>".$data['alamat']."</td>
							    <td>".$data['level']."</td>"
							?>
							<?php if ($level=='Admin') { ?>
							    <td align="center">
								   	<a href="?page=admin_edit&id=<?php echo $data['id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp&nbsp
								   	<a href="?page=admin_hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data anggota <?php echo $data['nama']; ?> ?')"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a>
								</td>
							<?php } ?>
							</tr>
								<?php } ?>

						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>