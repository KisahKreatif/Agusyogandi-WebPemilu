<?php
session_start();
if(isset($_SESSION['verification'])) {
header('forgotpassnext.php'); }
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>

<title>FORGOT PASSWORD</title><link rel="icon" href="images/logo.png" />
             <link rel="stylesheet" type="text/css" href="css/cssforgotpass.css">
            
            
     </head>
    <body >


<div class="kotak_login">


  <form action="prosescekpass.php" method="post">
    
    <input type="text"  name="nik"  required="" autocomplete=’off’ class="form_login" placeholder="nik">

    
    <input type="text"  name="verification"  required="" autocomplete=’off’ class="form_login" placeholder="apa warna kesukaanmu ?">

    <input type="submit" class="tombol_login" value="CEK AKUN">

    <br/>
    <br/>
   
  </form>

</div>
</body>