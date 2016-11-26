<?php
include '../config/conn.php';

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat	= $_POST['alamat'];
$no_hp = $_POST['no_hp'];

 $input = mysql_query("UPDATE tbl_anggota SET nama='$nama',
											jk='$jk',
											tgl_lahir='$tgl_lahir',
											alamat='$alamat',
											no_hp='$no_hp'
											where id_anggota='$id_anggota'
											");
 
if ($input) {
	echo "<script> alert('Data berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";	
}
else {
	echo "<script> alert('Data Gagal Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_anggota'>";
}

?>
