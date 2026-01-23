<?php
include('../config.php');

if (isset($_GET['id'])) {
    $r_id = $_GET['id'];

    // SQL to delete a reviewer
    $sql = "DELETE FROM reviewer WHERE R_id='$r_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Reviewer deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    // Redirect back to the admin dashboard or the reviewer list
    header("Location: ../review_manage.php");
    exit();
}
?>
