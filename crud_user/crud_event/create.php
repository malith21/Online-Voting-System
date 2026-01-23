<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_name = $_POST['event_name'];
    $event_description = $_POST['event_description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    if ($start_date > $end_date) {
        echo "Start date cannot be later than the end date.";
    } else {
        $stmt = $conn->prepare("INSERT INTO events (event_name, event_description, start_date, end_date, status) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $event_name, $event_description, $start_date, $end_date, $status);
        if ($stmt->execute()) {
            header('Location: ../event_management.php');
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Event</title>
    <style>
        body {
            margin: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: small;
            background-color: #f0f0f0;
        }
        h1 {
            text-align: center;
            color: #003366;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"], textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: large;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #00509e;
        }
    </style>
</head>
<body>
    <h1>Create New Event</h1>
    <form method="POST" action="">
        <label for="event_name">Event Name:</label>
        <input type="text" name="event_name" id="event_name" required>

        <label for="event_description">Event Description:</label>
        <textarea name="event_description" id="event_description"></textarea>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" required>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select>

        <input type="submit" value="Create Event">
    </form>
</body>
</html>
