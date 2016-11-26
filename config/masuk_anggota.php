<?php
include "conn.php";

$id_anggota  = $_POST['id_anggota'];
$nama        = $_POST['nama'];

date_default_timezone_set("Asia/Jakarta");
$date = date("Y/m/d H:i:s");

$query = mysql_query("INSERT INTO tbl_pengunjung(id_anggota, nama, tgl_kunjung) VALUES ('$id_anggota', '$nama', '$date')") or die(mysql_error());

if ($query){
	echo "<script>alert('Selamat datang di M-Perpus $nama!'); window.location = '../daftar_anggota.php'</script>";	
} else {
	echo "<script>alert('Silahkan Ulangi Lagi!'); window.location = '../daftar_anggota.php'</script>";	
}
?>