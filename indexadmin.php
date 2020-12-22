<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:form.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<!DOCTYPE html>
<html>

<head>
<title>ADMIN</title><link rel="icon" href="images/logo.png" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
<?php
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}?>

<div class="banner">
	<div class="container">
		<div class="banner-info text-center">

			<h1>ADMIN WEB PEMILIHAN KETUA RW 00</h1>
			<p>Desa Cipadung , Cibiru , Kota Bandung</p>
		</div>
	</div>
</div>
<br/>
<div class="container">
<div class="container">
  <h2>ADMIN MENU</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#datacalonrt">DATA CALON RT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#datacalonrw">DATA CALON RW</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#datapemilihrt">DATA PEMILIH RT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#datapemilihrw">DATA PEMILIH RW</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#datauser">DATA USER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#logout"> LOGOUT</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="datacalonrt" class="container tab-pane active"><br>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#datacalonrt01">DATA CALON RT 01</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#datacalonrt02">DATA CALON RT 02</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#datacalonrt03">DATA CALON RT 03</a>
            </li>
        </ul>

        <div class="tab-content">
              <div id="datacalonrt01" class="container tab-pane fade"><br>
                  <h3>data calon rt 01</h3>
                   
              </div>
              <div id="datacalonrt02" class="container tab-pane fade"><br>
                  <h3>data calon rt 02</h3>
                 
              </div>
              <div id="datacalonrt02" class="container tab-pane fade"><br>
                  <h3>data calon rt 03</h3>
                  
              </div>
        </div>
    </div>
    <div id="datacalonrw" class="container tab-pane fade"><br>
     

<h2>DATA CALON</h2>
<div class="container">
<div class="table-responsive">
  <table class="table table-bordered">
                            
                            <tr>
                              <th>NIK</th>
                              <th>NAMA</th>
                              <th>JENIS KELAMIN</th>
                              <th>NOMER TELEPON</th>
                              <th>VISI</th>
                              <th>MISI</th>
                              <th>FOTO</th>
                              <th>ACTION</th>


                              
                             
                            </tr>
                            <?php 
  include "koneksi.php";
  $query_mysql = mysql_query("SELECT * FROM data_calon")or die(mysql_error());
  
  while($data = mysql_fetch_array($query_mysql)){
  ?>
  <tr>
    <td><?php echo $data['nik'] ?></td>
    <td><?php echo $data['nama'] ?> </td>
    <td><?php echo $data['jenis_kelamin'] ?></td>
    <td><?php echo $data['telp'] ?> </td>
    <td><?php echo $data['visi'] ?></td>
    <td><?php echo $data['misi'] ?> </td>
    <td><img src="images/<?php echo $data['foto']?>" width='100' height='100'> </td>

          
          <td>
      
      <a class="hapus" href="hapusdatacalon.php?nik=<?php echo $data['nik']; ?>">HAPUS |</a>
      <a class="edit" href="editdatacalon.php?nik=<?php echo $data['nik']; ?>">EDIT</a>					
    </td>
    
      </tr>
      
  <?php } ?>
  </table></div></div>
  <a href="tambahdatacalon.php"><h5>TAMBAH DATA</h5></a>



     
    </div>
    <div id="datapemilihrt" class="container tab-pane fade"><br>
    <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#datapemilihrt01">DATA PEMILIH RT 01</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#datapemilihrt02">DATA PEMILIH RT 02</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#datapemilihrt03">DATA PEMILIH RT 03</a>
            </li>
        </ul>

        <div class="tab-content">
              <div id="datapemilihrt01" class="container tab-pane fade"><br>
                  <h3>data pemilih rt 01</h3>
                   
              </div>
              <div id="datapemilihrt02" class="container tab-pane fade"><br>
                  <h3>data pemilih rt 02</h3>
                 
              </div>
              <div id="datapemilihrt02" class="container tab-pane fade"><br>
                  <h3>data pemilih rt 03</h3>
                 
              </div>
        </div>
     </div>
    <div id="datapemilihrw" class="container tab-pane fade"><br>
      <h3>data pemilih rw</h3>
     
    </div>
    <div id="datauser" class="container tab-pane fade"><br>
      <h3>data user</h3>
     
    </div>
    <div id="logout" class="container tab-pane fade"><br>
      <a href="logout.php">LOGOUT</a>
     
    </div>
  </div>
</div>

</body>
</html>