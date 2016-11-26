<?php 
    include '../config/conn.php';

    $no     = $_GET['no'];
    
    $query = "SELECT * FROM tbl_anggota WHERE no=$no";
    $sql = mysql_query($query);
    $data = mysql_fetch_array($sql);
    $no = $data['no'];
    $id_anggota = $data['id_anggota'];
    $nama = $data['nama'];
    $jk = $data['jk'];
    $tgl_lahir = $data['tgl_lahir'];
    $alamat = $data['alamat'];
    $thn_terbit = $data['thn_terbit'];
    $no_hp = $data['no_hp'];
?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Edit Anggota</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Anggota</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="col-md-10 col-md-offset-1"><?=$nama ?></div>
                    </div>
                    <div class="panel-body">
                        <form action="?page=anggota_proses_edit" method="post" enctype="multipart/form-data" name="form1" id="form1">
                            <input type="hidden" name="no" value="<?php echo $no; ?>" />
                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-group">
                                    <label>ID Anggota</label>
                                    <input class="form-control" name="id_anggota" placeholder="ID Anggota" value="<?=$id_anggota ?>" readonly required="">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" name="nama" placeholder="Nama" value="<?=$nama ?>" required="">
                                </div>
                                    
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jk" class="form-control">
                                        <option>Jenis Kelamin</option>
                                        <option value="L" <?php if( $jk=='L'){echo "selected"; } ?>>Laki-Laki</option>
                                        <option value="p" <?php if( $jk=='P'){echo "selected"; } ?>>Perempuan</option>                 
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" value="<?=$tgl_lahir ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" name="alamat" placeholder="Alamat" value="<?=$alamat ?>" required="">
                                </div>
                                <div class="form-group">
                                    <label>No. Handphone</label>
                                    <input class="form-control" name="no_hp" placeholder="No. Handphone" value="<?=$no_hp ?>" required="">
                                </div>
                            </div>
                            <div class="col-md-10 col-md-offset-1 form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="?page=anggota" class="btn btn-default">Batal</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>