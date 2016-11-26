<?php
include "../../config/conn.php";

$id	=$_GET['id'];
$judul= $_GET['judul'];


$us=mysql_query("UPDATE tbl_transaksi SET status='Kembali' WHERE id='$id'")or die ("Gagal update".mysql_error());
$uj=mysql_query("UPDATE tbl_buku SET stok=(stok+1) WHERE judul='$judul'")or die ("Gagal update".mysql_error());

	if ($us || $uj) {
		echo "<script>alert('Berhasil Dikembalikan')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	} else {
		echo "<script>alert('Gagal Dikembalikan')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	}
?>