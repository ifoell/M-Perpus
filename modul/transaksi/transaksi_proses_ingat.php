<?php 
	include '../../config/conn.php';

	$id				= $_GET['id'];
	
	$query 			= "SELECT * FROM tbl_transaksi WHERE id=$id";
	$sql			= mysql_query($query);
	$data			= mysql_fetch_array($sql);
	$id 			= $data['id'];
	$id_anggota 	= $data['id_anggota'];
	$nama			= $data['nama'];
	$no_hp			= $data['no_hp'];
	$judul			= $data['judul'];
	$tgl_pinjam		= $data['tgl_pinjam'];
	$tgl_kembali	= $data['tgl_kembali'];
	$tgl_kembali2	= strtotime($tgl_kembali);
	$sekarang		= strtotime(date("Y-m-d"));
	$tgl1 			= date('Y-m-d', strtotime('+6 days', strtotime($tgl_pinjam)));
	$tgl2 			= strtotime($tgl1);

	$message1		= "Kami dari M-Perpus ingin mengingatkan anda yang bernama : $nama, dan memiliki No ID : $id_anggota yang meminjam buku : $judul, bahwa besok $tgl_kembali, buku tersebut harus dikembalikan. Terimakasih";
	$message2		= "Kami dari M-Perpus ingin mengingatkan anda yang bernama : $nama, dan memiliki No ID : $id_anggota yang meminjam buku : $judul, bahwa buku tersebut harus segera dikembalikan pada hari ini $tgl_kembali. Terimakasih";
	$message3		= "Kami dari M-Perpus ingin mengingatkan anda yang bernama : $nama, dan memiliki No ID : $id_anggota yang meminjam buku : $judul, bahwa buku tersebut harus segera dikembalikan, karena sudah melebihi tempo yaitu $tgl_kembali. Terimakasih";

	if ($sekarang == $tgl2 && $sekarang < $tgl_kembali2) { 
		echo "<script>alert('Tunggu Sebentar');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
		exec('C:\xampp\htdocs\project\m-perpus\bin\gammu-smsd-inject.exe -c C:\xampp\htdocs\project\m-perpus\bin\smsdrc EMS '.$no_hp.' -text "'.$message1.'"');
	}
	if ($sekarang == $tgl_kembali2) {
		echo "<script>alert('Tunggu Sebentar');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
		exec('C:\xampp\htdocs\project\m-perpus\bin\gammu-smsd-inject.exe -c C:\xampp\htdocs\project\m-perpus\bin\smsdrc EMS '.$no_hp.' -text "'.$message2.'"');
	}
	if($sekarang > $tgl_kembali2){
		echo "<script>alert('Tunggu Sebentar');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
		exec('C:\xampp\htdocs\project\m-perpus\bin\gammu-smsd-inject.exe -c C:\xampp\htdocs\project\m-perpus\bin\smsdrc EMS '.$no_hp.' -text "'.$message3.'"');
	}

?>