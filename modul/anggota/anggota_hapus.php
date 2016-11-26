<?php
include '../config/conn.php';

$no= $_GET['no'];
$query = mysql_query("DELETE FROM tbl_anggota WHERE no='$no'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	}


?>