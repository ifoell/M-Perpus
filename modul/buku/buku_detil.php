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
				<li class="active"><?=$judul?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Detail Buku</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="col-md-11 col-md-offset-1">	
							<?=$judul ?>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="?page=buku_edit&id=<?php echo $data['id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
						</div>
					</div>
					<div class="panel-body">
						<form action="?page=buku_proses_edit" method="post" enctype="multipart/form-data" name="form1" id="form1">
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
							<div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									
									<label>ISBN</label>
									<input class="form-control" value="<?=$isbn ?>" readonly>
								</div>
								<div class="form-group">
									
									<label>Judul</label>
									<input class="form-control" value="<?=$judul ?>" readonly>
								</div>
								<div class="form-group">
									
									<label>Pengarang</label>
									<input class="form-control" value="<?=$pengarang ?>" readonly>
								</div>
								<div class="form-group">
									
									<label>Penerbit</label>
									<input class="form-control" value="<?=$penerbit ?>" readonly>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									
									<label>Tahun Terbit</label>
									<input class="form-control" value="<?=$thn_terbit ?>" readonly>
								</div>
								<div class="form-group">
									
									<label>Stok</label>
									<input class="form-control" value="<?=$stok ?>" readonly>
								</div>
								<div class="form-group">
									<label>Lokasi</label>
									<input class="form-control" value="<?=$lokasi ?>" readonly>
								</div>
								<div class="form-group">
									
									<label>Tanggal Input</label>
									<input class="form-control" value="<?=$tgl_input ?>" readonly>
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<center><label>Gambar Buku</label></center>
								<div class="form-group">
									<center><img src="buku/gambar_buku/<?=$gambar ?>" height="350" width="250" style="border: 1px solid black;"/></center>
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea class="form-control" rows="3" readonly><?=$deskripsi ?></textarea>
								</div>
							</div>
				       	</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>