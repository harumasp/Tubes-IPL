<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Mobil</title>
  <link rel="stylesheet" type="text/css" href="mobil.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
  crossorigin="anonymous"
   referrerpolicy="no-referrer" />
</head>
<body>
<?php 
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
  <div class="wrapper">
    <span class="close"><i class="fa-solid fa-xmark"></i></span>
    <div class="form-box login">
      <h1>Mobil</h1>

      <form action="#" method="post">
        <div class="form-input">
          <span class="icon"><i class="fa-solid fa-envelope"></i></span>
        <input type="text" name="ID Admin" required>
        <label>Kode Mobil</label>
      </div>

      <form action="#" method="post">
        <div class="form-input">
          <span class="icon"><i class="fa-solid fa-envelope"></i></span>
        <input type="text" name="ID Admin" required>
        <label>Merek Mobil</label>
      </div>

      <div class="form-input">
        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
      <input type="text" name="ID Admin" required>
      <label>Nopol Mobil</label>
    </div>

    

      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        
      </div>
      <button type="submit" class="btn" > <a href="Pembayaran dan antrian.html"></a>
        Kirim</button>
      
      <!-- Blum bisa nyambung kehalaman berikutnya -->
        
    </form>
  </div>
  
  
</body>
</html>