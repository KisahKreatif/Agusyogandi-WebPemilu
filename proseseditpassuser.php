<?php 

include 'koneksi.php';

$nik = $_POST['nik'];
$pass = $_POST['pass'];

mysql_query("UPDATE user SET  nik='$nik',pass='$pass' WHERE nik='$nik'");

header("location:forgotpassnext.php?pesan=update");
?>