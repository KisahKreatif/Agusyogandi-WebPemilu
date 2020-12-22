<?php
   require_once("koneksi.php");
   $nik = $_POST['nik'];
   $pass = $_POST['pass'];
   $verification = $_POST['verification'];
  
   $cekuser = mysql_query("SELECT * FROM user WHERE nik = '$nik'");
   if(mysql_num_rows($cekuser) > 0) {
     echo "<div align='center'>NIK Sudah Terdaftar! <a href='register.php'>Back</a></div>";
   } else {
     if(!$verification || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Back</a>";
     } else {
       $simpan = mysql_query("INSERT INTO user (nik , pass , verification) VALUES('$nik','$pass','$verification')");
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='form.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>