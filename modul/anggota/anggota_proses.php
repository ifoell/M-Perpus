<?php
include '../config/conn.php';

$id_anggota = $_POST ['id_anggota'];
$nama = $_POST ['nama'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$message = "Selamat Datang di M-Perpus $nama. Nomor ID Anggota Anda : $id_anggota. Silahkan Isi Form Masuk";
		

 $input = mysql_query("INSERT into tbl_anggota values('','$id_anggota','$nama','$jk','$tgl_lahir','$alamat','$no_hp')");
 
if ($input) {
	echo "<script> alert('Data $nama berhasil Ditambahkan') </script>";
	exec('C:\xampp\htdocs\project\m-perpus\bin\gammu-smsd-inject.exe -c C:\xampp\htdocs\project\m-perpus\bin\smsdrc EMS '.$no_hp.' -text "'.$message.'"');
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota'";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota_input'>";	
}

?>
