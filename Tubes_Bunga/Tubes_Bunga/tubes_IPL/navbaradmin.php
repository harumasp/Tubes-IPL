<?php
// Sesi atau metode lain untuk mendapatkan informasi login
session_start();
// Cek apakah admin telah login
if (isset($_SESSION['admin_id'])) {
    // Mendapatkan informasi admin dari session
    $admin_id = $_SESSION['admin_id'];
    $admin_nama = $_SESSION['admin_nama'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carwash</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <style>
        body {
            background-size: cover;
            position: relative;
            color: #c85250;
            background-image: url("BgBaru.jpg");
        }

        h2,
        p,
        h4,
        h3 {
            color: rgb(254, 252, 252);
            font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
            text-align: center;
        }

        h4,
        h3 {
            color: black;
        }

        li {
            background-color: #50a3ab;
        }

        li a:hover,
        .dropdown:hover .dropbtn {
            background-color: #c85250;
            transition: all 0.5s ease;
        }

        /* Customize the navbar */
        .navbar {
            background-color: #c85250;
            padding: 10px 0;
        }

        .navbar-brand {
            color: white;
            font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
            font-size: 24px;
        }

        .navbar-nav .nav-link {
            color: white;
            font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
            font-size: 18px;
            margin: 0 15px;
        }

        .navbar-nav .nav-link:hover {
            color: #50a3ab;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Clean Car Wash</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="description.html">Tentang Kami<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" data-target="#yourDropdownId" aria-expanded="false">
                            Daftar Antrian
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="daftar.php">Daftar dan Cetak Antrian</a>
                        </div>
                    </li>
                    <!-- Informasi login -->
                    <?php if (isset($admin_id)) : ?>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <span class="nav-link">Selamat datang, <?php echo $admin_nama; ?></span>
                            </li>
                            <form class="form-inline" method="post" action="logoutadmin.php">
                                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" style="margin-top: 8px; color: #000000;">Logout</button>
                            </form>
                        </ul>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>