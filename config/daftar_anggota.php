<?php
include "conn.php";

$id_anggota  = $_POST['id_anggota'];
$nama        = $_POST['nama'];
$jk 		 = $_POST['jk'];
$tgl_lahir 	 = $_POST['tgl_lahir'];
$alamat 	 = $_POST['alamat'];
$no_hp 	     = $_POST['no_hp'];
$message = "Selamat Datang di M-Perpus $nama. Nomor ID Anggota Anda : $id_anggota. Silahkan Isi Form Masuk";

$query = mysql_query("INSERT INTO tbl_anggota (id_anggota, nama, jk, tgl_lahir, alamat, no_hp) VALUES ('$id_anggota', '$nama', '$jk', '$tgl_lahir', '$alamat', '$no_hp')");

if ($query){
	echo "<script>alert('$message'); window.location = '../masuk_anggota.php'</script>";
	exec('C:\xampp\htdocs\project\m-perpus\bin\gammu-smsd-inject.exe -c C:\xampp\htdocs\project\m-perpus\bin\smsdrc EMS '.$no_hp.' -text "'.$message.'"');	
} else {
	echo "<script>alert('Silahkan Ulangi Lagi!'); window.location = '../daftar_anggota.php'</script>";	
}
?>