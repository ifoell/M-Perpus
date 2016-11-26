<?php
	include '../../config/conn.php';
	$pinjam			= date("Y-m-d");
	$tuju_hari		= mktime(0,0,0,date("n"),date("j")+7,date("Y"));
	$kembali		= date("Y-m-d", $tuju_hari);
?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tambah Transaksi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Transaksi</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<form action="?page=transaksi_proses" method="post" enctype="multipart/form-data" name="form1" id="form1">
							<div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									<label>Judul</label>
									<select class="form-control" name=buku required="">
										<option>Pilih Judul Buku</option>
										<?php
											$query = "SELECT * FROM tbl_buku ORDER by id";
											$sql = mysql_query($query);
											while ($buku=mysql_fetch_array($sql)) {
												echo "<option value='$buku[1].$buku[2]'>$buku[2]</option>";
											}
											
										?>
									</select>
								</div>
								<div class="form-group">
									<label>Nama Peminjam</label>
									<select class="form-control" name=peminjam required="">
										<option>Pilih Peminjam</option>
										<?php 
											$query = "SELECT * FROM tbl_anggota ORDER by no";
											$sql = mysql_query($query);
											while ($nama=mysql_fetch_array($sql)) {
												echo "<option value='$nama[1].$nama[2].$nama[6]'>$nama[1]. $nama[2]. $nama[6]</option>";
											}
											
										
										?>
									</select>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label>Tanggal Pinjam</label>
									<input class="form-control" name="tgl_pinjam" value="<?php echo $pinjam; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Tanggal Kembali</label>
									<input class="form-control" name="tgl_kembali" value="<?php echo $kembali; ?>" readonly>
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="form-group">
									<label>Keterangan</label>
									<input class="form-control" name="keterangan" placeholder="keterangan">
								</div>
							</div>
								<div class="col-md-10 col-md-offset-1 form-group">
						            <button type="submit" class="btn btn-primary">Submit</button>
						            <button type="reset" class="btn btn-default">Reset</button>
					            </div>
				        	</form>
						
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>