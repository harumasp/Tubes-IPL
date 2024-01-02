<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Antrean Carwash</title>
  <style>
    body {
      background: url(car-wash.jpg);
      /* Replace 'path/to/your/image.jpg' with the actual path to your image */
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }

    label {
      color: #ffffff;
      /* Set label text color to white */
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
      color: #000000;
      font-weight: bold;
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

    th,
    td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
      color: #0000ff;
      font-weight: bold;
    }

    form {
      width: 300px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 15px;
      /* Rounded corners */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #2d5255;

      input::placeholder {
        color: #ffffff;
        /* Set text color of placeholder to white */
      }

      /* Add the following rule to hide the label visually but keep it accessible for screen readers */
      .hidden-label {
        position: absolute;
        left: -9999px;
      }
    }

    input,
    select,
    button {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid #ccc;
      /* Add a bottom border */
      background-color: transparent;
      /* Make the background transparent */
      color: #fff;
      /* Set text color to white */
    }

    /* Add a hover effect for better visibility */
    input:hover,
    select:hover,
    button:hover {
      border-bottom: 2px solid #fff;
      /* Change the bottom border color on hover */
    }

    button {
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 50px;
      /* Add border-radius for rounded corners */
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <h1>Pembayaran</h1>

  <form id="carwashForm">
    <input type="text" id="nama" name="nama" placeholder="Nama Pemilik Kendaraan" required />

    <select id="jenis" name="jenis" required>
      <option value="" disabled selected hidden>Jenis Mobil</option>
      <option value="sedan">Sedan</option>
      <option value="suv">SUV</option>
      <option value="hatchback">Hatchback</option>
      <option value="pickup">Pickup</option>
      <option value="truck">Truck</option>
    </select>

    <input type="number" id="nomorAntrian" name="nomorAntrian" placeholder="Nomor Antrian" required />

    <input type="datetime-local" id="waktuPemesanan" name="waktuPemesanan" placeholder="Waktu Pemesanan" required />

    <select id="daftarpaket" name="daftarpaket" required>
      <option value="" disabled selected hidden>Pilih Paket</option>
      <option value="100000">Hidrolik Plus Fogging - Rp.100.000</option>
      <option value="50000">Hidrolik - Rp.50.000</option>
      <option value="40000">Manual - Rp.40.000</option>
    </select>

    <button type="button" onclick="submitForm(event)">
      Struk Pembayaran
    </button>
  </form>

  <div class="container" id="antreanList">
    <h2>Data Antrean</h2>
    <table border="1" style="width: 100%">
      <thead>
        <tr>
          <th>Nama Pemilik Kendaraan</th>
          <th>Jenis Kendaraan</th>
          <th>Nomor Antrian</th>
          <th>Waktu Pemesanan</th>
          <th>Paket</th>
          <th>Total Pembayaran</th>
        </tr>
      </thead>
      <tbody id="antreanTableBody">
        <!-- Data antrean akan ditampilkan di sini -->
      </tbody>
    </table>
  </div>

  <script>
    document
      .getElementById("carwashForm")
      .addEventListener("submit", function(event) {
        submitForm(event)
          .then(() => {
            console.log("Form submitted successfully");
          })
          .catch((error) => {
            console.error("Error submitting form:", error);
          });
      });

    async function submitForm(event) {
      if (event) {
        event.preventDefault();
      }

      var nama = document.getElementById("nama").value;
      var jenis = document.getElementById("jenis").value;
      var nomorAntrian = document.getElementById("nomorAntrian").value;
      var waktuPemesanan = new Date(
        document.getElementById("waktuPemesanan").value
      );
      var daftarpaket = document.getElementById("daftarpaket");
      var selectedPackage = daftarpaket.value;
      var formattedDateTime =
        waktuPemesanan.getFullYear() +
        "-" +
        ("0" + (waktuPemesanan.getMonth() + 1)).slice(-2) +
        "-" +
        ("0" + waktuPemesanan.getDate()).slice(-2) +
        " " +
        ("0" + waktuPemesanan.getHours()).slice(-2) +
        ":" +
        ("0" + waktuPemesanan.getMinutes()).slice(-2) +
        ":00"; // Assuming seconds are set to 00

      // Calculate the total payment based on the selected package
      var totalPayment = parseInt(selectedPackage);

      // Format the total payment as currency
      var formattedTotalPayment = new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
      }).format(totalPayment);

      // Send data to the server
      const response = await sendDataToServer({
        nama,
        jenis,
        nomorAntrian,
        waktuPemesanan: formattedDateTime,
        daftarpaket: selectedPackage, // <-- Fix the key here
        totalPembayaran: totalPayment,
      });



      if (response.status === "success") {
        console.log("Data sent successfully");
      } else {
        console.error("Error:", response.message);
      }

      // Display data in the table
      // Display data in the table
      displayDataInTable(
        nama,
        jenis,
        nomorAntrian,
        formattedDateTime,
        selectedPackage,
        formattedTotalPayment
      );

      // Clear the form
      clearForm();
    }

    async function sendDataToServer(data) {
      try {
        const response = await fetch("submit.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(data),
        });

        return await response.json();
      } catch (error) {
        return {
          status: "error",
          message: error.message
        };
      }
    }

    function displayDataInTable(
      nama,
      jenis,
      nomorAntrian,
      waktuPemesanan,
      paket,
      totalPembayaran
    ) {
      var tableBody = document.getElementById("antreanTableBody");
      var row = tableBody.insertRow();

      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      var cell4 = row.insertCell(3);
      var cell5 = row.insertCell(4);
      var cell6 = row.insertCell(5);

      cell1.innerHTML = nama;
      cell2.innerHTML = jenis;
      cell3.innerHTML = nomorAntrian;
      cell4.innerHTML = waktuPemesanan;
      cell5.innerHTML = paket;
      cell6.innerHTML = totalPembayaran;
    }

    function clearForm() {
      document.getElementById("nama").value = "";
      document.getElementById("jenis").value = "sedan";
      document.getElementById("nomorAntrian").value = "";
      document.getElementById("waktuPemesanan").value = "";
      document.getElementById("daftarpaket").value = "";
    }

    function getMonthName(monthIndex) {
      var months = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember",
      ];
      return months[monthIndex];
    }
  </script>
</body>

</html>
