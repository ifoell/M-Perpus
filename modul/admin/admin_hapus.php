<?php
include '../config/conn.php';

$id= $_GET['id'];
$query = mysql_query("DELETE FROM tbl_user WHERE id='$id'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=admin'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=admin'>";
	}


?>