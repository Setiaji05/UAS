<?php 
  require 'functions.php';

  // ambil data di URL
  $id = $_GET["id"];
  // query data mahasiswa berdasarkan id
  $mhs = query("SELECT * FROM mahasiswa
                WHERE id = $id")[0];
  // cek data
  //var_dump($mhs["nama"]);
  
  
  // cek apakah tombol submit sudah ditekan atau belum
  if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil diubah
    if( ubah($_POST) > 0 ) {
      echo "
        <script>
          alert('data berhasil diubah!');
          document.location.href = 'tabel.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('data gagal diubah!');
          document.location.href = 'ubah.php';
        </script>
      ";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah Data</title>
  <link rel="stylesheet" href="tas.css">
  
</head>
<body>


<div class="wrapper">
         <div class="title-text">
           
            <div class="title login">
               Tambah Data
            </div>
         </div>
         <div class="form-container">
            
            <div class="form-inner">
               
            <form action="" method="post" enctype="multipart/form-data" cellpadding="10" cellspacing="0" align="center">
                    <input type="hidden" name="id" value="<?= $mhs["id"];?>">
                    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"];?>">
                  <div class="field">
                    <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];?>">
                  </div>
                  <div class="field">
                    <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
                  </div>
                  <div class="field">

                    <input type="text" name="email" id="email" required value="<?= $mhs["email"];?>">
                  </div>
                  <div class="field">

                    <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"];?>">
                  </div>
                  <div class="field1">
                  <label for="gambar">Photo :</label><br>

                        <img src="img/<?= $mhs["gambar"];?>" width="50"><br>
                      <input type="file" name="gambar" id="gambar">
                      
                  </div>
                  <div class="field btn">
                        
                      <button type="submit" name="submit">Ubah</button>
                  </div>
                  <div class="field btn">
                    <button><a href="tabel.php">Kembali..</a></button>
                  </div>


            </form>
            </div>
         </div>
      </div>
  
  
</body>
</html>