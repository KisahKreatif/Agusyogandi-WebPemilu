<html>
<head>
<title>CHANGE PASSWORD</title><link rel="icon" href="images/logo.png" />
<link href="css/cssforgotpass.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>


	<?php 
	include "koneksi.php";
	$nik = $_GET['nik'];
	$query_mysql = mysql_query("SELECT * FROM user WHERE nik='$nik'")or die(mysql_error());
	
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<div class="kotak_login">
	<form action="proseseditpassuser.php" method="post">		
    <input type="text"  name="nik"  class="form_login" value="<?php echo $data['nik'] ?>">

    
    <input type="text"  name="pass"   class="form_login" value="<?php echo $data['pass'] ?>">

    <input type="submit" class="tombol_login" value="SUBMIT">

    <br/>
    <br/>
	
	
		</form>	
		</div>
	
	<?php } ?>
</body>