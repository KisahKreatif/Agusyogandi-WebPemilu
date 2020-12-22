<html>
<head>
  <title>EDIT DATA</title>
</head>
<body>
<h3>EDIT DATA MULYA</h3>

	<?php 
	include "koneksi.php";
	$nik = $_GET['nik'];
	$query_mysql = mysql_query("SELECT * FROM data_calon WHERE nik='$nik'")or die(mysql_error());
	
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="proseseditdatacalon.php" method="post">		
		<table>
			<tr>
				<td>NIK</td>
				<td>
					
					 <?php echo $data['nik'] ?>
				</td>					
			</tr>	
			<tr>
				<td>NIK</td>
				<td><input type="text" name="nik" value="<?php echo $data['nik'] ?>"></td>					
			</tr>	
            <tr>
				<td>NAMA</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>					
			</tr>	
            <tr>
				<td>JENIS KELAMIN</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>"></td>					
			</tr>	
            <tr>
				<td>NO TELEPON</td>
				<td><input type="text" name="telp" value="<?php echo $data['telp'] ?>"></td>					
			</tr>	
            <tr>
				<td>VISI</td>
				<td><input type="text" name="visi" value="<?php echo $data['visi'] ?>"></td>					
			</tr>	
            <tr>
				<td>MISI</td>
				<td><input type="text" name="misi" value="<?php echo $data['misi'] ?>"></td>					
			</tr>	
            <tr>
				<td>FOTO</td>
				<td><input type="file" name="foto"></td>					
			</tr>	

				<td></td>
				<td><input type="submit" value="SAVE"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>