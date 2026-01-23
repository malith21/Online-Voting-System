<?php
include('../config.php');

if (isset($_GET['id'])) {
    $r_id = $_GET['id'];

    // Fetch the reviewer details based on the ID
    $sql = "SELECT * FROM reviewer WHERE R_id='$r_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $r_name = $row['R_name'];
        $r_email = $row['R_email'];
        $r_role = $row['R_role'];
        $status = $row['status'];
    } else {
        echo "No reviewer found!";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $r_id = $_POST['r_id']; // Get the ID from the hidden field
    $r_name = $_POST['r_name'];
    $r_email = $_POST['r_email'];
    $r_role = $_POST['r_role'];
    $status = $_POST['status'];

    // Update query
    $sql_update = "UPDATE reviewer 
                   SET R_name='$r_name', R_email='$r_email', R_role='$r_role', status='$status' 
                   WHERE R_id='$r_id'";

    if ($conn->query($sql_update) === TRUE) {
        echo "Reviewer updated successfully";
        header("Location: ../review_manage.php"); // Redirect back to the dashboard
        exit();
    } else {
        echo "Error: " . $sql_update . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Reviewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FAFAFA;
            color: #333;
        }
        form {
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h2>Update Reviewer</h2>
<form action="update.php" method="POST">
    <input type="hidden" name="r_id" value="<?php echo $r_id; ?>">

    <label for="r_name">Reviewer Name:</label>
    <input type="text" name="r_name" value="<?php echo $r_name; ?>" required><br>

    <label for="r_email">Reviewer Email:</label>
    <input type="email" name="r_email" value="<?php echo $r_email; ?>" required><br>

    <label for="r_role">Reviewer Role:</label>
    <input type="text" name="r_role" value="<?php echo $r_role; ?>" required><br>

    <label for="status">Status:</label>
    <select name="status" required>
        <option value="Active" <?php if ($status == 'Active') echo 'selected'; ?>>Active</option>
        <option value="Inactive" <?php if ($status == 'Inactive') echo 'selected'; ?>>Inactive</option>
    </select><br><br>

    <input type="submit" value="Update Reviewer">
</form>

</body>
</html>
