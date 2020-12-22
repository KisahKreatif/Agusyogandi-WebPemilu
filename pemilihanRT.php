
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

			<h1>PEMILIHAN CALON KETUA RT 00</h1>
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
  $query_mysql = mysql_query("SELECT * FROM data_calon_rt")or die(mysql_error());
  
  while($data = mysql_fetch_array($query_mysql)){
    $tampil = mysql_query("SELECT * FROM data_calon_rt ORDER BY nik ASC");
  ?>
  <tr>

    <td><img src="images/<?php echo $data['foto']?>" width='200' height='200'> </td>
    <td><?php $no=0;
              while($r=mysql_fetch_array($tampil)){
                $no++;
                echo "$no"; //Untuk menampilkan no urut otomatis
                
                }?></td>
    <td><?php echo $data['nama'] ?> </td>       				
    </td>
      </tr>  
  <?php } ?>
            </table>

			</div>
			<div class="col-6">
			<form action="prosespemilihan.php" method="post">
                            <div class="form-group">
                              
                              <select class="form-control" id="table" name="table" placeholder="INPUT NO TABLE" name="table">
                                <?php
                                    $query_mysql = mysql_query("SELECT * FROM mejamunjul")or die(mysql_error());
      
                                    while($data = mysql_fetch_array($query_mysql)){
                                    ?>     
                                      <option>TABLE <?php echo $data['notable'] ?></option>
                                    <?php } ?>
                            </select>
                            </div>
                           
             
                
                  <div class="form-group d-flex justify-content-center">
                    <input type="text" class="form-control" id="name" name="name" placeholder="ENTER YOUR NAME" name="name">
                  </div>
                
                
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" class="form-control" id="email" name="email" placeholder="ENTER YOUR EMAIL" name="email">
                    </div>
                  
               
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" class="form-control" id="date" name="date" placeholder="DATE(tgl/bln/thn)(10102010)" name="date">
                    </div>
               
                  
                    <div class="form-group d-flex justify-content-center">
                      <input type="text" class="form-control" id="time" name="time" placeholder="TIME(jam/menit)(1010)" name="time">
                    </div>
                 
                      
                      <button type="submit"  class="btn btn-primary btn-block" >BOOKING</button>
                      <br></br>
                      <a href="datamunjul.php"><button type="button"  class="btn btn-primary btn-block" >CEK TABLE</button></a>
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