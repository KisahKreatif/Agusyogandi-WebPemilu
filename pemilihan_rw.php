
<!DOCTYPE html>
<html>

<head>
<title>PEMILIHAN</title><link rel="icon" href="images/logo.png" />
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

			<h1>PEMILIHAN CALON KETUA RW 00</h1>
			<p>Desa Cipadung , Cibiru , Kota Bandung</p>
		</div>
	</div>
</div>
<br/>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

</nav>
<br/>
<div class="container-fluid">
		  <div class="row">
			<div class="col-6 ">
            <table class="table table-dark">
                            
                            <tr>
                              <th>FOTO</th>
                              <th>NO URUT</th>
                              <th>NAMA</th>

                              


                              
                             
                            </tr>
                            <?php 
  include "koneksi.php";
  $query_mysql = mysql_query("SELECT * FROM data_calon")or die(mysql_error());
  
  while($data = mysql_fetch_array($query_mysql)){
    $tampil = mysql_query("SELECT * FROM data_calon ORDER BY nik ASC");
  ?>
  <tr>

    <td><img src="images/<?php echo $data['foto']?>" width='200' height='200'> </td>
    <td><?php echo $data['no'] ?></td>
    <td><?php echo $data['nama'] ?> </td>       				
    </td>
      </tr>  
  <?php } ?>
            </table>

			</div>
			<div class="col-6">
			<form action= "prosespemilihan_rw.php" method="post">
                            <div class="form-group">
                              
                              <select class="form-control" id="table" name="table" placeholder="INPUT Nama Calon" name="table">
                              <option disabled selected>PILIH CALON</option>
                                <?php
                                    $query_mysql = mysql_query("SELECT * FROM data_calon")or die(mysql_error());
                                    
                                    while($data = mysql_fetch_array($query_mysql)){
                                    ?>     
                                      <option ><?php echo $data['nama'] ?></option>
                                    <?php } ?>
                            </select>
                            </div>
                           
             
                
                  <div class="form-group d-flex justify-content-center">
                    <input type="text" class="form-control" id="nik" name="name" placeholder="ENTER YOUR NIK" >
                  </div>
                
                
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" class="form-control" id="nama" name="email" placeholder="ENTER YOUR NAME" >
                    </div>

                    <div class="form-group d-flex justify-content-center">
                      <input type="text" class="form-control" id="telp" name="email" placeholder="ENTER YOUR TELP">
                    </div>

                    <div class="form-group d-flex justify-content-center">
                      <input type="text" class="form-control" id="rt" name="email" placeholder="ENTER YOUR REGIONAL (RT)" >
                    </div>
                 
                      
                      <button type="submit"  class="btn btn-primary btn-block" >SUBMIT</button>
                      <br></br>
                      
                    </form>
                    </div>
                    

                    </div>
                  </div>
			</div>

		  </div>
		</div>
	  </div>

</body>
</html>