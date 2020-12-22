<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:indexadmin.php','index.php'); }
require_once("koneksi.php");
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
<title>PEMILIHAN KETUA RT dan RW</title><link rel="icon" href="images/logo.png" />
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/styleform.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-bg">
		<!-- title -->
	</br>
	</br>	
	</br>
	</br>
	</br>	
		<!-- //title -->
		<div class="sub-main-w3">
			<div class="image-style">

			</div>
			<!-- vertical tabs -->
			<div class="vertical-tab">
				<div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>LOGIN USER</label>
					<article>
						<form action="proseslogin.php" method="post">
							<h3 class="legend">LOGIN USER</h3>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								<input type="text" placeholder="NIK"  autocomplete=’off name="nik" required />
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password"  autocomplete=’off  name="pass" required />
							</div>
							<button type="submit" class="btn submit">LOGIN</button>
							<a href="forgotpass.php" class="bottom-text-w3ls">Forgot Password?</a>
						</form>
					</article>
				</div>
				<div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2">
					<label for="option2" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>LOGIN ADMIN</label>
					<article>
						<form action="prosesloginadmin.php" method="post">
							<h3 class="legend">LOGIN ADMIN</h3>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								<input type="text" placeholder="username"  autocomplete=’off name="username" required  />
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password"  autocomplete=’off name="pass" required />
							</div>
							<button type="submit" class="btn submit">LOGIN</button>
							<a href="#" class="bottom-text-w3ls">Forgot Password?</a>
						</form>
					</article>
				</div>
				<div id="section3" class="section-w3ls">
					<input type="radio" name="sections" id="option3">
					<label for="option3" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>REGISTER</label>
					<article>
						<form action="prosesregister.php" method="post">
							<h3 class="legend">REGISTER</h3>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								<input type="text" placeholder="nik" autocomplete=’off name="nik" required />
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="password"  autocomplete=’off name="pass" required />
							</div>
							<div class="input">
								<span class="fa fa-file" aria-hidden="true"></span>
								<input type="text" placeholder="apa warna kesukaanmu ?"  autocomplete=’off name="verification" required />
							</div>
							<button type="submit" class="btn submit">REGISTER</button>
						</form>
					</article>
				</div>
			</div>
			<!-- //vertical tabs -->
			
		</div>
		<div class="cpy-right ">
    © 2018 PEMILIR. All rights reserved | Design by KELOMPOK 4
      
    
  </div>

</body>

</html>