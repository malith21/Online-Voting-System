<?php
include '../config.php';

if (isset($_GET['id'])) {
    $event_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM events WHERE event_id = ?");
    $stmt->bind_param("i", $event_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $event = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_id = $_POST['event_id'];
    $event_name = $_POST['event_name'];
    $event_description = $_POST['event_description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    if ($start_date > $end_date) {
        echo "Start date cannot be later than the end date.";
    } else {
        $stmt = $conn->prepare("UPDATE events SET event_name = ?, event_description = ?, start_date = ?, end_date = ?, status = ? WHERE event_id = ?");
        $stmt->bind_param("sssssi", $event_name, $event_description, $start_date, $end_date, $status, $event_id);
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
    <title>Update Event</title>
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
    <h1>Edit Event</h1>
    <form method="POST" action="">
        <input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">
        <label for="event_name">Event Name:</label>
        <input type="text" name="event_name" id="event_name" value="<?php echo $event['event_name']; ?>" required>

        <label for="event_description">Event Description:</label>
        <textarea name="event_description" id="event_description"><?php echo $event['event_description']; ?></textarea>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" value="<?php echo $event['start_date']; ?>" required>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" value="<?php echo $event['end_date']; ?>" required>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="Active" <?php if ($event['status'] == 'Active') echo 'selected'; ?>>Active</option>
            <option value="Inactive" <?php if ($event['status'] == 'Inactive') echo 'selected'; ?>>Inactive</option>
        </select>

        <input type="submit" value="Update Event">
    </form>
</body>
</html>
