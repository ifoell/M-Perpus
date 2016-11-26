	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tambah Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tambah Admin</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<form action="?page=admin_proses" method="post" enctype="multipart/form-data" name="form1" id="form1">
							<div class="col-md-5 col-md-offset-1">
								<div class="form-group">
									
									<label>Username</label>
									<input class="form-control" name="username" placeholder="Username" required="">
								</div>
								<div class="form-group">
									
									<label>Password</label>
									<input type="password" class="form-control" name="password" placeholder="Password" required="">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									
									<label>Nama</label>
									<input class="form-control" name="nama" placeholder="Nama" required="">
								</div>
								<div class="form-group">
									<label>Level</label>
									<select class="form-control" name=level required="">
										<option>Level</option>
										<?php if ($level=='Admin') { ?>
										<option value="Admin">Admin</option>
										<option value="Manajer">Manajer</option>
										<?php } 
										if ($level=='Admin' or 'Manajer'){?>
										<option value="Pustakawan">Pustakawan</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-md-10 col-md-offset-1">
								
								<div class="form-group">
									
									<label>Alamat</label>
									<input class="form-control" name="alamat" placeholder="Alamat" required="">
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