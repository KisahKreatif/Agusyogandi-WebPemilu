
<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['pass'];
   $cekuser = mysql_query("SELECT * FROM amn WHERE username = '$username'");
   $hasil = mysql_fetch_array($cekuser);
   if(mysql_num_rows($cekuser) == 0) {
     echo "<div align='center'>username tidak di ketahui <a href='loginadmin.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['pass']) {
       echo "<div align='center'>Password salah! <a href='loginadmin.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:indexadmin.php');
     }
   }
?>
