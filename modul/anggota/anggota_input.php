	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tambah Anggota</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Anggota</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<form action="?page=anggota_proses" method="post" enctype="multipart/form-data" name="form1" id="form1">
							<div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									
									<label>ID Anggota</label>
									<?php
										include('config/conn.php');

										$n = '';
										$get_maxanggota = mysql_query("select max(no) as mxanggota from tbl_anggota");
										$r = mysql_fetch_array($get_maxanggota);
										if(empty($r['mxanggota'])){
											$n =1;
										}
										else{
											$n = ($r['mxanggota'])+1;
										}
									?>
									<input class="form-control" name="id_anggota" value="<?php echo "".date("yn")."$n"."".date("i").""; ?>" readonly required="">
								</div>
								<div class="form-group">
									
									<label>Nama</label>
									<input class="form-control" name="nama" placeholder="Nama" required="">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select class="form-control" name=jk required="">
										<option>Jenis Kelamin</option>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" required="">
                                </div>
								<div class="form-group">
									
									<label>Alamat</label>
									<input class="form-control" name="alamat" placeholder="Alamat" required="">
								</div>
								<div class="form-group">
									
									<label>No. Handphone</label>
									<input class="form-control" name="no_hp" placeholder="No. Handphone" required="">
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