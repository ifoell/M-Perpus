<?php
include '../../config/conn.php';

$namafolder="buku/gambar_buku/"; //tempat menyimpan file

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
	$isbn = $_POST ['isbn'];
	$judul = $_POST ['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['thn_terbit'];
	$stok = $_POST['stok'];
	$lokasi = $_POST['lokasi'];
	$tgl_input = $_POST['tgl_input'];
	$deskripsi = $_POST['deskripsi'];

		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png" || $jenis_gambar == "image/png")
		{

			$gambar = $namafolder . basename($_FILES['nama_file']['name']);
			if (move_uploaded_file($_FILES['nama_file']['tmp_name'],$gambar)) {
				$gambs = basename($_FILES['nama_file']['name']);
 				$input = "INSERT into tbl_buku values('','$isbn','$judul','$pengarang','$penerbit','$tahun','$stok','$lokasi','$tgl_input','$gambs','$deskripsi')";
 				$res=mysql_query($input) or die (mysql_error());
 				echo "<script> alert('Buku $judul berhasil Ditambahkan') </script>";
 				echo "<meta http-equiv='refresh' content='0; url=?page=buku'";
 			} else{
 				echo "<script> alert('Data Gagal Di Input') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=buku_input'>";
 			}
 		} else{
 			echo "<script> alert('Jenis gambar yang anda kirim salah. Harus .jpg .gif .png') </script>";
 			echo "<meta http-equiv='refresh' content='0; url=?page=buku_input'>";
 		}
 } else{
 	echo "<script> alert('Anda belum memilih gambar') </script>";
 	echo "<meta http-equiv='refresh' content='0; url=?page=buku_input'>";
 }

?>
