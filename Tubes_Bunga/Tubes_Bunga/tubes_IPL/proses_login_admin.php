<?php
// Include the database connection file (assuming it's named "koneksi.php")
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get admin input from the form
    $admin_nama = $_POST['username'];
    $admin_password = $_POST['password'];

    // Perform SQL query to check if the admin exists
    $sql = "SELECT * FROM admin WHERE nama = '$admin_nama' AND password = '$admin_password'";
    $result = $conn->query($sql);

    // Check if the query was successful and if an admin was found
    if ($result && $result->num_rows > 0) {
        // Admin found, retrieve admin data
        $admin_data = $result->fetch_assoc();

        // Start session and store admin information
        session_start();
        $_SESSION['admin_id'] = $admin_data['id'];
        $_SESSION['admin_nama'] = $admin_data['nama'];

        // Redirect to the admin dashboard or perform additional actions
        header('Location: navbaradmin.php');
        exit;
    } else {
        // Admin not found or invalid credentials, you may display an error message
        echo 'Invalid login credentials. Please try again.';
    }
}
// Close the database connection
$conn->close();
