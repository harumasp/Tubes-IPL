<?php
// update_payment.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carwash_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));

$nomorAntrian = $data->nomorAntrian;
$editedNama = $data->editedNama;
$editedJenis = $data->editedJenis;
$editedDaftarpaket = $data->editedDaftarpaket;
$editedTotalPembayaran = $data->editedTotalPembayaran;

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("UPDATE pembayaran SET 
                        nama=?, 
                        jenis=?, 
                        daftarpaket=?, 
                        total_pembayaran=? 
                        WHERE nomorAntrian=?");

$stmt->bind_param("ssdsi", $editedNama, $editedJenis, $editedDaftarpaket, $editedTotalPembayaran, $nomorAntrian);

if ($stmt->execute()) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error", "message" => $stmt->error));
}

$stmt->close();
$conn->close();
