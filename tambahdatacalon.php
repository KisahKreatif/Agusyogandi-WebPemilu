<html>
<head>
  <title>TAMBAH DATA</title>
</head>
<body>
  <h1>Tambah Data Calon</h1>
  <form method="post" action="prosessimpandata.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>NIK</td>
    <td><input type="text" name="nik"></td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td><input type="text" name="nama"></td>
  </tr>
  <tr>
    <td>JENIS KELAMIN</td>
    <td>
    <input type="text" name="jenis_kelamin" >
    </td>
  </tr>
  <tr>
    <td>NO TELEPON</td>
    <td><input type="text" name="telp"></td>
  </tr>
  <tr>
    <td>VISI</td>
    <td><input type="text" name="visi"></td>
  </tr>
  <tr>
    <td>MISI</td>
    <td><input type="text" name="misi"></td>
  </tr>
  <tr>
    <td>FOTO</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Simpan">
  <a href="indexadmin.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>