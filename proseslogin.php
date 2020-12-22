
<?php
   session_start();
   require_once("koneksi.php");
   $nik = $_POST['nik'];
   $pass = $_POST['pass'];
   $cekuser = mysql_query("SELECT * FROM user WHERE nik = '$nik'");
   $hasil = mysql_fetch_array($cekuser);
   if(mysql_num_rows($cekuser) == 0) {
     echo "<div align='center'>NIK Belum Terdaftar! <a href='form.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['pass']) {
       echo "<div align='center'>Password salah! <a href='form.php'>Back</a></div>";
     }
      else {
       $_SESSION['nik'] = $hasil['nik'];
       header('location:index.php');
     }}
    
?>