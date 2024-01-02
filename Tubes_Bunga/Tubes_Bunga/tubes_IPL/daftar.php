<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Optional: Add styles for responsiveness */
        @media (max-width: 600px) {
            table {
                font-size: 12px;
            }
        }

        /* Gaya untuk tampilan cetak */
        @media print {
            body {
                font-family: Arial, sans-serif;
            }

            h1 {
                text-align: center;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #f5f5f5;
            }

            td {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
        }

        #backButton {
            position: fixed;
            bottom: 10px;
            left: 10px;
            padding: 10px 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            /* Sesuaikan ukuran font sesuai keinginan */

            /* Tambahkan style agar tombol pendek dan kecil */
            width: auto;
            height: auto;
            white-space: nowrap;
        }
    </style>

</head>

<body>
    <h2>Data Pembayaran</h2>

    <!-- Tabel untuk menampilkan data pembayaran -->
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nomor Antrian</th>
                <th>Waktu Pemesanan</th>
                <th>Daftar Paket</th>
                <th>Total Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Sertakan koneksi ke database dan logika pengambilan data di sini

            // Contoh: Ambil data dari database (gunakan mysqli atau PDO sesuai kebutuhan)
            $conn = new mysqli("localhost", "root", "", "carwash_db");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM pembayaran";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["nama"] . "</td>
                            <td>" . $row["nomorAntrian"] . "</td>
                            <td>" . $row["waktuPemesanan"] . "</td>
                            <td>" . $row["daftarpaket"] . "</td>
                            <td>" . $row["total_pembayaran"] . "</td>
                            <td><button onclick='printRow(\"" . $row["nama"] . "\", \"" . $row["nomorAntrian"] . "\", \"" . $row["waktuPemesanan"] . "\", \"" . $row["daftarpaket"] . "\", \"" . $row["total_pembayaran"] . "\")'>Cetak</button></td>
                            </tr>";
                    // Tambahkan kolom lain sesuai kebutuhan
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
        <button id="backButton" onclick="goBack()">Back</button>
    </table>

    <!-- Skrip JavaScript untuk fungsi pencetakan berdasarkan data -->
    <script>
        function printRow(nama, nomorAntrian, waktuPemesanan, daftarpaket, total_pembayaran) {
            // Di sini Anda dapat menyesuaikan logika pencetakan berdasarkan data yang dipilih.
            // Contoh: Membuka jendela pencetakan dengan data yang sesuai
            var printWindow = window.open('', '_blank');
            printWindow.document.write('<html><head><title>Cetak Data: ' + nama + '</title></head><body>');
            printWindow.document.write('<h1>Data Pembayaran - ' + nama + '</h1>');
            printWindow.document.write('<h1>Nama: ' + nama + '</h1>');
            printWindow.document.write('<h1>Nomor Antrian: ' + nomorAntrian + '</h1>');
            printWindow.document.write('<h1>Waktu Pemesanan: ' + waktuPemesanan + '</h1>');
            printWindow.document.write('<h1>Daftar Paket: ' + daftarpaket + '</h1>');
            printWindow.document.write('<h1>Total Pembayaran: ' + total_pembayaran + '</h1>');
            // Tambahkan data lainnya sesuai kebutuhan
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>
    <script>
        function goBack() {
            // Menggunakan fungsi window.history.back() untuk kembali ke halaman sebelumnya
            window.history.back();
        }
    </script>
</body>

</html>