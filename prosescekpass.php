
<?php
   session_start();
   require_once("koneksi.php");
   $nik1 = $_POST['nik'];
   $verification = $_POST['verification'];
   $cekuser = mysql_query("SELECT * FROM user WHERE nik = '$nik1'");
   $hasil = mysql_fetch_array($cekuser);
   if(mysql_num_rows($cekuser) == 0) {
     echo "<div align='center'>NIK salah! <a href='forgotpass.php'>Back</a></div>";
   } else {
     if($verification <> $hasil['verification']) {
       echo "<div align='center'>warna kesukaan anda salah ! <a href='forgotpass.php'>Back</a></div>";
     } else {
       $_SESSION['verification'] = $hasil['verification'];
       $nik1 = $_POST['nik'];
       header('location:forgotpassnext.php');
     }
   }
?>
