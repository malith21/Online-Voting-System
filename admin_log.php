<!-- admin_login.php -->
<?php
session_start();
include('config.php');  // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login credentials from the database
    $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        // Admin credentials are correct
        $_SESSION['admin'] = $username;  // Set session variable for logged-in admin
        header('Location: review_manage.php');  // Redirect to admin dashboard
    } else {
        // Invalid login attempt
        echo "<script>alert('Invalid username or password');</script>";
        echo "<script>window.location.href = 'home.php';</script>";  // Redirect back to login
    }
}
?>
