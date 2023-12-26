<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url(bg.jpeg);
            background-size: cover;
            background-position: center;
        }

        .login-container {
            background-color: rgba(132, 139, 192, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<?php 
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
<body>
    <div class="login-container">
        <h2>Login Antrian Pembayaran Carwash</h2>
        <form action="proses_login.php" method="post">
            <label for="id user">Id User:</label>
            <input type="text" id="id user" name="id user" required>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="no hp">No Hp:</label>
            <input type="text" id="no hp" name="no hp" required>

            <button type="submit" href="J_moobil.html"  >Login</button>
            <!-- Blum bisa nyambung kehalaman berikutnya -->
        </form>
    </div>
</body>

</html>
