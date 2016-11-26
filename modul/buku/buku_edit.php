<?php 
	include '../../config/conn.php';

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
	$tgl_input = $data['tgl_input'];
	$gambar = $data['gambar'];
	$deskripsi = $data['deskripsi'];
?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li><a href="?page=buku"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></a></li>
				<li class="active">Data Buku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ubah Buku</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><?=$judul ?></div>
					<div class="panel-body">
						<form action="?page=buku_proses_edit" method="post" enctype="multipart/form-data" name="form1" id="form1">
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
							<div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									
									<label>ISBN</label>
									<input class="form-control" name="isbn" placeholder="ISBN" value="<?=$isbn ?>" required="">
								</div>
								<div class="form-group">
									
									<label>Judul</label>
									<input class="form-control" name="judul" placeholder="Judul" value="<?=$judul ?>" required="">
								</div>
								<div class="form-group">
									
									<label>Pengarang</label>
									<input class="form-control" name="pengarang" placeholder="Pengarang" value="<?=$pengarang ?>" required="">
								</div>
								<div class="form-group">
									
									<label>Penerbit</label>
									<input class="form-control" name="penerbit" placeholder="Penerbit" value="<?=$penerbit ?>" required="">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									
									<label>Tahun Terbit</label>
									<input class="form-control" name="thn_terbit" placeholder="Tahun Terbit" value="<?=$thn_terbit ?>" required="">
								</div>
								<div class="form-group">
									
									<label>Stok</label>
									<input class="form-control" name="stok" placeholder="Stok" value="<?=$stok ?>" required="">
								</div>
								<div class="form-group">
									<label>Lokasi</label>
									<select class="form-control" name=lokasi required="">
										<option>Pilih Lokasi</option>
										<option value="Rak 1" <?php if( $lokasi=='Rak 1'){echo "selected"; } ?>>Rak 1</option>
										<option value="Rak 2" <?php if( $lokasi=='Rak 2'){echo "selected"; } ?>>Rak 2</option>
										<option value="Rak 3" <?php if( $lokasi=='Rak 3'){echo "selected"; } ?>>Rak 3</option>
										<option value="Rak 4" <?php if( $lokasi=='Rak 4'){echo "selected"; } ?>>Rak 4</option>
										<option value="Rak 5" <?php if( $lokasi=='Rak 5'){echo "selected"; } ?>>Rak 5</option>
										<option value="Rak 6" <?php if( $lokasi=='Rak 6'){echo "selected"; } ?>>Rak 6</option>
										<option value="Rak 7" <?php if( $lokasi=='Rak 7'){echo "selected"; } ?>>Rak 7</option>
										<option value="Rak 8" <?php if( $lokasi=='Rak 8'){echo "selected"; } ?>>Rak 8</option>
										<option value="Rak 9" <?php if( $lokasi=='Rak 9'){echo "selected"; } ?>>Rak 9</option>
									</select>
								</div>
								<div class="form-group">
									
									<label>Tanggal Input</label>
									<input class="form-control" name="tgl_input" value="<?=$tgl_input ?>" readonly>
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<center><label>Gambar Buku</label></center>
								<div class="form-group">
									<center><img src="buku/gambar_buku/<?=$gambar ?>" height="350" width="250" style="border: 1px solid black;"/></center>
									<input class="form-control" name="foto" type="file">
								</div>
								
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"><?=$deskripsi ?></textarea>
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1 form-group">
						        <button type="submit" class="btn btn-primary">Submit</button>
						        <a href="?page=buku" class="btn btn-default">Batal</a>
					        </div>
				       	</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>