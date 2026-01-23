<?php

include '../config.php';


if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    // Delete the user
    $delete_query = mysqli_query($conn, "DELETE FROM users WHERE id='$uid'");

    if ($delete_query) {
        echo "<script>alert('User deleted successfully!');</script>";
        echo "<script type='text/javascript'> document.location ='user-manage.php'; </script>";
    } else {
        echo "<script>alert('Error deleting user. Please try again.');</script>";
    }
}


?>