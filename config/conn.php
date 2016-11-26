<?php
$server ="localhost";
$user ="root";
$passwd ="";
//$server ="ap-cdbr-azure-southeast-b.cloudapp.net";
//$user ="be108e05a588b0";
//$passwd ="e23e8c26";
$dbs ="m_perpus";
$konek=mysql_connect($server, $user, $passwd)
or die ("Gagal konek ke server MySQL".mysql_error());
$bukadb=mysql_select_db($dbs)
or die ("Gagal membuka database $dbs".mysql_error());
?>