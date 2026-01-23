<?php
// Database connection
include '../config.php';

$sql = "SELECT id, name, email, question FROM question"; // Include id in the query
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTE.lk - User Responses</title>
    <!-- Boxicons for icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styles */
        header {
            background-color: #003366;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo img {
            height: 40px;
        }

        header nav ul {
            display: flex;
            list-style: none;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        header .header-btn .log-out {
            background-color: #00509e;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Table Container */
        .container {
            padding: 20px;
            text-align: center;
            flex: 1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        table th {
            background-color: #003366;
            color: white;
        }

        table td {
            background-color: #f9f9f9;
        }

        table td .action-btn {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        table td .edit-btn, 
        table td .delete-btn {
            background-color: #00509e;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        table td .delete-btn {
            background-color: #e74c3c;
        }

        /* Footer Styles */
        footer {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 24px;
        }

        footer .footer-nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 10px 0;
        }

        footer .footer-nav ul li {
            margin: 0 10px;
        }

        footer .footer-bottom a {
            color: white;
            text-decoration: none;
        }

        footer .bottom p {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<!-- Header section -->
<header>
    <a href="#" class="logo"><img src="images/logo.png" alt="Logo"></a>
    <nav>
        <ul class="navbar">
        <li><a href="#home">Home</a></li>
            <li><a href="#vote">Vote</a></li>
            <li><a href="#aboutus">Nominee</a></li>
            <li><a href="#news">Result</a></li>
    </nav>
    <div class="header-btn">
        <a href="../logout.php" class="log-out">Log out</a>
        <i class='bx bxs-user'></i>
    </div>
</header>

<!-- Body section -->
<div class="container">
    <h1>User Responses</h1>

    <div class="table-container">
        <table id="response-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Question</th>
                    <th>Actions</th> <!-- New column for actions -->
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["id"]."</td>"; // Display id
                        echo "<td>".$row["name"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["question"]."</td>";
                        echo "<td class='action-btn'>
                                <a href='update.php?id=".$row["id"]."' class='edit-btn'>Edit</a>
                                <a href='delete.php?id=".$row["id"]."' class='delete-btn' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>
                              </td>"; // Added edit and delete buttons with actions
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No Results</td></tr>"; // Adjust colspan to match new column count
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Footer section -->
<footer>
    <div class="footer-container">
        <div class="social-icons">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-youtube'></i></a>
        </div>
    </div>
    <div class="footer-nav">
        <ul>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#company">Company</a></li>
            <li><a href="#contactus">Contact Us</a></li>
        </ul>
    </div>
    <div class="footer-bottom">
       
    </div>
    <div class="bottom">
     
    </div>
</footer>



</body>
</html>
