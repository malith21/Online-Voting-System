
<?php
session_start();
error_reporting(0);

include '../config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #003366;
            color: white;
        }

        .btn {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            text-decoration: none;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn.edit {
            background-color: #28a745; 
        }

        .btn.delete {
            background-color: #dc3545; 
        }

        .btn:hover {
            opacity: 0.8;
        }

        .container {
            padding: 20px;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>All Registered Users</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch all user data from the 'users' table
            $query = mysqli_query($conn, "SELECT * FROM users");
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile_no']; ?></td>
                <td><?php echo $row['role']; ?></td>
                
                <td>
                    <a href="user-edit.php?id=<?php echo $row['id']; ?>" class="btn edit" onclick="return confirm('Are you sure you want to edit this <?php echo $row['name']; ?> details ?');">Edit</a>
                    <a href="user-delete.php?id=<?php echo $row['id']; ?>" class="btn delete" onclick="return confirm('Are you sure you want to delete this <?php echo $row['name']; ?> ?');">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>

