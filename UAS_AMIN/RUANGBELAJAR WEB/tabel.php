<?php 
  // koneksi ke database
  require 'functions.php';
  $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

  // tombol cari ditekan
  if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="tabel.css">
  
</head>
<body>
  

  
  <h1>Daftar Mahasiswa</h1>
      <div class="tombol">
        <button type="submit"><a href="tes.php">Tambah Data</a></button>
      </div>
  <br><br>

  <form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>

  </form>
  <br>
  
  <table  border="1px" cellpadding="10" cellspacing="0" align="center">
    
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ( $mahasiswa as $row ) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="tas.php?id=<?= $row["id"]; ?>">Ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
      </td>
      <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
      <td><?= $row["nim"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["email"]; ?></td>
       <td><?= $row["jurusan"]; ?></td>
      
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

  </table>
  
  
</body>
</html>