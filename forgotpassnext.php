<?php
session_start();
if(!isset($_SESSION['verification'])) {
   header('location:forgotpass.php'); 
} else { 
   $verification = $_SESSION['verification']; 
}
?>
<!DOCTYPE html>
<html>
<head>
<title>FORGOT PASSWORD</title><link rel="icon" href="images/logo.png" />
<link href="css/cssforgotpass.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            
 </head>
<body >
<?php
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
 if($pesan == "update"){
		echo "Data berhasil di update.";
	}
}?>

                            <?php 
  include "koneksi.php";
  $verification=$_SESSION['verification'];
  $q=mysql_query("SELECT * FROM user WHERE verification='$verification'");
  while($b=mysql_fetch_array($q)){
 

  ?>
  <div class="kotak_login">
  <div class="container">
  <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>NIK</th>
        <th>PASSWORD</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td><?php echo $b['nik'];?></td>	
      <td><?php echo $b['pass'];?></td>
      <td><a class="edit" href="editpassuser.php?nik=<?php echo $b['nik']; ?>">EDIT PASSWORD</a>
     
      </tr>
     
 
  </table>
  </div>
  </tbody>
  
  <center></br><a href="logout.php">
    <button type="button" class="btn btn-danger">LOGOUT</button><a></center>
</div>
  </div>

 
  <?php } ?>			

     
 
</body>
</html>