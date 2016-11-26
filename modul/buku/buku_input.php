	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tambah Buku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Buku</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<form action="?page=buku_proses" method="post" enctype="multipart/form-data" name="form1" id="form1">
							<div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									
									<label>ISBN</label>
									<input class="form-control" name="isbn" placeholder="ISBN" required="">
								</div>
								<div class="form-group">
									
									<label>Judul</label>
									<input class="form-control" name="judul" placeholder="Judul" required="">
								</div>
								<div class="form-group">
									
									<label>Pengarang</label>
									<input class="form-control" name="pengarang" placeholder="Pengarang" required="">
								</div>
								<div class="form-group">
									
									<label>Penerbit</label>
									<input class="form-control" name="penerbit" placeholder="Penerbit" required="">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									
									<label>Tahun Terbit</label>
									<input class="form-control" name="thn_terbit" placeholder="Tahun Terbit" required="">
								</div>
								<div class="form-group">
									
									<label>Stok</label>
									<input class="form-control" name="stok" placeholder="Stok" required="">
								</div>
								<div class="form-group">
									<label>Lokasi</label>
									<select class="form-control" name=lokasi required="">
										<option>Pilih Lokasi</option>
										<option value="Rak 1">Rak 1</option>
										<option value="Rak 2">Rak 2</option>
										<option value="Rak 3">Rak 3</option>
										<option value="Rak 4">Rak 4</option>
										<option value="Rak 5">Rak 5</option>
										<option value="Rak 6">Rak 6</option>
										<option value="Rak 7">Rak 7</option>
										<option value="Rak 8">Rak 8</option>
										<option value="Rak 9">Rak 9</option>
									</select>
								</div>
								<div class="form-group">
									<label>Tanggal Input</label>
									<input class="form-control" name="tgl_input" value="<?php echo "".date("Y-m-d")."" ?>" readonly>
								</div>
								<div class="form-group">
									<label>Gambar Buku</label>
									<input class="form-control" name="nama_file" type="file">
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1">
								
								<div class="form-group">
								<label>Deskripsi</label>
								<textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"></textarea>
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