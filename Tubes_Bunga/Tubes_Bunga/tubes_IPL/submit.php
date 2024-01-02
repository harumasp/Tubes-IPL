<?php
header('Content-Type: application/json');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read and decode the JSON data sent in the request
    $data = json_decode(file_get_contents('php://input'), true);

    // Validate and sanitize the data (you should add more validation)
    $nama = htmlspecialchars($data['nama']);
    $jenis = htmlspecialchars($data['jenis']);
    $nomorAntrian = htmlspecialchars($data['nomorAntrian']); // Use the nomorAntrian received from the client
    $waktuPemesanan = date('Y-m-d H:i:s', strtotime($data['waktuPemesanan']));
    $daftarpaket = htmlspecialchars($data['daftarpaket']);
    $total_pembayaran = intval($data['totalPembayaran']);

    // Connect to your MySQL database (replace these variables with your database credentials)
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'carwash_db';

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Insert data into the 'pembayaran' table using prepared statements
    $stmt = $conn->prepare("INSERT INTO pembayaran (nama, jenis, nomorAntrian, waktuPemesanan, daftarpaket, total_pembayaran) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $nama, $jenis, $nomorAntrian, $waktuPemesanan, $daftarpaket, $total_pembayaran);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'nomorAntrian' => $nomorAntrian]); // Send the nomorAntrian back to the client
    } else {
        echo json_encode(['status' => 'error', 'message' => $stmt->error]);
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
