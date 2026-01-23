<?php
    session_start();
    // Check if the admin is logged in, otherwise redirect to the home page
    if (!isset($_SESSION['admin'])) {
        header('Location: home.php'); // Redirect to the home page if not logged in
        exit();
    }

    include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

        .btn1 {
            background-color: #007BFF;
            color: white;
            padding: 15px;
            margin: 10px auto;
            border-radius: 5px;
            display: block;
            width: 190px;
            text-align: center;
        }

        .btn1 a {
            font-size: large;
            color: #f0f0f0;
            text-decoration: none;
        }

        button {
            background-color: #4CAF50; /* Green for update */
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button.delete {
            background-color: #FF5722; /* Orange-red for delete */
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
            <a href="crud_user/user-manage.php"> User Management</a>
            <a href="crud_nom/index.php"> Nominee Management</a>
            <a href="review_manage.php"> Reviewer Management</a>
            <a href="event_management.php"> Event Management</a>
            <a href="crud_faq/read.php"> FAQ Management</a>
            <a href="#"> Logs</a>
            <a href="#"> Settings</a>
        </div>
        <div>
            <a href="logout.php">Logout</a> <!-- Add a working logout link -->
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navigation Bar -->
        <div class="navbar">
            <h3>Admin Dashboard</h3>
            <div>Admin Profile</div>
        </div>

        <!-- Table Section -->
        <div class="table-section">
            <h4>Recent Users</h4>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php
			$sql= "select * from reviewer";
			$result=$conn-> query($sql);

			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					echo "<tr><td>".$row["R_id"]."</td><td>"
					.$row["R_name"]."</td><td>"
					.$row["R_email"]."</td><td>"
					.$row["R_role"]."</td><td>"
                    .$row["status"]."</td>
					
					<td><button><a href='crud_reviwer_management/update.php?id=".$row["R_id"]."'>Update</a></button>
					<button class='delete'><a href='crud_reviwer_management/delete.php?id=".$row["R_id"]."'>Delete</a></button></td></tr>";
				}
			}else{
				echo "empty rows";
			}
			mysqli_close($conn);

		?>
            </table>
        </div>
        <button class="btn1"><a href="crud_reviwer_management\addRev.php">Add Reviewer</a></button>
        <br>
    </div>
</div>

</body>
</html>
