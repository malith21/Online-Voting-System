<?php
include '../config.php';

$sql = "SELECT * FROM nominees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nominee Dashboard</title>
    <style>
        
                /* Ensure the html and body take the full height of the screen */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: #f0f0f0;
        }

        /* Make the container flex, so the sidebar and main content are next to each other */
        .container {
            display: flex;
            height: 100vh; /* Full viewport height */
        }

        /* Sidebar styling */
        .sidebar {
            width: 220px;
            background-color: #003366;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .sidebar h2 {
                    margin-top: 0;
                    font-size: 22px;
                    color: #fff;
                }
                .sidebar a {
                    color: #b0d4ff;
                    text-decoration: none;
                    padding: 10px 0;
                    display: block;
                }
                .sidebar a:hover {
                    background-color: #00509e;
                    border-radius: 5px;
                }

        /* Ensure the main content takes the remaining width and grows */
        .main-content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f0f0f0;
            overflow-y: auto; /* Ensure content doesn't overflow */
        }

        /* Navbar styling */
        .navbar {
            background-color: #007BFF;
            padding: 10px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h3 {
            margin: 0;
        }

        /* Table section styling */
        .table-section {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: auto;
        }

        h4 {
            text-align: center;
            font-size: 24px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #003366;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Buttons and actions */
        .actions a {
            text-decoration: none;
            padding: 5px 10px;
            margin-right: 5px;
            color: white;
            background-color: #D32F2F;
            border-radius: 3px;
        }

        .actions a.edit {
            background-color: #4CAF50;
        }

        .edit-btn, .delete-btn {
            padding: 8px 12px;
            border-radius: 5px;
            text-align: center;
        }

        .edit-btn {
            background-color: #4CAF50;
            color: white;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
        }

        .edit-btn:hover, .delete-btn:hover {
            opacity: 0.8;
        }

        .add-new {
            display: block;
            width: 150px;
            margin: 20px auto;
            background-color: #007BFF;
            color: white;
            padding: 10px 0;
            text-align: center;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <h2>Admin Dashboard</h2>
                <a href="../crud_user/user-manage.php"> User Management</a>
                <a href="../crud_nom/index.php"> Nominee Management</a>
                <a href="../review_manage.php"> Reviewer Management</a>
                <a href="../event_management.php"> Event Management</a>
                <a href="../crud_faq/read.php"> FAQ Management</a>
                <a href="#"> Logs</a>
                <a href="#"> Settings</a>
            </div>
            <div>
                <a href="../logout.php">Logout</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="table-section">
            <h1>Nominee Dashboard</h1>

            <div class="x1">
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Category</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>

                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" class="edit-btn">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" class="delete-btn">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>

            <a href="insert.php" class="add-new">Add New Nominee</a>
        </div>
    </div>

</body>
</html>
