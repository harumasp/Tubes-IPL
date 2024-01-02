<?php
// get_payment_data.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carwash_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nomorAntrian = $_GET['nomorAntrian'];

$sql = "SELECT * FROM pembayaran WHERE nomorAntrian=$nomorAntrian";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Explicitly include the total_pembayaran property in the JSON response
    $row['total_pembayaran'] = (int)$row['total_pembayaran'];
    echo json_encode($row);
} else {
    echo json_encode(array("status" => "error", "message" => "Payment data not found"));
}

$conn->close();
