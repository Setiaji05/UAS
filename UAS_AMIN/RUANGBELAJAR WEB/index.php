<?php 
// cek tombol submit sudah di tekan apa belum
if( isset($_POST["submit"])){
    // cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123") {
    // jika benar, redirect ke halaman admin
    header("Location: boke.php");
    exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Membuat Form Login dan Registrasi</title>
      <link rel="stylesheet" href="style2.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <?php if ( isset($error) ) : ?>
      <p style="color: white; font-style: italic;">username / password salah!</p>
      <?php endif; ?>
      <div class="wrapper">
         <div class="title-text">
           
            <div class="title login">
               Login
            </div>
         </div>
         <div class="form-container">
            
            <div class="form-inner">
               
               <form action="" method="post" class="login">
                  <div class="field">
                     <input type="text" name="username" id="username">
                  </div>
                  <div class="field">
                     <input type="password" name="password" id="password">
                  </div>
                  <div class="pass-link">
                     <a href="#">Lupa password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Belum Punya Akun? <a href="">Daftar Sekarang</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
      
   </body>
</html>