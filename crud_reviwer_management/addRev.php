<?php
// Include your database connection here
include('../config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    
    $r_name = $_POST['r_name'];
    $r_email = $_POST['r_email'];
    $r_role = $_POST['r_role'];
    $status = $_POST['status'];

    // Insert new reviewer into the database
    $sql_insert = "INSERT INTO reviewer (R_id, R_name, R_email, R_role, status) 
                   VALUES ('', '$r_name', '$r_email', '$r_role', '$status')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "New reviewer added successfully.";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Reviewer</title>
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

<h2>Add Reviewer</h2>

<!-- Form for adding a new reviewer -->
<form method="POST" action="">

    <label for="r_name">Reviewer Name:</label><br>
    <input type="text" id="r_name" name="r_name" required><br><br>

    <label for="r_email">Reviewer Email:</label><br>
    <input type="email" id="r_email" name="r_email" required><br><br>

    <label for="r_role">Reviewer Role:</label><br>
    <input type="text" id="r_role" name="r_role" required><br><br>

    <label for="status">Status:</label><br>
    <select id="status" name="status" required>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select><br><br>

    <button type="submit">Add Reviewer</button>
</form>

<h2>Existing Reviewers</h2>

<!-- Table to display reviewers -->
<table>
    <tr>
        <th>Reviewer ID</th>
        <th>Reviewer Name</th>
        <th>Reviewer Email</th>
        <th>Reviewer Role</th>
        <th>Status</th>
    </tr>

    <?php
    // Fetch and display existing reviewers
    $sql = "SELECT * FROM reviewer";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["R_id"] . "</td><td>" 
                 . $row["R_name"] . "</td><td>" 
                 . $row["R_email"] . "</td><td>" 
                 . $row["R_role"] . "</td><td>" 
                 . $row["status"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No reviewers found.</td></tr>";
    }
    ?>
</table>

</body>
</html>
