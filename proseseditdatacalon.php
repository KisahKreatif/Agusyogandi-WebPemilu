<?php 

include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  if(is_file("images/".$data['foto'])) // Jika foto ada
  unlink("images/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images

mysql_query("UPDATE data_calon SET nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin',
 telp='$telp', visi='$visi', misi='$misi', foto='$fotobaru' WHERE nik='$nik'");

header("location:indexadmin.php?pesan=update");}
?>