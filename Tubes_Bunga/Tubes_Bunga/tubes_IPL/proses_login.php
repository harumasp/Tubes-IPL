<?php
// Include the database connection file (assuming it's named "koneksi.php")
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform SQL query to check if the user exists
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if the query was successful and if a user was found
    if ($result && $result->num_rows > 0) {
        // User found, set user information in session
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirect to the next page (navbar.php in this case)
        header('Location: navbar.php');
        exit;
    } else {
        // User not found or invalid credentials, you may display an error message
        echo 'Invalid login credentials. Please try again.';
    }
}
// Close the database connection
$conn->close();
