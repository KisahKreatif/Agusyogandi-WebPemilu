<?php 
include 'koneksi.php';
$nik = $_GET['nik'];
mysql_query("DELETE FROM data_calon WHERE nik='$nik'")or die(mysql_error());
 
header("location:indexadmin.php?pesan=hapus");
?>