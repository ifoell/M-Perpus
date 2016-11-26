<?php 

include '../../config/conn.php';
	
	$id = $_POST ['id'];
	$foto = $_FILES['foto']['name'];
	$isbn	= $_POST['isbn'];
	$judul = $_POST ['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['thn_terbit'];
	$stok = $_POST['stok'];
	$lokasi = $_POST['lokasi'];
	$tgl_input = $_POST['tgl_input'];
	$deskripsi = $_POST['deskripsi'];

	$fol = 'buku/gambar_buku/';

	move_uploaded_file($_FILES["foto"]["tmp_name"],$fol.$foto);

		mysql_query("UPDATE tbl_buku SET   isbn='$isbn', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', thn_terbit='$tahun', stok='$stok', lokasi='$lokasi', tgl_input='$tgl_input', gambar='$foto', deskripsi='$deskripsi' WHERE id='$id'");

	echo "<script> alert('Data Buku $judul berhasil Dirubah') </script>";
 	echo "<meta http-equiv='refresh' content='0; url=?page=buku'";
?>