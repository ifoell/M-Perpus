<?php
include 'conn.php';
if(isset($_POST['log'])) {
	$user = mysql_real_escape_string($_POST['user']);
	$pass = mysql_real_escape_string($_POST['pass']); 
	$pass = md5($pass);
	$sql = mysql_query("SELECT * FROM tbl_user where username='$user' and password='$pass'");
	$data = mysql_fetch_array($sql);
	$username = $data['username'];
	$nama = $data['nama'];
	$password = $data['password'];
	$level = $data['level'];
	

	if ($user==$username && $pass==$password) {
		session_start();
		$_SESSION['nama']=$nama;
		$_SESSION['level']=$level;
		if ($level=='Admin') {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=../modul/index.php'>";
		}
		elseif ($level=='Manajer') {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=../modul/index.php'>";
		}
		else {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=../modul/index.php'>";
	
		}
	} else {
			echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
			echo "<script>alert('Username dan password anda salah, Silahkan login kembali !');</script>";
	}
	

}

?>