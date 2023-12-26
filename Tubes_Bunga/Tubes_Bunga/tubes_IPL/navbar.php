<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carwash</title>
    <link rel="stylesheet" href="styleku.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  </head>
  <body background="nub.jpg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Clean Car Wash</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Tentang Kami <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" 
            aria-expanded="false"> Login </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="LoginUserFIX.php">Login User</a>
              <a class="dropdown-item" href="admin.php">Login Admin</a>
            </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="J_moobil.php">Jenis Mobil<span class="sr-only">(current)</span></a>
          </li>

          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
             aria-expanded="false"> Pembayaran </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="Pembayaran dan antrian.php">Pembayaran</a>
              <a class="dropdown-item" href="strukpembayaran.php">Struk Pembayaran</a>
            </div>
          </li>

        </ul>
       
        </form>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="diplay-6">SELAMAT DATANG</h4>
        <h3 class="display-1">CLEAN CARWASH</h3>
        <a href="layanan">
          <button type="button" class="btn btn-danger btn-lg">Cek Layanan</button>
        </a>
      </div>
    </div>

    <div class="container">
    <?php 
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
  </div>
  

    <div class="container-fluid Daftar Paket pt-5 pb-5">
      <div class="container text-center">
        <h4 class="display-3" id="Daftar Paket">Daftar Paket</h4>
        <h2>1. Hidrolik Plus Fogging = Rp.100.000</h2>
        <p>(Cuci Body, Vacum, Semir Ban & Interior, Alas Kaki & fogging)</p>
        <h2>2. Hidrolik = Rp.50.000</h2>
        <p>(Cuci Body, Kolong Ban, Vacum, Semir Ban & Interior, Alas Kaki)</p>
        <h2>3. Manual = Rp.40.000</h2>
        <p>(Cuci Body, Kolong Ban, Vacum, Semir Ban & Interior, Alas Kaki)</p>
      </div>
    </div>
  </body>
</html>
