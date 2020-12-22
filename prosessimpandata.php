<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
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
  mysql_query("INSERT INTO data_calon (nik , nama , jenis_kelamin , telp , visi , misi , foto) VALUES('$nik', '$nama', '$jenis_kelamin', '$telp', '$visi',  '$misi','$fotobaru')");

    header("location: indexadmin.php"); // Redirect ke halaman indexadmin.php
  }
?>