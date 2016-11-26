<?php 
	include '../config/conn.php';

	$id		= $_GET['id'];
	
	$query = "SELECT * FROM tbl_user WHERE id=$id";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	$id = $data['id'];
	$nama = $data['nama'];
	$username = $data['username'];
	$password = $data[md5('password')];
	$alamat = $data['alamat'];
	$level = $data['level'];
?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li><a href="?page=admin"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></a></li>
				<li class="active">Data Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Ubah Admin</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><?=$nama ?></div>
					<div class="panel-body">
						<form action="?page=admin_proses_edit" method="post" enctype="multipart/form-data" name="form1" id="form1">
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
							<div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									<label>Username</label>
									<input class="form-control" name="username" placeholder="Username" value="<?=$username ?>" required="">
								</div>
								<div class="form-group">	
									<label>Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password" required="">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label>Nama</label>
									<input class="form-control" name="nama" placeholder="Nama" value="<?=$nama ?>" required="">
								</div>
								<div class="form-group">
									<label>Level</label>
									<select class="form-control" name=level required="">
										<option>Pilih Level</option>
										<option value="Admin" <?php if( $lokasi=='Admin'){echo "selected"; } ?>>Admin</option>
										<option value="Manajer" <?php if( $lokasi=='Manajer'){echo "selected"; } ?>>Manajer</option>
										<option value="Pustakawan" <?php if( $lokasi=='Pustakawan'){echo "selected"; } ?>>Pustakawan</option>
									</select>
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="form-group">
									<label>Alamat</label>
									<input class="form-control" name="alamat" placeholder="Alamat" value="<?=$alamat ?>" required="">
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1 form-group">
						        <button type="submit" class="btn btn-primary">Submit</button>
						        <a href="?page=admin" class="btn btn-default">Batal</a>
					        </div>
				       	</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>