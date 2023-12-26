<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrean Carwash</title>
    <style>
      <?php 
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
      body {
        background: url(bg.jpeg);/* Replace 'path/to/your/image.jpg' with the actual path to your image */
         background-size: cover;
         background-repeat: no-repeat;
         background-position: center;
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 20px;
}

    label {
        color: #ffffff; /* Set label text color to white */
    }


    .car::before {
     content: "";
     position: absolute;
     top: 0;
     left: 0;
     width: 0;
     height: 0;
      border-top: 50px solid transparent;
      border-right: 100px solid #000;
      border-bottom: 50px solid transparent;
    }

    .car::after {
      content: "";
      position: absolute;
      top: 25px;
      left: 100px;
      width: 50px;
      height: 50px;
      background-color: #000;
      border-radius: 50%;
      font-family: Arial, sans-serif;
        text-align: center;
        margin: 20px;
        background-color: #f0f0f0;
    }

    h1 {
    color: #ffffff;
    }

    select option {
    color: #000;
    }


    .container {
    width: 80%;
    margin: 20px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 20px;
    }

    .card {
    width: 250px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(148, 5, 5, 0.1);
    text-align: left;
    }

    table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    }

    th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
    }


    form {
    width: 300px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #2d5255;

    input::placeholder {
        color: #ffffff; /* Set text color of placeholder to white */
    }

    /* Add the following rule to hide the label visually but keep it accessible for screen readers */
    .hidden-label {
        position: absolute;
        left: -9999px;
    }
    }


    input, select, button {
    width: 100%;
    margin: 10px 0;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #ccc; /* Add a bottom border */
    background-color: transparent; /* Make the background transparent */
    color: #fff; /* Set text color to white */
    }

/* Add a hover effect for better visibility */
    input:hover, select:hover, button:hover {
    border-bottom: 2px solid #fff; /* Change the bottom border color on hover */
    }

    button {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 50px; /* Add border-radius for rounded corners */
    cursor: pointer;
    }

    button:hover {
    background-color: #45a049;
    }
    </style>
</head>

<body>
    <h1>Pembayaran</h1>

    <form>
        
    <input type="text" id="nama" name="nama" placeholder="Nama Pemilik Kendaraan" required>

    <select id="jenis" name="jenis" required>
        <option value="" disabled selected hidden>Jenis Mobil</option>
        <option value="sedan">Sedan</option>
        <option value="suv">SUV</option>
        <option value="hatchback">Hatchback</option>
        <option value="pickup">Pickup</option>
        <option value="truck">Truck</option>
    </select>
    

        <input type="number" id="nomorAntrian" name="nomorAntrian" placeholder="Nomor Antrian" required>

        <input type="datetime-local" id="waktuPemesanan" name="waktuPemesanan" placeholder="Waktu Pemesanan" required>

        <button type="button" onclick="submitForm()">Struk Pembayaran</button>
    </form>

    <div class="container" id="antreanList">
        <!-- Data antrean akan ditampilkan di sini -->
    </div>

    <script>
            function submitForm() {
        // Your existing JavaScript code for form submission
        var nama = document.getElementById("nama").value;
        var jenis = document.getElementById("jenis").value;
        var nomorAntrian = document.getElementById("nomorAntrian").value;
        var waktuPemesanan = new Date(document.getElementById("waktuPemesanan").value);

        // Format the date and time as "Pukul HH:mm, DD MMMM YYYY"
        var formattedTime = ('0' + waktuPemesanan.getHours()).slice(-2) + ':' + ('0' + waktuPemesanan.getMinutes()).slice(-2);
        var formattedDate = waktuPemesanan.getDate() + ' ' + getMonthName(waktuPemesanan.getMonth()) + ' ' + waktuPemesanan.getFullYear();

        // Menambahkan data antrean ke dalam kartu mobil
        var container = document.getElementById("antreanList");
        var card = document.createElement("div");
        card.classList.add("card");

        var content = "<h3>" + nama + "</h3>";
        content += "<p>Jenis Kendaraan: " + jenis + "</p>";
        content += "<p>Nomor Antrian: " + nomorAntrian + "</p>";
        content += "<p>Waktu Pemesanan: " + formattedTime + ", " + formattedDate + "</p>";

        card.innerHTML = content;
        container.appendChild(card);

        // Membersihkan formulir setelah antrean ditambahkan
        document.getElementById("nama").value = "";
        document.getElementById("jenis").value = "sedan";
        document.getElementById("nomorAntrian").value = "";
        document.getElementById("waktuPemesanan").value = "";
    }

    // Helper function to get the month name
    function getMonthName(monthIndex) {
        var months = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        return months[monthIndex];
    }
    </script>
</body>
</html>