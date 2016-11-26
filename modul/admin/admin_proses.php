<?php
include '../config/conn.php';

$nama = $_POST ['nama'];
$username = $_POST ['username'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];
		

 $input = mysql_query("INSERT into tbl_user values('','$nama','$username', MD5('$password'),'$alamat','$level')");
 
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=admin'";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=admin_input'>";	
}

?>
