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
      <h1 align="center">LAPORAN DATA TRANSAKSI M-PERPUS</h1>
      <table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">
        
        <tr>
          <td width="4%" height="34" align="center" bgcolor="#CCCCCC">No</td>
          <td width="13%" bgcolor="#CCCCCC" align="center">ID Anggota</td>
          <td width="20%" bgcolor="#CCCCCC" align="center">Nama</td>
          <td width="22%" bgcolor="#CCCCCC" align="center">Judul Buku</td>
          <td width="16%" bgcolor="#CCCCCC" align="center">Tanggal Pinjam</td>
          <td width="16%" bgcolor="#CCCCCC" align="center">Tanggal Kembali</td>
          <td width="10%" bgcolor="#CCCCCC" align="center">Status</td>
        </tr>
        <?php
          $query = "SELECT * FROM tbl_transaksi ORDER by status asc";
          $sql = mysql_query($query);
          $total = mysql_num_rows($sql);
          $no = 1;
              
          while ($data=mysql_fetch_array($sql)) {
        ?>
        <tbody>
          <tr>
            <td height="27" align="center"><?php echo $no; ?></td>
            <td align="center"><?php echo $data['id_anggota']; ?></td>
            <td align="center"><?php echo $data['nama']; ?></a>
            <td align="center"><?php echo $data['judul']; ?></td>
            <td align="center"><?php echo $data['tgl_pinjam']; ?></td>
            <td align="center"><?php echo $data['tgl_kembali']; ?></td>
            <td align="center"><?php echo $data['status']; ?></td>
                
          </tr>
          <?php $no++; } ?>
            
        </tbody>
      </table>

</body>
</html>