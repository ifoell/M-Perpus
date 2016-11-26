<?php
include '../config/conn.php';

$id = $_POST ['id'];
$nama	= $_POST['nama'];
$username = $_POST ['username'];
$password = $_POST['password'];
$penerbit = $_POST['penerbit'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];

 $input = mysql_query("UPDATE tbl_user SET  nama='$nama',
 											username='$username',
 										 	password=md5('$password'),
										 	alamat='$alamat',
										 	level='$level'
										 	WHERE id='$id'") or die(mysql_error());
 
if ($input) {
	echo "<script> alert('Data Berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=admin'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=admin_edit&id=$id'>";
}

?>
