<?php
include '../config.php';

if (isset($_GET['id'])) {
    $event_id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM events WHERE event_id = ?");
    $stmt->bind_param("i", $event_id);
    if ($stmt->execute()) {
        header('Location: ../event_management.php');
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
