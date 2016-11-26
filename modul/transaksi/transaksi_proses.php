<?php
include "../../config/conn.php";

$tgl_pinjam		= isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam'] : "";
$tgl_kembali	= isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : "";


$dapat_buku		= isset($_POST['buku']) ? $_POST['buku'] : "";
$pecah_buku		= explode (".", $dapat_buku);
$id				= $pecah_buku[0];
$buku			= $pecah_buku[1];

$dapat_peminjam		= isset($_POST['peminjam']) ? $_POST['peminjam'] : "";
$pecah_peminjam		= explode (".", $dapat_peminjam);
$id_peminjam 		= $pecah_peminjam[0];
$peminjam			= $pecah_peminjam[1];
$no_hp				= $pecah_peminjam[2];

$ket			= isset($_POST['ket']) ? $_POST['ket'] : "";

if($buku == "") {
	echo "<script>alert('Pilih Buku Terlebih Dahulu');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi_input'>";
} elseif ($peminjam == "" || $dapat_peminjam == "") {
	echo "<script>alert('Pilih Peminjam Terlebih Dahulu');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi_input'>";
	
} else {
	$query=mysql_query("SELECT * FROM tbl_buku WHERE judul = '$buku'");
	$hasil = mysql_fetch_array($query);
	$sisa=$hasil['stok']-1;
	if ($sisa == 0) {
		echo "<script>alert('Stok buku telah habis, tidak bisa melakukan transaksi, tambahkan stok buku segera');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	} else {
		echo $tgl_pinjam;
		echo $tgl_kembali;
		$qt = mysql_query("INSERT INTO tbl_transaksi  VALUES (null, '$id_peminjam', '$peminjam', '$no_hp', '$buku', '$tgl_pinjam', '$tgl_kembali', 'Pinjam', '$ket')") or die (mysql_error());
		$qu			= mysql_query("UPDATE tbl_buku SET stok = '$sisa' WHERE judul = '$buku' ") or die(mysql_error());		
		if ($qt&&$qu) {
		    echo "<script>alert('Transaksi Sukses');</script>";
		  	echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
		} else {
			echo "<script>alert('Transaksi Gagal');</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=transaksi_input'>";
		}
	}
	
}

?>
