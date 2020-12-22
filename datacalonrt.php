<?php
session_start();
if(!isset($_SESSION['nik'])) {
   header('location:form.php'); 
} else { 
   $username = $_SESSION['nik']; 
}
?>
<!DOCTYPE html>
<html>

<head>
<title>PEMILIHAN KETUA RT dan RW</title><link rel="icon" href="images/logo.png" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cafestore Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<body>


<div class="banner">
	<div class="container">
		<div class="banner-info text-center">

			<h1>SELAMAT DATANG DI WEB PEMILIHAN KETUA RT DAN RW </h1>
			<p>Desa Cipadung , Cibiru , Kota Bandung</p>
		</div>
	</div>
</div>
<br/>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
</nav>
<br/>
<div class="container-fluid">
<center>
 
		<div class="container-fluid">
		  <div class="row">
			<div class="col-4 "><a href="datacalonrt1.php">
				  <img src="images/crt01.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> </a> 
			</div>
			<div class="col-4"><a href="datacalonrt2.php">
					<img src="images/crt02.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">  </a>
			</div>
			<div class="col-4 "><a href="datacalonrt3.php">
			  	<img src="images/crt03.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">  </a>
			</div>
</center>
		  </div>
		</div>
	  </div>
<br/> 

<br/>
<br/>




		

<div class="cpy-right ">
    <p>© 2018 PEMILIR. All rights reserved | Design by KELOMPOK 4
      
    </p>
  </div>

</div>
</footer>
</body>
</html>