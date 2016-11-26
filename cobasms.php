<?php
$noTujuan = "+6289654391561";
$message = "hello world! From Gammu";
 
exec('C:\xampp\htdocs\project\m-perpus\bin\gammu-smsd-inject.exe -c C:\xampp\htdocs\project\m-perpus\bin\smsdrc EMS '.$noTujuan.' -text "'.$message.'"');
 
?>