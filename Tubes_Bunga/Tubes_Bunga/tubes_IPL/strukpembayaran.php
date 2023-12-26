<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran Antrian Carwash</title>
    <link rel="stylesheet" type="text/css" href="strukpembayaran.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
  crossorigin="anonymous"
   referrerpolicy="no-referrer" />
    <style>

        .receipt-container {
            max-width: 400px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            background-color: #a1e7fb;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
<?php 
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
    <div class="receipt-container">
        <h2>Struk Pembayaran</h2>

        <div class="receipt-details">
            <div class="item">
                <span>Id User:</span>
                <span>...</span>
            </div>
            <div class="item">
                <span>Nama:</span>
                <span>...</span>
            </div>
            <div class="item">
                <span>No Hp:</span>
                <span>...</span>
            </div>
            <div class="item">
                <span>Tanggal:</span>
                <span>...</span>
            </div>
            <div class="item">
                <span>Nomor Antrian:</span>
                <span>...</span>
            </div>
        </div>

        <div class="total">
            <span>Total Pembayaran:</span>
            <span>Rp.</span>
        </div>
    </div>
</body>

</html>
