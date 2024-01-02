<?php
// Sertakan file koneksi database Anda
include('koneksi.php');

// Query untuk mendapatkan data pembayaran
$query = "SELECT * FROM pembayaran";
$result = $conn->query($query);

// Ubah data menjadi format JSON
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Tutup koneksi database
$conn->close();

// Mengembalikan data dalam format JSON
echo json_encode($data);
