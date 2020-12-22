<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "pemilu";
   $db = mysql_connect($hostname, $username, $password) or die ('Koneksi Gagal! ');
   mysql_select_db($dbname);
?>