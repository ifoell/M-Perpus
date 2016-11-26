<html>
<body onLoad="window.print();">
   <?php
   include '../../config/conn.php';
   ?>

<style type="text/css">
body {
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}
.style1{
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;	
}
</style>

      <br>
			<h1 align="center">LAPORAN DATA BUKU M-PERPUS</h1>
   		<table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">
   	    
   	    <tr>
   	      <td width="4%" height="34" align="center" bgcolor="#CCCCCC">No</td>
          <td width="13%" bgcolor="#CCCCCC" align="center">ISBN</td>
          <td width="20%" bgcolor="#CCCCCC" align="center">Judul Buku</td>
          <td width="14%" bgcolor="#CCCCCC" align="center">Pengarang</td>
          <td width="13%" bgcolor="#CCCCCC" align="center">Penerbit</td>
          <td width="12%" bgcolor="#CCCCCC" align="center">Tahun Terbit</td>
   	      <td width="7%" bgcolor="#CCCCCC" align="center">Stok</td>
          <td width="8%" bgcolor="#CCCCCC" align="center">Lokasi</td>
          <td width="10%" bgcolor="#CCCCCC" align="center">Tanggal Input</td>
        </tr>
        <?php
      		$query = "SELECT * FROM tbl_buku ORDER by judul";
      		$sql = mysql_query($query);
      		$total = mysql_num_rows($sql);
      		$no = 1;
      				
      		while ($data=mysql_fetch_array($sql)) {
      	?>
   	    <tbody>
   	      <tr>
   	        <td height="27" align="center"><?php echo $no; ?></td>
            <td align="center"><?php echo $data['isbn']; ?></td>
            <td align="center"><?php echo $data['judul']; ?></a>
            <td align="center"><?php echo $data['pengarang']; ?></td>
            <td align="center"><?php echo $data['penerbit']; ?></td>
            <td align="center"><?php echo $data['thn_terbit']; ?></td>
            <td align="center"><?php echo $data['stok']; ?></td>
            <td align="center"><?php echo $data['lokasi']; ?></td>
            <td align="center"><?php echo $data['tgl_input']; ?></td>
                
          </tr>
          <?php $no++; } ?>
            
        </tbody>
      </table>

</body>
</html>